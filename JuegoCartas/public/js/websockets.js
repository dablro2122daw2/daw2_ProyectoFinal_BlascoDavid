window.onload = ()=> {

    var socket = io("ws://localhost:3000");

    socket.on('connect', (data) => {
        console.log('conectado');
        var params = new URLSearchParams(location.search);
        socket.emit('unirse', params.get('sala'));
    });

    document.getElementById('tablaPartida').addEventListener('click', (e)=> {
        e.target.style= 'background-color:red';
    })
}