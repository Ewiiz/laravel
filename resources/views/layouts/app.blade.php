<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Super Site</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.navbar')
    <div class="container mx-auto">
        @yield('content')
    </div>

</body>
</html>