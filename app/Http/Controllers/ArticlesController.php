<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){

        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    public function store(CreateArticleRequest $request){
//        $this->validate($request, ['title'=>'required']);
        Article::create($request->all());
        return redirect('/articles');
    }

}
