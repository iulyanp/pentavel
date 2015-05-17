@extends('app')

@section('header')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <div class="site-heading">
        <h1>Pentavel Blog</h1>
        <hr class="small">
        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @if (Auth::check())
    <a class="btn btn-primary pull-right" href="{{ route('articles.create') }}">Create Article</a>
    @endif
    @forelse ($articles as $article)
        @include('partials.article-resume', ['article' => $article])
    @empty
        <div class="alert alert-danger">No articles yet</div>
    @endforelse
</div>
@endsection