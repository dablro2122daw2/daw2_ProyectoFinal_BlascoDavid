<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <!-- Mantener action, method del form, y el name y type del input al modificar este blade.php --> 
        <form action="/jugar" method="get">
            Código de sala: <input type="text" name="sala">
            <button type="submit">Unirse</button>
        </form>
    </main>
</body>
</html>