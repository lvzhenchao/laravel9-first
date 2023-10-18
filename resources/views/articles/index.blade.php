@extends('app')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <h1>Article</h1>
    @if($articles)
        @foreach($articles as $article)
            <h2>
                {{ $article->title }}
            </h2>
            <article>
                {{ $article->content }}
            </article>
        @endforeach
    @endif
</div>
@stop
