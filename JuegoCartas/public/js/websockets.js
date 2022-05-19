var params = new URLSearchParams(location.search);
var players = 1;
var color = 'red';
var sala = params.get('sala');
var rojo = 0;
var verde = 0;
var host = location.host.split(':')[0];
var user = getCookie('username');

window.onload = ()=> {

    var socket = io("ws://" + host + ":3000");
    var puntuacionRojo = document.getElementById('puntuacionRojo');
    var puntuacionVerde = document.getElementById('puntuacionVerde'); 

    socket.on('connect', (data) => {
        console.log('conectado');
        
        socket.emit('unirse', sala);
    });

    function marcador(clr) {
        if (clr == 'green') verde++;
        if (clr == 'red') rojo++;

        puntuacionRojo.innerText = rojo;
        puntuacionVerde.innerText = verde;
    }

    document.getElementById('tablaPartida').addEventListener('click', (e)=> {
        if (players == 2) {
            if (e.target.tagName === 'TD' && e.target.style.backgroundColor == 'white') {
                e.target.style = 'background-color: ' + color;
                socket.emit('pintar', { sala: sala, cell: e.target.getAttribute('id') });
                marcador(color);
            }
        }
    });

    socket.on('pintar', (data) => {
        var cell = document.getElementById(data.cell);

        if (color == 'green') {
            cell.style = 'background-color: red';
            marcador('red');
        }
        else {
            cell.style = 'background-color: green';
            marcador('green');
        }
    });

    socket.on('unido', (data) => {
        socket.emit('identificar', { sala: sala, user: user } );
    });

    socket.on('identificar', (data) => {
        players++;
        socket.emit('identificado', { sala: sala, user: user });
        document.getElementById('jugador1').innerText = user;
        document.getElementById('jugador2').innerText = data.user;
    });

    socket.on('identificado', (data) => {
        color = 'green';
        players++;
        document.getElementById('jugador1').innerText = data.user;
        document.getElementById('jugador2').innerText = user;
    });
}

function getCookie(key) {
    var array = document.cookie.split('; ');
    var cookies = new Map();

    array.forEach(item => {
        cookies.set(item.split('=')[0], item.split('=')[1]);
    });

    return cookies.get(key);
}