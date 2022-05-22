@extends('disseny')

@section('content')

<h1>Creació d'un Compte de Jugador</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Jugador
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
      <form method="post" action="{{ route('jugadors.store') }}">
        @csrf   
        <div class="form-group">  
              <label for="Username">Username</label>
              <input type="text" class="form-control" name="Username"/>
          </div>
        <div class="form-group">  
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="Password"/>
          </div>
          

          <button type="submit" class="btn btn-block btn-primary">Crear Nou Jugador</button>
      </form>
  </div>
</div>
<br><a href="{{ url('/') }}">Tornar Enrrera</a>
@endsection