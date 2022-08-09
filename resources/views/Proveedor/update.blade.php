@extends('menu')

@section('plantilla')


<form action="{{route('UpdateBdProveedor')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updateproveedor->id}}">
    <input type="text" name="nombre" value="{{$updateproveedor->nombre}}" >
    <input type="text" name="telefono" value="{{$updateproveedor->telefono}}">
    <input type="text" name="direccion" value="{{$updateproveedor->direccion}}">
    <input type="submit" value="Actualizar"  >
</form>
@endsection


