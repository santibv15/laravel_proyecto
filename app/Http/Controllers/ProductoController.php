<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function ViewInsertProd ()
    {

        $infoproveedor = App\Proveedor::All();
      return view('Producto/insert', compact('infoproveedor'));

    }

    public function InsertProd(Request $producto)
    {
        $ruta = Storage::disk('app/Public')->put('producto', $producto->file('foto'));
        $unavariable = asset($ruta);
        $instanciaproducto = new App\Producto;
        $instanciaproducto -> nombre = $producto->nombre;
        $instanciaproducto -> precio = $producto->precio;
        $instanciaproducto -> descripcion = $producto->descripcion;
        $instanciaproducto -> proveedor = $producto->proveedor;
        $instanciaproducto -> foto = $producto->foto;
        $instanciaproducto -> foto_url = $producto->foto_url;
        $instanciaproducto -> save();
       
        //return redirect('Producto/view')->with('guardado', 'Producto insertado con exito');
    }
}
