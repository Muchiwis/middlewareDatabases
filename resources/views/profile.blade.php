<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello you successfully the test</h1>
    <form action="{{route('profile.destroy')}}" method="get">
        @csrf
        <input type="submit" value="Cerrar sesion">
    </form>
</body>
</html>