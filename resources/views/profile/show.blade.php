@extends('app')

@section('content')
    <h2>Profile page</h2>
    <ul class="list">
        <li>Username "{{ Auth::user()->username }}"</li>
        <li>Name: {{ Auth::user()->name }}</li>
        <li>Location: {{ Auth::user()->location }}</li>
    </ul>

    <h3>Your Articles</h3>
    <ul class="articles-list">
      @foreach($articles as $article)
        <li>
            <a href="{{ route('articles.show', $article->id) }}" class="title">{{ $article->title }}</a>
            <small>Published at {{ $article->published_at->diffForHumans() }}</small>

            <a href="{{ route('articles.edit', $article->id) }}" class="link">Edit</a>
        </li>
      @endforeach
    </ul>
@stop