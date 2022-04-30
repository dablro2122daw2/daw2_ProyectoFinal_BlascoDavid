@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('jugadors.update', $jugador->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="Username" value="{{ $jugador->Username }}" />
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control" name="Password" value="{{ $jugador->Password }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitzar</button>
        </form>
    </div>
</div>
<br><a href="{{ url('jugadors') }}">Accés Directe a la Llista de Jugadors</a
@endsection