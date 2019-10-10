<!DOCTYPE html>
<<<<<<< HEAD

<html lang="en">


=======

<html lang="en">


>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stadistics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/base.css" type="text/css">
        <link rel="stylesheet" href="css/statistics.css" type="text/css">
         
        <script src="plugins/highcharts/code/highcharts.js"></script>
        <script src="plugins/highcharts/code/modules/series-label.js"></script>
        <script src="plugins/highcharts/code/modules/exporting.js"></script>
        <script src="plugins/highcharts/code/modules/export-data.js"></script>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
       
        
    </head>

    <?php 
    $num = "123";
    ?>
    <body>
        <header>
            <div class="izq">
                <h3>Bee Lab - statistics</h3>
            </div>
            <div class="der">
                @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{ url('/home') }}" class="boton-header">Home</a>
                    <a href="{{ url('/logout') }}" class="boton-header" onclick="event.preventDefault();
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
                Statistics
            </div>
        </div>
    </div>

    <main>
    <div class="recopilacion">
        
        <fieldset class="datos-basicos" >
            <legend>Basic data</legend>
            
<<<<<<< HEAD
<<<<<<< HEAD
            <form id="formulario" >
=======
            <form id="formulario" method="POST" action="{{url('statistics')}}" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
=======
            <form id="formulario" method="POST" action="{{url('statistics')}}" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
            <label name="temperatura">Temperature</label>
            <br>    
            <input type="text" name="temperatura" id="temperatura" placeholder="Example: 30" required="required">
            <br> <br>
            <label name="humedad">Humidity</label>
            <br>    
            <input type="text" name="humedad" id="humedad" placeholder="Example: 30" required="required">
            <br> <br>
            <label name="temperatura-apiario">Apiary temperature</label>
            <br>    
            <input type="text" name="temperatura_apiario" id="apiario" placeholder="Example: 30" required="required">
            <br> <br>
            <input type="submit" name="submit" value="See">
            <br><br>
               
            </form>
            <span></span>

        </fieldset>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
=======
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
    </div>
     <div class="estadisticas">

        <div id="container" ></div>


        <script type="text/javascript">
           
        </script>

<<<<<<< HEAD
<<<<<<< HEAD
                    formulario.addEventListener('submit', function(e){
                        e.preventDefault()
                        var temp = document.getElementById("temperatura").value;
                        var hum = document.getElementById("humedad").value;
                        var tempAp = document.getElementById("apiario").value;



                         if (temp > 0 ) {

                    Highcharts.chart('container', {

                        title: {
                            text: 'Temperature'
                        },

            

                        yAxis: {
                            Categories:[

                            ]
                        },

                        xAxis: {
                            
                             minPadding: 0.05,
                             maxPadding: 0.05

                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'middle'
                        },

                        plotOptions: {
                            series: {
                                label: {
                                    connectorAllowed: false
                                },
                                pointStart: 0
                            }
                        },

                        series: [{
                            name: 'Temperature',
                            data: [
                            
                            ]

                        }],

                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 500
                                },
                                chartOptions: {
                                    legend: {
                                        enabled: false
                                    }
                                }
                            }]
                        }
                    }); 
                    } 
                        
=======
        </div> 
         
    
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
=======
        </div> 
         
    
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5

        </main>
    </body>
</html>
