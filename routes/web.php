<?php
dd("sergey");
use App\Models\Anime;
use App\Models\nav_information;
use App\Models\Manga_naruto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    $test = nav_information::get();
    $anime = Anime::get();
    $manga_naruto = Manga_naruto::get();
    return view('welcome')
        ->with("test", $test)
        ->with("anime", $anime)
        ->with("manga_naruto", $manga_naruto);
});
Route::get('/home', [HomeController::class, 'index']);
//Route::get("/home", function (){
//    $test = nav_information::get();
//    $anime = Anime::get();
//    return view('welcome')
//        ->with("test", $test)
//        ->with("anime", $anime);
//});
Route::get("/home/contacts", function (){
    $test = nav_information::get();
    $anime = Anime::get();
    return view("contacts")
        ->with("test", $test)
        ->with("anime", $anime);
});
Route::get("/home/distribution_updates", function (){
    $test = nav_information::get();
    $anime = Anime::get();
    return view("distribution_updates")
        ->with("test", $test)
        ->with("anime", $anime);
});
Route::get("/home/anime_mail", function (){
    $test = nav_information::get();
    $anime = Anime::get();
   return view("anime_mail")
       ->with("test", $test)
       ->with("anime", $anime);
});
Route::get("/home/all_techniques", function (){
    $test = nav_information::get();
    $anime = Anime::get();
   return view("all_techniques")
       ->with("test", $test)
       ->with("anime", $anime);
});
Route::get("/home/manga_naruto", function (){
    $test = nav_information::get();
    $anime = Anime::get();
    return view("manga_naruto")
        ->with("test", $test)
        ->with("anime", $anime);
});
Route::get("/home/plus", function(){
    $test = nav_information::get();
    $anime = Anime::get();
    return view("plus")
        ->with("test", $test)
        ->with("anime", $anime);
});
Route::get("/home/in_card", [\App\Http\Controllers\AnimeController::class, 'index'])->name("in_card");
//Route::get("/home/manga_naruto", [\App\Http\Controllers\Naruto_video_pageController::class, 'index']);
Route::get("/home/all_series", [\App\Http\Controllers\Manga_narutoController::class, 'index']);
//    Route::get('/home', [HomeController::class, 'index']);
