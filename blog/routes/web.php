<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index']);

Route::get('prueba', function(){
    
    
    //crear nuevo post

    /*
    $post = new Post;
    $post->title = 'Titulo prueba 3';
    $post->content ='contenido prueba 3';
    $post->categoria='categoria prueba 3';

    $post->save();

    return $post;
    
    */

    /*

    //actualizar registros

    $post = Post::where('title','titulo prueba 1')->first();

    $post->categoria='Desarollo web';

    $post->save();

    return $post;
    */
/*

//traer todos los registros
    $post = Post::all();

    return $post;
    */

    /*

    traer todos los registros mayores

    $post = Post::where('id','>=','2')->get();
    return $post;

    */
    /*
    //consultar columnas que quiera ver con la cantidad

    $post = Post::orderBy('id','desc')
    ->select('id','title')
    ->take(1)
    ->get();
    return $post;
    */

    /*

    //eliminar registros

    $post = Post::find(3);

    $post->delete();

    return 'eliminado';
    */

    $post = Post::find(4);

    return $post;

});
