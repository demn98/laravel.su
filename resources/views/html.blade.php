<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no, viewport-fit=cover">

    <meta name="csrf-token" content="{{  csrf_token() }}">
    <meta name="view-transition" content="same-origin"/>

    <x-meta
        title="{!! View::getSection('title') !!}"
        description="{!! View::getSection('description') !!}"
        {{-- image="{{ asset('/img/external.png') }}" --}}
        {{-- csp="*.laravel.su *.gravatar.com *.githubusercontent.com" --}}
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body>

@yield('body')

</body>
</html>
