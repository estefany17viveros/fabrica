<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="{{route('trainings.store')}}" method="POST">
    @csrf
    <label>ingresa tu nombre</label><br>
    <input type='text' name='name'><br>

        <label>ingresa tu localizacion</label><br>
        <input type='Text' name='location'><br>

        <button type='submit'>enviar formulario</button>
    </form>
</body>
</html>