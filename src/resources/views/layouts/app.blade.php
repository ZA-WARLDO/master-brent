<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Raleway:wght@700&display=swap');




            .bg-gradient{
                background-image: linear-gradient(to right, #C939E6, #4AD8CE);
            }

            .brand{
                font-family: 'Raleway';
                color: white;
                text-decoration: none;
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
  <nav class="navbar" style="background-image: linear-gradient(to right, #C939E6, #4AD8CE);">
  <div class="container-fluid">
    <a class="navbar-brand ps-5" href="/"><span class="brand" >Atomic Nutrition</span></a>
    <div class="d-flex">
            @if (request()->is('/'))
                <a href="/sign-in" class="link-offset-2 link-underline link-underline-opacity-0 pe-5"><span class="brand">Sign In</span></a>
            @endif
    </div>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>