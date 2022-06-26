<?php

namespace App\Http\Controllers\zinzer;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $query = Article::query()
            ->orderBy('id','DESC')
            ->get();
        return view('zinzer.articles.article', ['item' => $query]);
    }

    public function show($id)
    {
        $articles = Article::query()->find($id);

        return view('zinzer/articles/show', compact('articles'));
    }
}
