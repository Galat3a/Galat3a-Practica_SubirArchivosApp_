@extends('base')

@section('content')
<br>
    <h1>Cargar Archivos</h1>
    <br>
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Subir</button>
    </form>
@endsection