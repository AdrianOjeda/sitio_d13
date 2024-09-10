<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contacto para {{$cliente}}</h1>
    
    <form action="/guardarFormulario" method="POST">
    @csrf

    @if($cliente == 'cliente')
        <label for="no_cliente">No. de cliente</label><br>
        <input type="text" name ="no_cliente" value="{{old('no_cliente')}}"><br>
    @endif
    
    <label for="nombre">Text</label>
    <input type="text" name ="nombre" value="{{old('nombre')}}">

    <label for="correo">Correo: </label>
    <input type="email" name ="correo" value="{{old('correo')}}" >
    @error('correo')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    
    <label for="mensaje">Mensaje: </label>
    <input type="text" name ="mensaje" value="{{old('mensaje')}}">

    <input type="submit" value="Enviar">

    </form>
</body>
</html>