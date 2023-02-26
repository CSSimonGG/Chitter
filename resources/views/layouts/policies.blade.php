<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/Chitter/public/redtwitterlogo.png">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <div>
        <header></header>
        <main>@yield('content')</main>
        <footer></footer>
    </div>
</body>

</html>
