const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server, {
  cors: {
    origin: "*"
  }
});
const salas = [];

app.get('/sala/crear/:sala', (req, res) => {
  let exito = crearSala(req.params.sala);

  if (exito) res.redirect('http://localhost:8000/jugar?sala=' + req.params.sala);
  else res.redirect('http://localhost:8000/MenuJugador');
});

function crearSala(sala) {
  if (salas.findIndex(item => item === sala) == -1) {
    salas.push(sala);
    console.log('Sala creada: ' + sala);
    return true;
  } else {
    return false;
  }
}

io.on('connection', (socket) => {
  console.log('a user connected');

  //Unirse a una Sala que un Jugador ya haya creado 
  socket.on('unirse', (sala) => {
    socket.join(sala);
    console.log('usuario conectado a la sala: ' + sala);
  });
});

server.listen(3000, () => {
  console.log('Server deployed on http://localhost:3000');
});