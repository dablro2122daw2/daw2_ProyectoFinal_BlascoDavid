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

io.on('connection', (socket) => {
  console.log('a user connected');

  //Unirse a una Sala que un Jugador ya haya creado 
  socket.on('unirse', (sala) => {
    socket.join(sala);
    console.log('usuario conectado a la sala: ' + sala);
    socket.emit('unido', 'unido');
  });

  socket.on('pintar', (data) => {
    socket.broadcast.to(data.sala).emit('pintar', data);
  });

  socket.on('identificar', (data) => {
    socket.broadcast.to(data.sala).emit('identificar', data);
  });

  socket.on('identificado', (data) => {
    socket.broadcast.to(data.sala).emit('identificado', data);
  });
});

server.listen(3000, () => {
  console.log('Server deployed on http://localhost:3000');
});