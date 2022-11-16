<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    <title>{{ $titulo }}</title>
</head>
<body style=" background: rgb(19,33,144);
background: linear-gradient(90deg, rgba(19,33,144,1) 0%, rgba(0,63,190,1) 30%, rgba(0,196,255,0.6124649688977153) 76%); ">
    @include('sweetalert::alert')
    @include('shared/navbar')
    @yield('contenido')
    <script src="{{ mix('js/app.js')}}"></script>
</body>
</html>