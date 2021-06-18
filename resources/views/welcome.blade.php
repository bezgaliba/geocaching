<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Geocaching</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: lightblue;
                color: ;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-size: 30px;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
                color: red;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .mainlogo{
                width: 350px;
                height: 130px;
                padding-bottom: 20px;
            }
            .phonelogo{
                width: 300px;
                height: 190px;
                border: 5px solid black;
            }
            .apraksts{
                font-size: 20px;
            }
            .aprakstskont{
                width: 700px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class = 'pievienoties' href="{{ route('login') }}">Pievienoties</a>
                    @if (Route::has('register'))
                            <a href="{{ route('register') }}">Reģistrēties</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div>
                    <img class='mainlogo' src='https://i.ibb.co/pxx7yxP/logo.png' alt='logo'>
                </div>
                <div class="title m-b-md">
                    Slēpņošana
                </div>
                <div class='aprakstskont'>
                    <p class='apraksts'>Geokešings</b> jeb <i>slēpņošana</i> ir nodarbe brīvā dabā ar GPS vai telefona
                        aplikāciju, kuras mērķis ir visā pasaulē izvietot un meklēt konteinerus jeb
                        ģeoslēpņus. Tipisks ģeoslēpnis ir neliels ūdensnecaurlaidīgs konteiners (parasti
                        sviestmaižu kārba vai munīcijas kaste), kas satur ierakstu žurnālu, zīmuli
                        un rotaļlietas.</p>
                </div>
                <div>
                    <img class='phonelogo' src='https://i.ibb.co/3hHhYkk/intro.jpg' alt='logophone'>
                </div>
            </div>
        </div>
    </body>
</html>