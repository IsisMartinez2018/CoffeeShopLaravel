<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\orders;

use Illuminate\Support\Facades\Input;

class orderControllerUser extends Controller
{
    

    public function create()
    {
        return view("ordervistauser");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$validatedData = $request->validate([
'Nombre' => 'required|alpha|string|max:255',
'Apellido' => 'required|alpha|string|max:255',
'Email' => 'required|string|max:255|email',
'Telefono' => 'required|integer',
'Cantidad' => 'required|integer|min:1|max:10',
'Fecha' => 'required|date|string|max:255|after:today',
'Comentario' => 'string|max:100'
]);






$user = new orders;
    $user->Nombre = Input::get("Nombre");
    $user->Apellido = Input::get("Apellido");
    $user->Email = Input::get("Email");
    $user->Telefono = Input::get("Telefono");
    $user->Cantidad = Input::get("Cantidad");
    $user->Fecha = Input::get("Fecha");
    $user->Comentario = Input::get("Comentario");

    $user->Type_Coffee = Input::get("Type_Coffee");
    $user->Size = Input::get("Size");
    $user->Extra = Input::get("Extra");
    $user->Dulzor = Input::get("Dulzor");
    $user->id_users = Input::get("id_users");
    
    $user->save();
        return redirect()->to('/homevista')->with('success','Registro creado satisfactoriamente');
    }

    }