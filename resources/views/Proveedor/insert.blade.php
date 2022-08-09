@extends('menu')

@section('plantilla')

<form action="{{route('InsertProveedor')}}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="nombre" >
    <input type="text" name="telefono" placeholder="telefono">
    <input type="text" name="direccion" placeholder="direccion">
    <input type="submit" value="Registrar" >
</form>
@endsection


