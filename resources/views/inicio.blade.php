<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['/resources/sass/app.scss','resources/js/app.js'])
    <title> Inicio </title>
</head>

<body>

    @include("menu")
    @yield("contenido1")

</body>
</html>