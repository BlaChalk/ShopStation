<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.head')
        @yield('head')
        @yield('layouts.script')
    </head>

<body>
    @include('layouts.preloader')

    <div class="wrapper">
        @include('layouts.header', ['page'=>(isset($page))? $page : NULL])

        @yield('hero')

        @yield('page-title')

        @yield('content')

        @yield('footer')
    </div>

    @include('layouts.js')

</body>

</html>
