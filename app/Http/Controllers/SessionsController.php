<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
  public function create()
  {
    return view('auth.login');
  }

  public function store() {
    if (!auth()->attempt(request(['email', 'password']))) {
      return back()->withErrors([
        'message' => 'Las credenciales no coinciden.',
      ]);
    } else {
      if (auth()->user()->is_admin) {
        return redirect()->route('admin.index');
      }
    }

    return redirect()->route('home.index');
  }

  public function destroy() {
    auth()->logout();
    return redirect()->route('home.index');
  }
}
