@extends('disseny')

@section('content')

<h1>Actualització de les Dades Personals</h1>
<div class="card mt-5">
    <div class="card-header">
        Primer ha d'especificar els valors del seu Usuari per confirmar els canvis. </p>

        Després, seleccioni quin valor desitja modificar i escrigui el nou valor desitjat.

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="get" action="{{ route('confirmarActualitzacio') }}">
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="Username"/>
            </div>
        
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="Password"/>
            </div>

            <div class="form-group">
                Quin atribut vols modificar:</p>
                <label><input type="radio" name="Atribut" value="nouUsername">Username</label><br>
                <label><input type="radio" name="Atribut" value="nouPassword">Password</label>
            </div>

            <div class="form-group mb-4">
                <label>Nou Valor Que Vols Utilizar:</label>
                <input type="text" class="form-control" name="Valor">
            </div>
            
            <button type="submit" class="btn btn-block btn-danger">Actualitzar</button>
        </form>
    </div>
</div>
<br><a href="{{ url('/MenuJugador') }}">Tornar Enrrera</a>
@endsection