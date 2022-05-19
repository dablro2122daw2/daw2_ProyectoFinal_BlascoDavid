<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jugador;
use Illuminate\Support\Facades\Hash;

class ControladorLogin extends Controller
{
  /**
   * Handle an authentication attempt.
   *
   * @param \Illuminate\Http\Request $peticio
   * @return \Illuminate\Http\Response
   */
  public function username()
  {
      return 'Username';
  }

  public function autentica(Request $peticio)
  {
      
      
      $credencials = $peticio->validate([
      'Username' => ['required'],
      'Password' => ['required'],
      ]);

    //Intento de Busquda de Usuario/Contraseña Automatica (No funciona)
      /*if (Auth::attempt(['Username' => $peticio->Username, 'Password' => Hash::make($peticio->Password)])) {
      $peticio->session()->regenerate();
      return view('index');
      }
      return back()->withErrors([
      'Username' => 'Les credencials no corresponen a un jugador existent.',
      ]);*/


      //Acabo decidiendo hacerlo de forma manual usando Laravel, que al menos funciona.
      $user = Jugador::where('Username', $peticio->Username)->first();

      if (isset($user['Password']) && Hash::check($peticio->Password, $user["Password"])) {
        Auth::login($user);
        setcookie('username', $peticio->Username);
        return redirect('/MenuJugador');
      }
      else {
        return back()->withErrors([
          'Username' => 'Les credencials no corresponen a un jugador existent.',
          ]);
      }   
  }

  public function logout(){
    Auth::logout();
    unset($_COOKIE["username"]);
    return redirect('/');
  }
}