@extends('app')

@section('header')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <div class="site-heading">
        <h1>Pentavel Blog</h1>
        <hr class="small">
        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
    </div>
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

@section('javascript')
    <script type="application/javascript">

    </script>
@endsection