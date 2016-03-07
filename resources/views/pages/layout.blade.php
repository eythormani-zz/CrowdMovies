<html>
    <head>
        <title>CrowdMovies</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        @include('pages.navigation')
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>