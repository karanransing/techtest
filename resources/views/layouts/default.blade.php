<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body> 
    
     @include('includes.header')

    <div class="row">
            @yield('content')
    </div>
    
        <!-- @include('includes.footer') -->
</body>
</html>
