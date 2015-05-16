@extends('app')

@section('content')
    <h2>Articles</h2>
    @forelse ($articles as $article)
        @include('partials.article-resume', ['article' => $article])
    @empty
        <div class="alert alert-danger">No articles yet</div>
    @endforelse
@endsection