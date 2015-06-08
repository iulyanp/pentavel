@extends('app')

@section('header')
    @include('partials.header', ['title' => 'Category', 'body' => 'This is the category page'])
@endsection

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <h3>{{ count($articles) }} posts found in {{ $category->name }} category</h3>
    @forelse ($articles as $article)
        @include('articles.partials.article-resume', ['article' => $article])
    @empty
        <div class="alert alert-danger">No articles for this category</div>
    @endforelse
</div>
@endsection