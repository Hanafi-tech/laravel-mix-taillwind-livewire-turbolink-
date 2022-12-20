<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="turbolinks-cache-control" content="no-cache">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Document</title>
</head>

<body>
    @include('partials.navbar')
    {{ $slot }}
    <script src="{{ asset('js/app.js') }}" rel="stylesheet"></script>
    @livewireScripts
</body>

</html>