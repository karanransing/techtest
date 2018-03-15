<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            @include('header')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
    @section('footer')
            @include('footer')
    @show
</html>