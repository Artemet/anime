<?php

namespace App\Http\Controllers;

use App\Models\Manga_naruto;
use App\Models\Naruto_videoPage;
use App\Models\nav_information;
use Illuminate\Http\Request;

class Manga_narutoController extends Controller
{
    public function index(){
        $test = nav_information::get();
        $manga_naruto = Manga_naruto::get();
        return view('all_series')
            ->with("test", $test)
            ->with("manga_naruto", $manga_naruto);
    }
}
