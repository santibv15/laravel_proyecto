<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; //me trae todos los modelos
class ProveedorController extends Controller
{
    public function InsertPro(Request $proveedor) //el request trae todos los datos de la base de datos y lo guarda en la variable
    {
        $instanciaproveedor = new App\Proveedor;
        $instanciaproveedor->nombre = $proveedor->nombre;
        $instanciaproveedor->telefono = $proveedor->telefono;
        $instanciaproveedor->direccion = $proveedor->direccion;
        $instanciaproveedor->save();

       return redirect('Proveedor/view')->with('guardado', 'el proveedor fue guardado con exito');
    }

    public function ViewPro(){
        $objetoretornado = App\Proveedor::All();
        return view('Proveedor/view',compact('objetoretornado'));
    }
    
    public function DeletePro($id)
    {
        $deleteproveedor = App\Proveedor::FindOrFail($id);
        $deleteproveedor->delete();
        return redirect('Proveedor/view')->with('guardado', 'fue eliminado con exito');
    }

    public function UpdatePro($id)
    {
        $updateproveedor = App\Proveedor::FindOrFail($id);
        return view('Proveedor/update', compact('updateproveedor'));
    }

    public function UpdateBdPro(Request $proveedor)
    {
        $instanciaproveedor =  App\Proveedor::FindOrFail($proveedor->id);
        $instanciaproveedor -> nombre = $proveedor->nombre;
        $instanciaproveedor -> telefono = $proveedor->telefono;
        $instanciaproveedor -> direccion = $proveedor->direccion;
        $instanciaproveedor ->save();

        return redirect('Proveedor/view') -> with('guardado', 'registro actualizado con exito');
    }

}
