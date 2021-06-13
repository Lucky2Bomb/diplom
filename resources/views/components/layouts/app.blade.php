<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title ?? "Блог платформа студенческого сообщества Бирского филиала БашГУ"}}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{$styles ?? ''}}
</head>

<body style="background-color: var(--white)">
    @include('layouts.navigation')

    <main>
        {{$content}}
    </main>

    <script src="{{asset('js/app.js')}}"></script>
    {{$scripts ?? ''}}
</body>

</html>
