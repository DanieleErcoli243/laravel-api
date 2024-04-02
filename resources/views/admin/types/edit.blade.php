@extends('layouts.app')

@section('title', 'Crea Tipo')

@section('content')

<div>
    <form action="{{ route('admin.types.store') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="label">Aggiungi Etichetta</label>
            <input type="text" id="label" name="label" value="{{ old('label', $type->label)}}">
        </div>
        <button type="submit">Invia</button>
    </form>
</div>

@endsection