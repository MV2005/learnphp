<?php

namespace App\Controllers;

use App\Models\Article;

class PublicController {
public function home(){
$articles = Article::all();
        
view('home',compact('articles'));

}
public function about(){
    view('about');
}
public function test(){
    session_start();
    var_dump($_SESSION);
}

public function testAnswer(){
var_dump($_POST);
    }
}