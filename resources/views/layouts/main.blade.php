<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="descrition" content="lorem5">
    <meta name="autor" content="lorem5">
    <link rel="shortcut icon" href="https://em-content.zobj.net/thumbs/120/facebook/327/smiling-face-with-horns_1f608.png" type="image/x-icon">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--TailwindCSS-->
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
</html>