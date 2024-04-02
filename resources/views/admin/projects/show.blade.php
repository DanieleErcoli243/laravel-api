@extends('layouts.app')

@section('title', 'Dettaglio')



@section('content')

    <div class="show-card">
        <div>
            <figure>
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
            </figure>
        </div>
        <div>
            <h3>{{ $project->title }}</h3>
            <h4>Categoria: @if($project->type) {{ $project->type->label }} @else {{'Nessuna'}} @endif</4>
           <div>
                @forelse($project->technologies as $technology)
                <span class="techs">
                    {{ $technology->label }}
                </span>
                @empty
                    <p>Nessuno</p>    
                @endforelse
            </div>
            <p>Descrizione: {{ $project->description }}</p>
        </div>
        <div class="navigation">
            <a href=" {{ route('admin.projects.index')}} ">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="{{ route('admin.projects.edit', $project->id) }}">
                <i class="fas fa-pencil"></i>
            </a>
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="deleting-form">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">
                    <i class="fas fa-trash-can"></i>
                </button>
            </form>    
        </div>

    </div>

@endsection

@section('scripts')
@vite('resources/js/delete-confirmation.js')
@endsection