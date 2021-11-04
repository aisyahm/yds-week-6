<?php
use App\Models\Post;
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Food</title>
    <style>
        body{
            width: 500px;
            margin: auto;
        }

        p{
            color: gray;
        }

        blockquote{
            font-size: 25px;
            font-family: Georgia, serif;
        }

        a{
            float: right;
        }
    </style>
</head>
<body>
    <?php 
        // dd($arrayIndex);
        $keys = array_values($arrayIndex);
        echo '<img src="'. $keys[3] .'" alt="" width=500>';
        echo '<h2>';
            print_r($keys[1]);
        echo '</h2>';
        echo '<h3> Rp ';
            print_r($keys[2]);
        echo ',00 </h3>';
        echo '<blockquote>';
            print_r($keys[5]);
        echo '</blockquote>';
        echo '<hr>';
        echo '<p> Kategori: ';
        foreach ($keys[4] as $key => $value) {
            echo($value);
            echo ',';
        }
        echo '</p>'
    ?>    
    <a href="/foodie">Kembali ke Daftar Menu</a>
</body>
</html>