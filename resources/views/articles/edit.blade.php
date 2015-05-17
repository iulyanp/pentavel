@extends('app')

@section('header')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <div class="site-heading">
        <h1>Pentavel blog</h1>
        <hr class="small">
        <span class="subheading">A Pentavel Blog</span>
    </div>
</div>
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