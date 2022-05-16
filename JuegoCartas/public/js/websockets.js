var socket = io("ws://localhost:3000");

socket.on('connect', (data) => {
    console.log('conectado');
    var params = new URLSearchParams(location.search);
    socket.emit('unirse', params.get('sala'));
});