@extends('app')
@section('header')
    <div class="header">
        <h3>This is the header</h3>
        <hr />
    </div>
@endsection


@section('content')
    <div class="content">
        <div class="title"><h2>About {{ $name }}</h2></div>
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi dolor error esse veniam! Distinctio omnis provident voluptate! A amet consequuntur delectus deleniti deserunt dolorem inventore itaque praesentium quam rerum.</blockquote>
    </div>
@endsection

@section('footer')
    <div class="footer">
        <hr />
        <h4>Laracast || 2015</h4>
    </div>
@endsection