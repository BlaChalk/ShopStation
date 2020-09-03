<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')

    @yield('head')
</head>

<body>
    @include('layouts.preloader')

    <div class="wrapper">
        @include('layouts.header')

        @yield('hero')

        @yield('page-title')

        @yield('content')

        @yield('footer')
    </div>

    @include('layouts.js')

    @yield('layouts.script')


