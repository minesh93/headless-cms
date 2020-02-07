<!DOCTYPE html>
<html>
    <head>
        <title>Headless CMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,600i&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
        <link rel=icon href="/favicon.png">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#50E3C2">
    </head>
    <body>
        <div class="admin-wrap">
            @include('layouts.sidebar')
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>