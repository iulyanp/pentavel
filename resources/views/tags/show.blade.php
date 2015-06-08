@extends('app')

@section('header')
    @include('partials.header', ['title' => 'Tags', 'body' => 'This is the tags page'])
@endsection

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <h2>{{ count($articles) }} posts found in <span class="label label-info">{{ $tag->name }}</span> tag</h2>
    <hr/>
    @forelse ($articles as $article)
        @include('articles.partials.article-resume', ['article' => $article])
    @empty
        <div class="alert alert-danger">No articles for this tag</div>
    @endforelse
</div>
@endsection