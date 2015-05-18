@extends('app')
@section('link')
    @parent

@stop


@section('header')
    @parent
@stop


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
            @include('welcome.partials.welcome-sidebar', ['people' => $people])
        </div>
    </div>
@endsection

@section('javascript')
    <script type="application/javascript">

    </script>
@endsection