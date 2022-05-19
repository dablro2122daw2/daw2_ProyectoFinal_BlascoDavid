<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Conquest - Creando Sala</title>
    <script>
        function main() {
            var form = document.getElementById('form');

            form.addEventListener('submit', event => {
                event.preventDefault();

                let data = new FormData(data);

                submit(data.get('sala'));
            });
        }

        function submit(sala) {
            location.href = '/crearSala/' + sala;
        }
    </script>
</head>
<body>
    <main class="container">
        <form id="form">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                <input type="text" name="sala" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </form>
    </main>
</body>
</html>