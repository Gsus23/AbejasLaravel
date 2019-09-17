<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/home.css" type="text/css">
       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                     
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        >>>Logout<<<
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                        </form>
                     
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bee Lab
                </div>
                <div class="links">
                    <a href="{{ url('/reports') }}">Reports</a>
                    <a href="{{ url('/statistics')}}">Statistics</a>
                    <a href="{{ url('/estimates') }}">Estimate</a>
                    <a href="{{ url('/analysis') }}">Analysis</a>
                    <a href="{{ url('/help') }}">Help</a>
                    <a href="{{ url('/imprimir')}}">ImprimirPDF</a>
                </div>
            </div>
        </div>
    </body>
</html>
