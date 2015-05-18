@extends('app')

@section('header')
@include('partials.header', ['title' => 'Pentavel', 'body' => 'This is the articles body'])
@endsection

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <h2>Edit: {{ $article->title }}</h2>

    <hr/>

    @include('errors.listing')

    {{-- Form here --}}
    {!! Form::model($article,  ['method' => 'PATCH', 'route'=> ['articles.update', $article->id ]]) !!}
        @include('articles.form', ['submitButtonText' => 'Update article'])
    {!! Form::close() !!}

</div>
@endsection