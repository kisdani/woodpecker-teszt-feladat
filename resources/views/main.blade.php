<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/app.js') }}"></script>

</head>
<body>

    <div class="container-fluid dark-bg body">
        <div class="row dark-bg">
            <div class="col-sm-12 menu">@include("partials/menu")</div>
        </div>
        <div class="row content">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 d-flex justify-content-center">@yield("content")</div>
            <div class="col-sm-3"></div>
        </div>
        <footer class="container-fluid dark-bg">
            @include("partials/footer")
        </footer>
    </div>

</body>
</html>
