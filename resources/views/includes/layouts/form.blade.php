@if($project->exists)
<form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

@else
<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
@endif   
    <div class="form-row">
        <label for="title">Inserisci titolo</label>
        <input type="text" id="title" name="title" value="{{ old('title', $project->title)}}">
        <label for="image"></label>
        <input type="file" id="image" name="image">
        <label for="type_id">Scegli il tipo</label>
        <select id="type_id" name="type_id">
            <option value="">Nessuno</option>
            @foreach($types as $type)
            <option value="{{ $type->id }}" @if(old('type_id', $project->type?->id) == $type->id) selected @endif>{{ $type->label }}</option>
            @endforeach
        </select>
        <div class="tech-checks">
            @foreach($technologies as $technology)
            <label for="{{ "technology-$technology->id" }}">{{ $technology->label }}</label>
            <input type="checkbox" name="technologies[]" id="{{ "technology-$technology->id" }}" value="{{ $technology->id }}" @if(in_array($technology->id, old('technologies', $prev_technologies ?? []))) checked @endif>
            @endforeach
        </div>
        <label for="description">Inserisci una breve descrizione</label>
        <textarea type="text" id="description" name="description">{{ old('description', $project->description)}}</textarea>

        <button type="submit" class="sub-btn">Invia</button>
    </div>
</form>
 