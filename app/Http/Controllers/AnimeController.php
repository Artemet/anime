<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Manga_naruto;
use App\Models\nav_information;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(Request $request){
        $test = nav_information::get();
        $anime = Anime::where('id', $request->input('id'))->first();
//        dd($request->input("id"));
        return view('in_card')
            ->with("test", $test)
            ->with("anime", $anime);
    }
}
