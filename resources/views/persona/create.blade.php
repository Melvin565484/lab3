@extends('layouts.app')
@section('content')
    <h2>Nuevo Registro de Mascota</h2>

    <form action="{{ url('/persona') }}" method="POST">
        @csrf
        @include('persona.form')
    
    </form>
@endsection