<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}} :: @yield('titulo')</title>
</head>
<body>
    <div class="container">
        @yield('conteudo')
    </div>
    <footer>
        <p>Digital - 2023</p>
    </footer>
</body>
</html>