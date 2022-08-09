@extends('menu')
@section('plantilla')
    <form action="{{Route('InsertProducto')}}" method="POST" >
        @csrf <!--esto es para el token-->
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="number" name="precio" placeholder="precio">
        <input type="text" name="descripcion" placeholder="descripcion">
        <select name="proveedor" id="ui search dropdown" >
            <option value="">seleccione un proveedor</option>
            @foreach ($infoproveedor as $proveedor)
           <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
            @endforeach
        </select>
        <input type="file" name="foto" accept=".jpg, .png, .gif">

        <input type="submit" value="Registrar">
        
    </form>
@endsection