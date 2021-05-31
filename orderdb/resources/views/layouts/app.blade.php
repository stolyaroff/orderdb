<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        @include('inc.header')
        @include('inc.messages')
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
@include('inc.footer')
</body>
</html>
