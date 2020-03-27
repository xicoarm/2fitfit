
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FitFit</title>

    <!-- Fonts -->
    <!-- Styles -->
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link href="/css/app.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">--}}
{{--    <link href="/css/app.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>



    <div style=" display: table-cell;
    vertical-align: middle;left: 5%;position: relative; text-align: center; width: 60%">



        <div style=" min-width: 850px; position: relative;width: 100%;">

            <div class="flex-center position-ref full-height">

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>

            <header>
                <div style="; border-width: 10px ;position: relative; padding-bottom: 25px; padding-top: 25px; padding-left: 50px; padding-right: 50px; width: 900px"  class="top-nav container">

                    <div style="position: relative; top: 20%; color: black" class="logo">FitFit</div>

                    <ul>

                        <li style=" font-size: 70%"><a style="color: black" href="#">Über uns</a></li>
                        <li style=" font-size: 70%"><a style="color: black" href="/shop">Shop</a></li>
                        <li style=" font-size: 70%"><a style="color: black" href="#">Wie funktioniert's?</a></li>
                        <li style=" font-size: 70%"><a style="color: black" href="#">blog</a></li>

                    </ul>




                </div> <!-- end top-nav -->

            </header>

<div class="container" style="">

{{--    <div style=" position: relative;z-index: 1;text-align: center; vertical-align: middle;width: 1450px ;top: 33px" class="transbox">--}}
{{--        <p style="position: relative">Delivery fresh and stabil</p>--}}
{{--    </div>--}}

    <div style=" position: relative; text-align: center; vertical-align: middle;">
    <img style="width: 1450px ; position: center;height: auto" src="imagenes/COMbo.jpg">
    </div>
    <p style="color: black" class="section-description text-center">Alle unsere Produkte sind frisch gekocht und ohne Konservanten.</p>

</div>


{{--<div style=" width: 70%;position: relative;vertical-align: middle; text-align: center;">--}}
            <div class="mm" style="background-color: aliceblue;position: relative;left: 10%; min-height: 400px; width: 80%">

<div class="row33" style=" text-align: center; vertical-align: middle; top: 50px ">

    <div class="column3" style=" position: relative; text-align: center; vertical-align: middle;">
        <img style="width: auto; top: -42px; position: relative;" src="imagenes/kalorienarm.png">
    </div>

    <div class="column3" style=" position: relative; text-align: center; vertical-align: middle;;">
        <img style="width: auto; top: -42px; position: relative;" src="imagenes/muskelaufbau.png">
    </div>

    <div class="column3" style=" position: relative; text-align: center; vertical-align: middle;">
        <img style="width: auto; top: -42px; position: relative; margin: 1px" src="imagenes/vegan.png">
    </div>

    <div class="column3" style=" position: relative; text-align: center; vertical-align: middle;">
        <img style="width: auto; top: -42px; position: relative" src="imagenes/ausgewogen.png">
    </div>


</div></div>


<div class="mm" style="background-color: aliceblue;position: relative;left: 10%; min-height: 400px; width: 80%">


    <div style="position: relative">

        <img style="position:relative;;width: 60%;max-width: 100%;left: -5% " src="imagenes/tisch.PNG">
{{--        <br>--}}
        <button style="left: 15%; width: 50%; min-width: 60%" class="button1"> Wochenplan erstellen</button>

    </div>

    <div style="position: relative">
        <img style="position: relative; right : 40%;width: 100%" src="imagenes/carte.PNG">
{{--        <br>--}}

        <button style=" right : 40%;top: -5%;width: 100%" class="button1"> a la carte</button>

    </div>


{{--    <div>--}}
{{--    <img style="width: 400px" src="imagenes/carte.PNG">--}}
{{--    </div>--}}


</div>




<div class="blog-section">

    <div class="container">
        <h1 class="text-center">Wie funktioniert es? </h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Erfahrungen Sasha...</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Foto Küche oder mitarb</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">ärztlich iöbis</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
        </div> <!-- end blog-posts -->
    </div> <!-- end container -->
</div> <!-- end blog-section -->


<footer style="background-color: lightgray">
    <div class="footer-content container">
        <div class="made-with">With <i class="fa fa-heart"></i> by FitFit</div>
        <ul>
            <li>Follow Me:</li>
            <li><a href="#"><i class="fa fa-globe"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div> <!-- end footer-content -->
</footer>

</div>

</html>

















{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
