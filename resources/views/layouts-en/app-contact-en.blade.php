<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my-rezome</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
</head>
<body>

    @include('layouts-en.header-en')

    @yield('section-contact-en')

    <script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
</body>
</html>
