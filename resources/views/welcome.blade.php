<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>
               window.Laravel =  <?php echo json_encode([
           'csrfToken' => csrf_token(),
       ]); ?>
 
        </script>
        <title>Laravel</title>

        <link rel="stylesheet" href="{{url('')}}{{ mix('/css/app.css') }}">

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
            html, body {
                background-color: #ecf0f1;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                min-height: 75rem;
                height: 100vh;
                margin: 0;
            }

          
        </style>
    </head>
    <body>  

    <div class="container-fluid" style="margin:0rem; padding:0rem;">
            <div id="root"></div>
    </div>

        <script src="{{url('')}}{{ mix('/js/app.js') }}"></script>
    </body>
</html>
