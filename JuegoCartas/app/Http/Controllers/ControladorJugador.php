<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ControladorJugador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadors = Jugador::all();
        return view('CrearJugador', compact('jugadors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CrearJugador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugador = new Jugador([
            'Username' => $request->get('Username'),
            'Password' => Hash::make($request->get('Password')),
            'Rango' => 100
        ]);

        $jugador->save();
        return redirect('/')->with('completed', 'Jugador creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Jugador::findOrFail($id);
        return view('actualitza', compact('empleat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $peticio)
    {
        $credencials = $peticio->validate([
            'Username' => ['required'],
            'Password' => ['required'],
        ]);

        $user = Jugador::where('Username', $peticio->Username)->first();

        
        if (isset($user['Password']) && Hash::check($peticio->Password, $user["Password"])){
            if($peticio->Atribut=='nouUsername'){
                Jugador::where('Username', $peticio->Username)->update(['Username'=> $peticio->Valor]);
            }
            else{
                Jugador::where('Username', $peticio->Username)->update(['Password'=> Hash::make($peticio->Valor)]);
            }
            return redirect('/MenuJugador');
        }
        else {
            return back()->withErrors(['Username' => 'Les credencials no corresponen al seu Compte de Jugador.',]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $peticio)
    {
        /*
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();
        return redirect('/jugadors')->with('completed', 'Jugador Eliminat!');
        */

        $credencials = $peticio->validate([
            'Username' => ['required'],
            'Password' => ['required'],
        ]);

        $user = Jugador::where('Username', $peticio->Username)->first();

        if (isset($user['Password']) && Hash::check($peticio->Password, $user["Password"])) {
        Auth::logout($user);
        $user->delete();
        return redirect('/');
        }
        else {
        return back()->withErrors([
            'Username' => 'Les credencials no corresponen al seu Compte de Jugador.',
            ]);
        }
    }
}
