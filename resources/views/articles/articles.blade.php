@extends('app')

@section('header')
    @include('partials.header', ['title' => 'Articles', 'body' => 'This is the articles body'])
@endsection

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @if (Auth::check())
    <a class="btn btn-primary pull-right" href="{{ route('articles.create') }}">Create Article</a>
    @endif

    @forelse ($articles as $article)
        @include('articles.partials.article-resume', ['article' => $article])
    @empty
        <div class="alert alert-danger">No articles yet</div>
    @endforelse
</div>
@endsection