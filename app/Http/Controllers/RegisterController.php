<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store()
  {
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|between:8,255|confirmed',
    ], [
      'name.required' => 'El nombre de usuario es requerido.',
      'email.required' => 'El email es requerido.',
      'password.required' => 'Una contraseña es requerida.',
      'password.confirmed' => 'Las contraseñas no coinciden.',
      'password.between' => 'Las contraseñas deben de tener al menos 8 carácteres.',
    ]);

    $user = User::create(request(['name', 'email', 'password']));
    auth()->login($user);

    return redirect('/')->with('success', 'Tu cuenta ha sido creada.');
  }
}
