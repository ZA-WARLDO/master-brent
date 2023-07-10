<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Atomic Nutrition</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{url('js/main.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your main.js file -->
    <script src="{{url('js/main.js')}}"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">



        <style>
          @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Raleway:wght@700&display=swap');




            .bg-gradient{
                background-image: linear-gradient(to right, #C939E6, #4AD8CE);
            }

            .brand{
                font-family: 'Raleway';
                color: white;
                }


            .parent{
                position: relative;
                height: 70vh;
                justify-content: center;
                align-items: center;
                display: flex;
            }

            .button{
                border-radius: 50px;
                text-transform: uppercase;
                font-weight: bold;
                background-image: linear-gradient(to right, #C939E6, #9081DB);
                padding: 12px 30px;
                border: none;
            }



            .purple-bg{
                border-color: #C939E6;
            }

            .purple-bg-color{
                background-color: #c939e6;
            }

           

        </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light border bg-gradient">
            <div class="container-fluid ">
                <a href="/" class="navbar-brand"><span class="brand">Atomic Nutrition</span></a>
            @if (request()->is('/'))
                <ul class="navbar-nav ms-auto">
                    <li><a href="/sign-in"><span class="brand">Sign in</span></a></li>
                </ul>
            @endif
            </div>

           
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
            

</body>