<!DOCTYPE html>
<html>
    <head>
        <title>Vuex + Vue-router + Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/font-icons.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body id="app">

        <menu></menu>

        <router-view></router-view>

        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>
    </body>
</html>
