<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    
    <form action="/guardarFormulario" method="POST">
    @csrf
    <label for="nombre">Text</label>
    <input type="text" name ="nombre">

    <label for="correo">Correo: </label>
    <input type="email" name ="correo">
    
    <label for="mensaje">Mensaje: </label>
    <input type="text" name ="mensaje">

    <input type="submit" value="Enviar">

    </form>
</body>
</html>