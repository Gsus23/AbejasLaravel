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
                    <a target="_blank" href="https://www.google.com/maps/place/Café+Bernabé+Gourmet/@4.637376,-75.5751544,16z/data=!4m13!1m7!3m6!1s0x8e388db58fdb7389:0x279e1388933e2000!2sSalento,+Quindío!3b1!8m2!3d4.637376!4d-75.570777!3m4!1s0x8e388db674ada243:0xc82724710847550a!8m2!3d4.6381142!4d-75.5680928">Map</a>
                </div>
            </div>
        </div>
    </body>
</html>
