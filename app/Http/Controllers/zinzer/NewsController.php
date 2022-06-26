<?php

namespace App\Http\Controllers\zinzer;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $query = News::query()
            ->orderBy('id','DESC')
            ->get();
        return view('zinzer.news.news', ['item' => $query]);
    }

    public function show($id)
    {
        $news = News::query()->find($id);

        return view('zinzer/news/show', compact('news'));
    }
}
