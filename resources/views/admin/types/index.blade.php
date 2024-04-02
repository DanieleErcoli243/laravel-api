@extends('layouts.app')

@section('title', 'Tipi')


@section('content')
<div class="flex">
    <table class="text-center"> 
        <thead>
            <tr>
                <th>Id</th>
                <th>Etichetta</th>
                <th>
                    <a href="{{ route('admin.types.create') }}">
                    <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->label }}</td>
                
                
                <td>
                    <div class="action-btn">
                        <a href="{{ route('admin.types.edit', $type->id) }}"><i class="fas fa-pencil"></i></a>
                        <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" class="deleting-form">
                            @csrf
                            @method('DELETE')
                            <button class="delete" type="submit">
                                <i class="fas fa-trash-can"></i>
                            </button>
                        </form> 
                    </div>   
                </td>
                @empty
                <h1>Non ci sono tipi</h1>
                @endforelse
            </tr>
        </tbody>
        
    </table>
</div>


@endsection

@section('scripts')
@vite('resources/js/delete-confirmation.js')
@endsection