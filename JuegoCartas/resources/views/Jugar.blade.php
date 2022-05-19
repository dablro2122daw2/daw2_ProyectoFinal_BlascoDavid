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
      <div class="imagenesMenu1"></div>
      <div class="imagenesMenu1"><img id="pug" src="/imgs/pug.png"/></div>
    </div>
    <div id="timer">
      <button onclick="location.href='/MenuJugador'" id="timer">Abandonar Partida</button>
    </div>
    <div class="divGame">
      <div class="jugadorTu">
        <h4>Jugador 1</h4><img id="user" src="/imgs/user.png"/>
        <div id="colorJugadorTu"></div>
        <h2 id="puntuacionRojo">0</h2>
      </div>
      <div class="divTablero">
        <table id="tablaPartida" width="700px" height="600px" border="0" cellspacing="2" cellpadding="2" bgcolor="#000000">
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
        <h4>Jugador 2</h4><img id="user" src="/imgs/user2.png"/>
        <div id="colorJugadorContrario"></div>
        <h2 id="puntuacionVerde">0</h2>
      </div>
    </div>
</body>
</html>