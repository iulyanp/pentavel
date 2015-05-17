@extends('app')

@section('header')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <div class="site-heading">
        <h1>About {{ $name }}</h1>
        <hr class="small">
        <span class="subheading">A Pentavel Blog</span>
    </div>
</div>
@endsection

@section('content')
    <div class="content">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi dolor error esse veniam! Distinctio omnis provident voluptate! A amet consequuntur delectus deleniti deserunt dolorem inventore itaque praesentium quam rerum.</blockquote>
    </div>
@endsection
