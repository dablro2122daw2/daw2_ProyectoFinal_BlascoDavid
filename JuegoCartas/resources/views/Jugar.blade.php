<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Conquest - Partida Iniciada</title>
    <link rel="stylesheet" href="/css/header.css"/>
    <link rel="stylesheet" href="/css/game.css"/>
    <script src="https://cdn.socket.io/4.5.0/socket.io.min.js" integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/websockets.js') }}"></script>
</head>
<body>
    <div class="header">
      <div class="imagenesMenu1">
        <img id="pug" src="/imgs/pug.png"/>
        <span class="code">
          <button class="copy" onclick="copy()" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>
          </button>
          Sala: 
          <span id="code">{{ $sala }}</span>
        </span>
      </div>
    </div>
    <div id="timer">
      <button onclick="location.href='/MenuJugador'" id="timer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
        <span>Abandonar Partida</span>
      </button>
    </div>
    <div class="divGame">
      <div class="jugadorTu">
        <h4 id="jugador1">Jugador 1</h4><img id="user" src="/imgs/user.png"/>
        <div id="colorJugadorTu"></div>
        <h2 id="puntuacionRojo">0</h2>
      </div>
      <div class="divTablero">
        <table id="tablaPartida">
          <tr style="background-color: white;">
            <td id="col0" style="background-color: white;"></td>
            <td id="col1" style="background-color: white;"></td>
            <td id="col2" style="background-color: white;"></td>
            <td id="col3" style="background-color: white;"></td>
            <td id="col4" style="background-color: white;"></td>
          </tr>
          <tr style="background-color: white;">
            <td id="col5" style="background-color: white;"></td>
            <td id="col6" style="background-color: white;"></td>
            <td id="col7" style="background-color: white;"></td>
            <td id="col8" style="background-color: white;"></td>
            <td id="col9" style="background-color: white;"></td>
          </tr>
          <tr style="background-color: white;">
            <td id="col10" style="background-color: white;"></td>
            <td id="col11" style="background-color: white;"></td>
            <td id="col12" style="background-color: white;"></td>
            <td id="col13" style="background-color: white;"></td>
            <td id="col14" style="background-color: white;"></td>
          </tr>
          <tr style="background-color: white;">
            <td id="col15" style="background-color: white;"></td>
            <td id="col16" style="background-color: white;"></td>
            <td id="col17" style="background-color: white;"></td>
            <td id="col18" style="background-color: white;"></td>
            <td id="col19" style="background-color: white;"></td>
          </tr>
          <tr style="background-color: white;">
            <td id="col20" style="background-color: white;"></td>
            <td id="col21" style="background-color: white;"></td>
            <td id="col22" style="background-color: white;"></td>
            <td id="col23" style="background-color: white;"></td>
            <td id="col24" style="background-color: white;"></td>
          </tr>
        </table>
      </div>
      <div class="jugadorContrario">
        <h4 id="jugador2">Jugador 2</h4><img id="user" src="/imgs/user2.png"/>
        <div id="colorJugadorContrario"></div>
        <h2 id="puntuacionVerde">0</h2>
      </div>
    </div>
</body>
</html>