@extends('app')
@section('header')
    <div class="header">
        <h2>This is the header</h2>
        <hr />
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="col-lg-8">
         <div class="title">Laracast</div>
                <div class="quote">{{ Inspiring::quote() }}</div>

                @unless (Auth::check())
                    <h4>You are not signed in.</h4>
                @endunless

                {{-- This comment will not be in the rendered HTML --}}
                {{ 'This will not be processed by Blade' }}

        </div>


        <div class="col-lg-4">
            @include('partials.welcome-sidebar', ['people' => $people])
        </div>
    </div>
@endsection

@section('footer')
    <div class="footer">
        <hr />
        <h4>Enzo || 2015</h4>
    </div>
@endsection