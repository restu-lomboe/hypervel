<?php

declare(strict_types=1);

use App\Models\Article;
use App\Models\Category;
use Ramsey\Uuid\Uuid;
use Hypervel\Support\Facades\Route;

Route::get('/', function () {

    // $article = Article::create([
    //     'id' => Uuid::uuid4(),
    //     'name' => "Ini Artikel",
    //     'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, adipisci?",
    //     'status' => true
    // ]);
    
    // $category = Category::create([
    //     "name" => "Ini Nama"
    // ]);

    return $category->id;
});
