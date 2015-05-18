@extends('app')

@section('header')
 @include('partials.header', ['title' => 'About', 'body' => 'This is the articles body'])
@endsection

@section('content')
    <div class="content">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi dolor error esse veniam! Distinctio omnis provident voluptate! A amet consequuntur delectus deleniti deserunt dolorem inventore itaque praesentium quam rerum.</blockquote>
    </div>
@endsection
