<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Store Mapper App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        {!! $maps['js'] !!}
    </head>
    <body>
        <span><img src="https://s3.us-east-2.amazonaws.com/jflifestyles/jfblocklogo.png" height="80"></span>
        <br>
        <br>
        <span><a href="/">Home</a></span>
        <br>
        <br>
        <span>Click on markers to get store info and directions.</span>
        <br>
        <br>
        {!! $maps['html'] !!}
        <div id='directionsDiv'></div>
    </body>
</html>
