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
<body class=" bg-cyan-950 text-orange-500">
    @include('partials.navbar')
    <div class="h-56 grid grid-cols-3 gap-4 content-start space-x-4">
        @yield('content')
    </div>

</body>
</html>