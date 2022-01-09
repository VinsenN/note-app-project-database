<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- templated -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->

        <!-- external css -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/main-css.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/css-scrollbar.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/cursor.css')}}">

        <link rel="stylesheet" href="{{URL::asset('assets/css/landing-css.css')}}">
        <!-- <link rel="stylesheet" href="{{URL::asset('assets/css/card-decoration.css')}}"> -->

        <!-- <link rel="stylesheet" href="{{URL::asset('assets/css/button-back.css')}}"> -->

        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" crossorigin="anonymous">

        <!-- external js -->
        <script type="text/javascript" src="{{URL::asset('assets/js/additional-time.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/hover-card.js')}}"></script>

        <!-- icon -->
        <link rel="icon" href="{{URL::asset('assets/image/icon.png')}}" crossorigin="anonymous">

        <title>Notes</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark px-4">
            <div class="navbar-brand">
                <a href = "/" style="text-decoration: none; color: white;">
                    <img src="{{URL::asset('assets/image/icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                    <b>Notes App</b>
                </a>
            </div>

            <div class="navbar-brand default-cursor unselectable" style="font-size:15px">
                <body onload="time()">
                <div id="span"></div>
            </div>
        </nav>

        @yield('content')

        <footer class="bg-dark text-white-50 py-2" style="/*position: fixed;*/ bottom: 0; width: 100%;" >
            <div class="text-center">
                <br>
                <small>Dibuat oleh: </small><br>
                <b><small>1. Vinsen Nawir - 2440031521</small><br>
                <small>2. Gregorius Emmanuel Henry - 2440030582</small></b>
                <br>
                <br>
                <b><small>Dr. Robertus Nugroho Perwiro Atmojo, S.Kom., M.M.S.I, CSCA</small></b>
                <br>
                <b><small>ISYS6169001 - Database Systems</small></b> <br>
                <b><small>LG01</small></b>
                <br>
                <br>
            </div>
        </footer>
    </body>
</html>
