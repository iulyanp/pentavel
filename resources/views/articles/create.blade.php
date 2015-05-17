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
    <h2>Create a new article</h2>

    <hr/>

    @include('errors.listing')

    {{-- Form here --}}
    {!! Form::open(['route'=>'articles.store']) !!}
        @include('articles.form', ['submitButtonText' => 'Add article'])
    {!! Form::close() !!}

</div>
@endsection