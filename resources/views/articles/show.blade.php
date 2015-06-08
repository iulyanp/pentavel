@extends('app')

@section('header')
    @include('partials.header', [
        'title' => $article->title,
        'body' => $article->excerpt
    ])
@endsection


@section('content')

<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <small>Posted by {{ $article->user->username }}, {{ $article->published_at->diffForHumans() }}</small>

    @unless($article->categories->isEmpty())
        @foreach($article->categories as $category)
        <a href="{{ route('category', strtolower($category->name)) }}">{{ $category->name }}</a>
        @endforeach
    @endunless

    <p>{!! $article->body !!}</p>

    @unless($article->tags->isEmpty())
    <h3>Tags</h3>
    @foreach($article->tags as $tag)
        <span class="label label-success"><a href="{{ route('tags', $tag->name) }}">{{ $tag->name }}</a></span>
    @endforeach
    @endunless
    <hr/>

    @if (Auth::check() && Auth::id() == $article->user->id)
    <a class="btn btn-primary" href="{{ route('articles.edit', ['id'=>$article]) }}">Edit article</a>
    @endif

    <hr/>

    <div class="page-header">
        <h1>Comments <small class="pull-right">{{ count($article->comments)}} comments</small></h1>
    </div>

    {!! Form::open(['route' => ['comments.store', $article->id]]) !!}

        <div class="form-group">
            {!! Form::textarea('comment', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Comment', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}

    <hr/>

    <div class="comments-list">
        @foreach($article->comments()->orderby('created_at', 'DESC')->get() as $comment)
        <div class="media">
           <p class="pull-right"><small>{{ $comment->created_at->diffForHumans() }}</small></p>
            <a class="media-left" href="#">
              <img src="http://lorempixel.com/40/40/people/1/">
            </a>
            <div class="media-body">

              <h4 class="media-heading user_name">{{ $comment->user->username }}</h4>
              {{$comment->comment}}

              <p><small><a href="">Like</a></small></p>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection