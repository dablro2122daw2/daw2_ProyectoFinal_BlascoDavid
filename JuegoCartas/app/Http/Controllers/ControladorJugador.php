<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Support\Facades\Hash;

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
    public function update(Request $request, $id)
    {
        $datos = $request->validate([
            'Username' => 'required|max:255',
            'Password' => 'required|max:255',
        ]);

        Jugador::whereId($id)->update($datos);
        return redirect('/jugadors')->with('completed', 'Jugador Actualitzat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();
        return redirect('/jugadors')->with('completed', 'Jugador Eliminat!');
    }
}
