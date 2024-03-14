<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar ID de Usuario</title>
</head>
<body>
    <h1>ID del Usuario Autenticado</h1>
    @if(isset($_SESSION['user_id']))
    <p>El ID del usuario es: {{ $_SESSION['user_id'] }}</p>
@endif
</body>
</html>
