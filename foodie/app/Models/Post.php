<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use SplFileInfo;


class Post{
    public static function find($food){
        $filepath = resource_path("foodie-details/{$food}.html");

        // if(!file_exists($filepath)){  
        //     throw new ModelNotFoundException();
        // }
        $content = file_get_contents($filepath);
        return $content;
    }
}
?>