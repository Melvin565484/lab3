@extends('layouts.app')
@section('content')

    <h2>Listado</h2>

    <a href="{{ url('persona/create') }}">Agregar Registro</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->apellido }}</td>
                <td>
                    <form method="POST" action="{{ url('/persona/'. $persona->id) }}">
                    @csrf
                    <a href="{{ url('/persona/'. $persona->id . '/edit') }}" class="btn btn-success">Editar</a>
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')"
                    class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
    </table>
    <br/>
    {{ $personas->links('pagination::bootstrap-4') }}
@endsection