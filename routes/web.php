<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Models\User ;





Route::get('/' , [MoviesController::class , 'index'])->name('movies.index');
Route::get('/movie/{movie}' , [MoviesController::class , 'show'])->name('movie.show');


Route::get('/erreur' , function(){
    // on peut aussi utiliser la méthode
    // firstOrFaild() ;  qui renvoie aussi
    // la page 404 :
    $user = User::find(1);
    // 1 er façon :
    if(!$user) abort(404);
    // 2 éme  façon :
    // if(!$user) if_abort(404);
    else return $user ;
});
