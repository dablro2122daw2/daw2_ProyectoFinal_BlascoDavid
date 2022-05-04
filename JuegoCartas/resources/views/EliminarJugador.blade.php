@extends('disseny')

@section('content')

<h1>Eliminació del Compte</h1>
<div class="card mt-5">
  <div class="card-header">
    ¿Estas segur que vols eliminar el teu compte?<br>

  </div>

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

      <form method="get" action="{{ route('confirmarEliminacio') }}">
        @csrf   
        <div class="form-group">  
              <label for="Username">Username</label>
              <input type="text" class="form-control" name="Username"/>
          </div>
        <div class="form-group">  
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="Password"/>
          </div>
          

          <button type="submit" class="btn btn-block btn-primary">Eliminar Compte Jugador</button>
      </form>
  </div>
</div>
<br><a href="{{ url('/MenuJugador') }}">Tornar Enrrera</a>
@endsection