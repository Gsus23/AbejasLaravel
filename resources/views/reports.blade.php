<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reports</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css" type="text/css">
        <link rel="stylesheet" href="css/reports.css" type="text/css">
       
    @if (Route::has('login'))
                <div class="top-left links">
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                        </form>
                </div>
            @endif
    </head>
    <body>
        <header>
        <h3>Bee Lab - reports</h3>

         
    
    </header>

    <div class="top-left">
            <div class="content">
                <div class="title m-b-md">
                    Reports
                </div>
            </div>

    <main>
        <div class="barra">
            <a href="#nav" class="mobile-menu">
                <i class="fas fa-ellipsis-v"></i>
            </a>

            <nav id="nav" class="navegacion-principal contenedor">
                <a href="{{ url('/statistics') }}">Statistics</a>
                <a href="{{ url('/estimates') }}">Estimate</a>
                <a href="{{ url('/analysis') }}">Analysis</a>
                <a href="{{ url('/help') }}">Help</a>

                <a href="#" class="cerrar">
                        <i class="fas fa-times"></i>
                </a>
            </nav>
        </div>

        </div>
    </main>
        
    </body>
</html>
