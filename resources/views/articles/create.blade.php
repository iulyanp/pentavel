@extends('app')

@section('header')
 @include('partials.header', ['title' => 'Pentavel', 'body' => 'This is the articles body'])
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