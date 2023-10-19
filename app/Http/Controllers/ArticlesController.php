<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){

//        $articles = Article::all();
        $articles = Article::latest()->published()->get();

        return view('articles.index',compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);
        dd($article->publish_at->diffForHumans());
        dd(Carbon::parse($article->publish_at)->diffForHumans());
        dd($article->created_at->year);
        dd($article->created_at->diffForHumans());
        return view('articles.show', compact('article'));
    }

    public function store(CreateArticleRequest $request){
//        $this->validate($request, ['title'=>'required']);
        Article::create($request->all());
        return redirect('/articles');
    }

}
