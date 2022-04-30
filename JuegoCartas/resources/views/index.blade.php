@extends('disseny')

@section('content')

<h1>Llista de Jugadors</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Username</td>
          <td>Password</td>
          <td>Rango</td>
        </tr>
    </thead>
    <tbody>
        @foreach($jugadors as $jug)
        <tr>
            <td>{{$empl->id}}</td>
            <td>{{$empl->Username}}</td>
            <td>{{$empl->Password}}</td>
            <td>{{$empl->Rango}}</td>
            <td class="text-left">
                <a href="{{ route('jugadors.edit', $jug->id)}}" class="btn btn-success btn-sm">Editar</a>
                <form action="{{ route('jugadors.destroy', $jug->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborrar</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('jugadors/create') }}">Accés Directe a la Vista de Creació de Jugadors</a>
@endsection