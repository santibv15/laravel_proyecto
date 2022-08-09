@extends('menu')

@section('plantilla')

<div class="ui success mesagge">
   <i class="close icon"></i>
   <div class="header">
      {{session('guardado')}}
   </div>
</div>

<table class="table">
   <thead>
     <tr>
       <th scope="col">nombre</th>
       <th scope="col">telefono</th>
       <th scope="col">direccion</th>
       <th scope="col">acciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $proveedor)
          
      
     <tr>
    
       <td>{{$proveedor->nombre}}</td>
       <td>{{$proveedor->telefono}}</td>
       <td>{{$proveedor->direccion}}</td>
       <td>
        <a href="{{route('DeleteProveedor', $proveedor)}}"> <i class='bx bxs-message-square-x'></i></a>
        <a href="{{route('UpdateProveedor', $proveedor)}}"><i class='bx bx-rotate-right'></i></a> 
         <i class='bx bxs-bullseye'></i>
       </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
@endsection