<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SellerController;

Route::get("seller",[SellerController::class,"index"])
    ->middleware("auth")
    ->name("seller.index");

Route::group([
    'prefix'=>'seller'
],function (){

    Route::delete('/post/bulk-delete', [PostController::class, 'bulkDelete'])
        ->name('post.bulkDelete');
    Route::resource('post', PostController::class);


});
