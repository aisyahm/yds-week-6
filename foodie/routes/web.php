<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use App\Models\Post;

Route::get('/foodie', function () {
    return view('index', [
        'post' => Post::json()
    ]);
});

Route::get('foodie-details/{id}', function($id){
    return view('foodie_details',[
        'arrayIndex' => Post::getArrayIndex($id),
    ]);
});