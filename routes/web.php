<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "My Blog",

        "blogs" => [
            [
                "url" =>"/",
                "is_trending" =>true,
                "author" =>"Mariom",
                "author_image_url"=>"https://avatars.githubusercontent.com/u/102503970?v=4",
                "image_url_portait" => "https://picsum.photos/300/350",
                "image_url_landscape" => "https://picsum.photos/300/350",
                "title" => "laravel Blog",
                "date" => "May 07, 2023",
                "description" => "fghdjg fhdjgh fhfdkg hfkdj fhjkgh fhjg fgh jdfgh ghjf ",
                "tags" =>"tag1, tag2, tag 3"

            ],
            [
                "url" =>"/",
                "is_trending" =>true,
                "author" =>"Mariom",
                "author_image_url"=>"https://avatars.githubusercontent.com/u/102503970?v=4",
                "image_url_portait" => "https://picsum.photos/300/350",
                "image_url_landscape" => "https://picsum.photos/300/350",
                "title" => "laravel Blog",
                "date" => "May 07, 2023",
                "description" => "fghdjg fhdjgh fhfdkg hfkdj fhjkgh fhjg fgh jdfgh ghjf ",
                "tags" =>"tag1, tag2, tag 3"

            ]
        ]
    ]);
});
