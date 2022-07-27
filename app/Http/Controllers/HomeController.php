<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use App\Models\Manga_naruto;
use App\Models\nav_information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $test = nav_information::get();
        $anime = Anime::get();
//        $manga_naruto = Manga_naruto::get();
        return view('home')
            ->with("test", $test)
            ->with("anime", $anime);
//            ->with("manga_naruto", $manga_naruto);
    }
}
