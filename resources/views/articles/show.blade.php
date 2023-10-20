@extends('app')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    @if($article)
        {{ $article->content }}
    @endif
</div>
@stop
