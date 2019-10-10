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
        <link rel="stylesheet" href="css/base.css" type="text/css">
        <link rel="stylesheet" href="css/report.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.12.0/d3.min.js"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/reports.js" type="text/javascript"></script>
    
    </head>
    <body>
        <header>
            <div class="izq">
                <h3>Bee Lab - reports</h3>
            </div>
            <div class="der">
                @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{ url('/home') }}" class="boton-header">Home</a>
                    <a href="{{ url('/logout') }}" class="boton-header"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                @endif
            </div>
        
    </header>

    <div class="barra">
        <nav id="nav" class="navegacion-principal contenedor">
            <a href="{{ url('/reports') }}">Reports</a>
            <a href="{{ url('/statistics') }}">Statistics</a>
            <a href="{{ url('/estimates') }}">Estimate</a>
            <a href="{{ url('/analysis') }}">Analysis</a>
            <a href="{{ url('/help') }}">Help</a>
        </nav>
    </div>

    <div class="top-left">
        <div class="content">
            <div class="title m-b-md">
                Reports
            </div>
        </div>
    </div>

    <main> 
        <form action="{{url('/imprimir')}}">
            <div class="fecha-contenedor">
                <label class="fecha" for="fecha">Date: </label>
                <input class="fecha" name="fecha_ingresada" id="fecha_ingresada" type="date">
                <br>

                <button type="submit"id="boton_general" class="boton">Export all</button>
            </div>
        </form>
        

        <div class="reporte">
        <table>
            <thead>
                <tr>
                    <th>Id</th><th>Schedule</th><th>Export to PDF</th>
                </tr>
            </thead>

            <tr>
                <td>1</td>
                <td>12am - 6am</td>
                <td><button id="boton_hora_1">Export</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>6am - 12pm</td>
                <td><button id="boton_hora_2">Export</button></td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>12pm - 6pm</td>
                <td><button id="boton_hora_3">Export</button></td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>6pm - 12am</td>
                <td><button id="boton_hora_4">Export</button></td></td>
            </tr>
        </table>
        
        </div>
    </main>
   
    <footer>
        
    </footer>

        
    </body>
</html>
