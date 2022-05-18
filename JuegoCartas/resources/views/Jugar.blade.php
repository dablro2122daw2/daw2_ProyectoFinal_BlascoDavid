<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joc de Cartes</title>
    <link rel="stylesheet" href="/css/header.css"/>
    <link rel="stylesheet" href="/css/game.css"/>
    <script src="https://cdn.socket.io/4.5.0/socket.io.min.js" integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/websockets.js') }}"></script>
</head>
<body>
<div class="header">
      <div class="imagenesMenu1"><img id="express" src="/imgs/express.png"/><img id="websockets" src="/imgs/sockets.png"/></div>
      <div class="imagenesMenu2"><img id="pug" src="/imgs/pug.png"/></div>
    </div>
    <h4 id="timer">0</h4>
    <div class="divGame">
      <div class="jugadorTu">
        <h4>Jugador 1</h4><img id="user" src="/imgs/user.png"/>
        <div id="colorJugadorTu"></div>
        <h2 id="puntuacionRojo">0</h2>
      </div>
      <div class="divTablero">
        <table id="tablaPartida" width="700px" height="600px" border="0" cellspacing="2" cellpadding="2" bgcolor="#000000">
          <tr bgcolor="white">
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
          </tr>
          <tr bgcolor="white">
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
          </tr>
          <tr bgcolor="white">
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
          </tr>
          <tr bgcolor="white">
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
          </tr>
          <tr bgcolor="white">
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
          </tr>
        </table>
      </div>
      <div class="jugadorContrario">
        <h4>Jugador 2</h4><img id="user" src="/imgs/user2.png"/>
        <div id="colorJugadorContrario"></div>
        <h2 id="puntuacionVerde">0</h2>
      </div>
      <div>
        <button onclick="location.href='/MenuJugador'" id="1">Logout</button>
      </div>
    </div>
</body>
</html>