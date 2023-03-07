<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="{{route('validar')}}" method="post">
            @csrf
            <label for="elemento">Usuario</label>
            <input type="text" name="usuario" id="elemento"/><br>
            <label for="elemento">Password</label>
            <input type="text" name="password" id="elemento"/><br>
            <input type="submit" value="Validar"/><br>
    </form>
</body>
</html>