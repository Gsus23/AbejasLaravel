<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Analysis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/analysis.css" type="text/css">
        
    </head>
    <body>
        <div class="top-left">
            <div class="content">
                <div class="title m-b-md">
                    Analysis
                </div>
            </div>

        @if (Route::has('login'))
                <div class="top-right links">
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
        </div>
    </body>
</html>
