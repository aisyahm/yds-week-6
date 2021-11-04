<?php
use App\Models\Post;
?>
<html>
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
            <?php 
                foreach ($post as $value){
                    echo '<div class="contents-item">';
                    echo '<img src="'. $value->picture_url.'" alt="">'; 
                    echo '<h3><a href="/foodie-details/'.$value->id.'" class= "foodie-details">'.$value->title.'</a></h3>';
                    echo '<p>Rp. '.$value->base_price.',00</p>';
                    echo '</div>';
            }
            ?>
    </div>
</body>
</html>
