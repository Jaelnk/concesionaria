@extends('layout.main')

@section('title','Contactos')

@section('content')
<h1>Contáctanos</h1>
<hr>

<p>Bienvenidos - {{$name}}</p>

<hr>
@switch($name)
    @case(1)
        Bienvenido Administrador
    @break
    @case(2)
        Bienvenido Empleado
    @break
    @case(3)
        Bienvenido Gerente
    @break
    @default
        Bienvenido Invitado
    @endswitch
@endsection()