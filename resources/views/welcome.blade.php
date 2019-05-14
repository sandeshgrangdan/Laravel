<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta  name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>

        <title>Larticles App</title>

        <link rel="stylesheet" type="text/css" href="../../../bootstrap/dist/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
       <div id="app">
            <navbar>

            </navbar>
            <div class="container">
                <articles></articles>
            </div>


       </div>

       <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
       <script src="../../../bootstrap/dist/js/jquery-slim.min.js"></script>
        <script src="../../../bootstrap/dist/js/popper.min.js"></script>
         <script src="../../../bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
