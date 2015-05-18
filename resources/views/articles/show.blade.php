@extends('app')

@section('header')
    @include('partials.header', [
        'title' => $article->title,
        'body' => $article->excerpt
    ])
@endsection


@section('content')

<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @if (Auth::check() && Auth::id() == $article->user->id)
    <a class="btn btn-primary" href="{{ route('articles.edit', ['id'=>$article]) }}">Edit article</a>
    @endif

    <small>Posted by {{ $article->user->username }}, {{ $article->published_at->diffForHumans() }}</small>

    <p>{!! $article->body !!}</p>

    <hr/>

    {!! Form::open(['route' => 'comments.store', 'id' => $article->id]) !!}

        <div class="form-group">
            {!! Form::label('comment', 'Comment:') !!}
            {!! Form::textarea('comment', null, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Comment', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}

</div>


@endsection