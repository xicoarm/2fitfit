<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS Grid Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


</head>

<body style=";position: relative;left: 10%; min-height: 400px; width: 80%; height: auto">
<header>



    <div style="font-width: bold; color: black;" class="top-nav container">
        <div class="logo">FitFit</div>

        @if (Route::has('login'))
            <div style="position:absolute; top: -5%; left: 75%" class="top-right links">
                @auth
                    <a href="{{ url('/welcome') }}">Mein Profil</a>
                    <a href="{{ url('/logout') }}">Logout</a>

                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <ul>
            <li style="color: black"><a style="color: black; font-width: bold;" href="/welcome">Home</a></li>
            <li><a style="color: black; font-width: bold;" href="/shop-choice">Shop</a></li>
            <li><a style="color: black; font-width: bold;" href="#">Blog</a></li>
            <li><a style="color: black; font-width: bold;" href="#">Cart</a></li>
        </ul>
    </div> <!-- end top-nav -->




</header>





{{--<div class="container">--}}

    <form method="post" action="overview">
@csrf<h1 style="position:relative; left: 20%;color: lightblue" class="text"> Erstellen Sie Ihren Wochenplan </h1>

{{--        <div class="boxed" style="background-color: slategray; border: 1px solid white;">--}}

        <h1 style="color: blue"> Tag 1 </h1>






        <div class="tagseparate">

            <select name="m1"id="m1" onchange="picturemChickenm2('m1', blankm1,'m1'); myFunction('textm1', 'm1')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken lo que sea para ver Chicken lo que sea para ver como queda como queda (+1CHF) por lo que seaaaaaaaa</option>
                <option name="pasta" value="pasta">Pasta</option>
                <option value="carbonara">Carbonara</option>
                <option value="COMbo">combo</option>
             </select>

            <div class="im1">
                <img class='im1' id="blankm1" src='' style=display:none />   </div>

            <div class="textm1">
            <h1 id="textm1" style="display: initial" class="textm1" > </h1> </div>



            <select name="a1" id="a1" onchange="picturemChickenm2('a1', blanka1,'a1'); myFunction('texta1', 'a1')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka1" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta1" style="display: initial" class="textm1" > </h1> </div>
            {{--        //tag1--}}
      </div>



























{{--        --}}

        <h1 style="color: blue"> Tag 2 </h1>
        <div class="tagseparate">

            <select id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('textm2', 'm2')" class="dropbtn1">Dropdown>
<!--                --><?php
//                $connection =mysqli_connect('localhost','root','','db');
//
//                $sql = mysqli_query($connection, "SELECT name FROM products");
//                while ($row = $sql->fetch_assoc()){
//                    echo "<option value=\"owner1\">" . $row['name'] . "</option>";
//                }
//                ?>
            </select>

            <div class="im1">
                <img class='im1' id="blankm2" src='' style=display:none />   </div>

            <div class="textm1">
                <h1 id="textm2" style="display: initial" class="textm1" > </h1> </div>



            <select name="a2" id="a2" onchange="picturemChickenm2('a2', blanka2); myFunction('texta2', 'a2')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka2" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta2" style="display: initial" class="textm1" > </h1> </div>




            {{--        //tag1--}}
        </div>

        <h1 style="color: blue"> Tag 3 </h1>
        <div class="tagseparate">


            <select id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('textm2', 'm2')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken lo que sea para ver Chicken lo que sea para ver como queda como queda (+1CHF) por lo que seaaaaaaaa</option>
                <option name="pasta" value="pasta">Pasta</option>
                <option value="carbonara">Carbonara</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im1">
                <img class='im1' id="blankm2" src='' style=display:none />   </div>

            <div class="textm1">
                <h1 id="textm2" style="display: initial" class="textm1" > </h1> </div>



            <select name="a2" id="a2" onchange="picturemChickenm2('a2', blanka2); myFunction('texta2', 'a2')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka2" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta2" style="display: initial" class="textm1" > </h1> </div>




            {{--        //tag1--}}
        </div>



        <h1 style="color: blue"> Tag 4 </h1>
        <div class="tagseparate">

            <select id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('textm2', 'm2')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken lo que sea para ver Chicken lo que sea para ver como queda como queda (+1CHF) por lo que seaaaaaaaa</option>
                <option name="pasta" value="pasta">Pasta</option>
                <option value="carbonara">Carbonara</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im1">
                <img class='im1' id="blankm2" src='' style=display:none />   </div>

            <div class="textm1">
                <h1 id="textm2" style="display: initial" class="textm1" > </h1> </div>



            <select name="a2" id="a2" onchange="picturemChickenm2('a2', blanka2); myFunction('texta2', 'a2')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka2" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta2" style="display: initial" class="textm1" > </h1> </div>




            {{--        //tag1--}}
        </div>





        <h1 style="color: blue"> Tag 5 </h1>
        <div class="tagseparate">

            <select id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('textm2', 'm2')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken lo que sea para ver Chicken lo que sea para ver como queda como queda (+1CHF) por lo que seaaaaaaaa</option>
                <option name="pasta" value="pasta">Pasta</option>
                <option value="carbonara">Carbonara</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im1">
                <img class='im1' id="blankm2" src='' style=display:none />   </div>

            <div class="textm1">
                <h1 id="textm2" style="display: initial" class="textm1" > </h1> </div>



            <select name="a2" id="a2" onchange="picturemChickenm2('a2', blanka2); myFunction('texta2', 'a2')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka2" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta2" style="display: initial" class="textm1" > </h1> </div>




            {{--        //tag1--}}
        </div>





        <input type="submit" class="button1" style="left: 48%" value="Zur Kasse"/>








        </form>
</body>
</html>
        <script type="text/javascript">

            function picturemChickenm2(val, blank,id) {
                var t = document.getElementById(val).value;
                var pic = "imagenes\\"+t+".png";
                document.getElementById(blank.id).src = pic.replace();
                document.getElementById(blank.id).style.display='block';



                if (id == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;

                } else {
                    if (window.XMLHttpRequest) {

                        xmlhttp = new XMLHttpRequest();
                    } else {

                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","5x2bacck.blade.php?q="+id,true);
                    xmlhttp.send();
                }
                            }


            function myFunction(text, field) {

                if(document.getElementById(field).value == 'mexicanafajita'){

                    document.getElementById(text).innerText =
                        "Pro 480g: kCal 652, Carbs 73g, Eiweiss 37g, Fett 24g";

                    document.getElementById(text).style.display='initial';
            }


                if(document.getElementById(field).value == 'pasta'){

                    document.getElementById(text).innerText =
                        "Pro 480g:\n" +"kCal 111," +
                        "Carbs 22g, " +
                        "Eiweiss 33g, " +
                        "Fett 33g";

                    document.getElementById(text).style.display='initial';
                }
                if(document.getElementById(field).value == 'COMbo'){

                    document.getElementById(text).innerText =
                        "Pro 480g:\n" +"kCal 2222\n" +
                        "Carbs 44g\n" +
                        "Eiweiss 33g\n" +
                        "Fett 123g";

                    document.getElementById(text).style.display='initial';
                }
                if(document.getElementById(field).value == 'carbonara'){

                    document.getElementById(text).innerText =
                        "Pro 480g:\n" +"kCal 5432\n" +
                        "Carbs 44g\n" +
                        "Eiweiss 33g\n" +
                        "Fett 123g";

                    document.getElementById(text).style.display='initial';
                }






                // else{
                //     document.getElementById(text).style.display='none';
                // }
            }

        </script>






