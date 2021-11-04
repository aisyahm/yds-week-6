<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use SplFileInfo;


class Post{

    public static function json(){
        $json = json_decode(file_get_contents(resource_path("/../public/foodie-rev.json")));
        // dd($json);
        return $json;
    }

    public static function getArrayIndex($id){
        $json = json_decode(file_get_contents(resource_path("/../public/foodie-rev.json")),true);
        $index = intval($id)-1;
        $arrayIndex = $json[$index];
        // dd($arrayIndex);
        return $arrayIndex;
    }
}

?>