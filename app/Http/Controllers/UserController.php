<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Mostrar detalles del usuario si es admin.
     *
     * @param  int  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {

        $user = User::find($id);


        if ($user && $user->isAdmin()) {

            return view('dashboard', compact('user'));
        } else {

            return redirect()->route('home')->with('error', 'Acceso denegado. No eres un administrador.');
        }
    }
}
