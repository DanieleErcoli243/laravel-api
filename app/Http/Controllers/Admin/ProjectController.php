<?php

namespace App\Http\Controllers\Admin;

use App\Models\Technology;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::select('label', 'id')->get();
        $technologies = Technology::select('label', 'id');
        $projects = Project::all();
        return view('admin.projects.index', compact('projects','types', 'technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $types = Type::select('label', 'id')->get();
        $technologies = Technology::select('label', 'id')->get();
        $project = new Project();
        return view('admin.projects.create', compact('project', 'types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'title' => 'unique:projects|string|required',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'nullable|exists:technologies,id'
        ]);
        
        dd($data);

        $project = new Project();
        
        $project->fill($data);

        // if(Arr::exists($data, 'image')){
        //     $extension = $data['image']->extension();
        //    $img_url =  Storage::putFile('project_images', $data['image'], "$project->title.$extension");
        //    $project->image = $img_url;
        // }

        $project->save();


        if(Arr::exists($data, 'technologies')){
            $project->technologies()->attach($data['technologies']);
        }

        return to_route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $prev_technologies = $project->technologies->pluck('id')->toArray();
        
        $types = Type::select('label', 'id')->get();
        $technologies = Technology::select('label', 'id')->get();
        return view('admin.projects.edit', compact('project', 'types', 'technologies', 'prev_technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        
        
        $data = $request->validate([
            'title' => [Rule::unique('projects')->ignore($project->id), 'string', 'required'],
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'nullable|exists:technologies,id'
        ]);

       

        // if(Arr::exists($data, 'image')){
        //     $extension = $data['image']->extension();

        //     $img_url =  Storage::putFile('project_images', $data['image'], "$project->title.$extension");
        //     $project->image = $img_url;
        //  }; 

        $project->fill($data);

        $project->update($data);

         if(Arr::exists($data, 'technologies')){
             $project->technologies()->sync($data['technologies']);
        } elseif (!Arr::exists($data, 'technologies') && $project->has('technologies')) {
            $project->technologies()->detach();
        }

        return to_route('admin.projects.show', $project); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if($project->has('technologies')){
            $project->technologies()->detach();
        }
        if($project->image){
            Storage::delete($project->image);
        }
        $project->delete();
        return to_route('admin.projects.index');
    }
}
