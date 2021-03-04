<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="./img/Ico.png">
    <link href="https://fonts.googleapis.com/css?family=Saira:300,400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2bc27759b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    @yield('content')
<footer class="contacts" id="kontaktai">
    <div class="contact">
        <div class="adress">
            <i class="fa fa-envelope-open" aria-hidden="true"></i>
            <p>Panerių g. 38a, LT-03202 Vilnius, Lietuva</p>
        </div>
    <div class="phone">
        <i class="fa fa-phone-square" aria-hidden="true"></i>
        <p>+370 5 270 0003</p>
    </div>
        <div class="email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p>info@ader.lt</p>
        </div>
    </div>
    <div class="additional">
        <a href="./service.html">
            Apie paslaugą
        </a>
        <span>|</span>
        <a href="./rights.html">
            Saugumas
        </a>
    </div>
    <div class="info">
        © Advokatas Edmundas Rusinas, 2021. <br> Svetainė "Kelionių advokatas" skirta išsakyti problemą ir greitai gauti atsakymą.
    </div>
</footer>
</div>
<script src="/js/data.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/actions.js"></script>
</body>
</html>