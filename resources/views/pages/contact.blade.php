@extends('app')
@section('header')
    <div class="header">
        <h2>This is the header</h2>
        <hr />
    </div>
@endsection


@section('content')
    <div class="content">
        <div class="title">Contact</div>
        <div class="quote">{{ Inspiring::quote() }}</div>

    </div>
@endsection

@section('footer')
    <div class="footer">
        <hr />
        <h4>Laracast || 2015</h4>
    </div>
@endsection