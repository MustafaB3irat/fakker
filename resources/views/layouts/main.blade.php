<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name',  'fakker')}}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @yield('style')
</head>
<body>

@include('navbar')

@include('Messages.errorsAndSuccess')

<div class="container">

@yield('content')

</div>

</body>
</html>
