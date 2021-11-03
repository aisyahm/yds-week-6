<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Foodie</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
        <div class="title">
        <h1>Welcome to Foodie 0.1</h1>
        <h3>Teman setia perut kelaparan</h3>
        </div>

        <img src="/img/logo.jpg" alt="logo Pic" class="logo">

    <div class="contents">
        <h3 class="menu">Daftar Menu</h3>

        <div class="contents-item">
            <img src="/img/nasi-goreng.jpeg" alt="">
            <div class="contents-desc">
                <h3><a href="/foodie-details/nasi-goreng">Nasi Goreng</a></h3>
                <p>Rp 15.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/mie-goreng.jpg" alt="">
            <div class="contents-desc">
                <h3><a href="">Mie Goreng</a></h3>
                <p>Rp 13.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/kwetiau-rebus.jpg" alt="">
            <div class="contents-desc">
                <h3><a href="">Kwetiau Rebus</a></h3>
                <p>Rp 10.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/nasi-bakar.jpg" alt="">
            <div class="contents-desc">
                <h3><a href="">Nasi Bakar</a></h3>
                <p>Rp 13.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/internet.jpg" alt="">
            <div class="contents-desc">
                <h3><a href="">Internet</a></h3>
                <p>Rp 11.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/es-teh.jpg" alt="">
            <div class="contents-desc">
                <h3><a href="">Es Teh</a></h3>
                <p>Rp 3.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/es-jeruk.jpeg" alt="">
            <div class="contents-desc">
                <h3><a href="">Es Jeruk</a></h3>
                <p>Rp 4.000,00</p>
            </div>
        </div>

        <div class="contents-item">
            <img src="/img/es-campur.jpg" alt="">
            <div class="contents-desc">
                <h3><a href="">Es Campur Sultan</a></h3>
                <p>Rp 10.000,00</p>
            </div>
        </div>
    </div>
    </body>
</html>
