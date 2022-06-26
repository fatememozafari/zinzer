<?php

namespace App\Http\Controllers\zinzer;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Home;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $item = Home::query()
            ->orderBy('id','DESC')
            ->get();

        $articles=Article::query()
            ->orderBy('id','desc')
            ->limit(3)
            ->get();
        $news=News::query()
            ->orderBy('id','desc')
            ->limit(3)
            ->get();
        $lists=User::query();

        return view('zinzer.home', compact('item','articles','news'));
   }
}
