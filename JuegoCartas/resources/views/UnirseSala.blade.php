@extends('disseny')

@section('content')

<h1>Connexió a Sala de Joc Creada</h1>
<div class="card mt-5">
  <div class="card-header">
      Especifiqui el Codi de Sala al que vol Unir-se:
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
        
        
        <form method="get" action="/jugar" >
            @csrf   
            <div class="form-group">  
                Codi de Sala</p>
                <input type="text" class="form-control" name="sala">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Unir-se a Partida</button>
        </form>
    </div>
</div>
<br><a href="{{ url('/MenuJugador') }}">Tornar Enrrera</a>
@endsection