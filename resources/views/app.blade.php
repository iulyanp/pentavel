<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enzo</title>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    @section('link')
	<link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    @show


</head>
    <body>
        @include('partials.navigation')

        @section('header')
            @include('partials.header', ['title' => 'Homepage', 'body' => 'This is the body'])
        @show

        <div class="container">
             <div class="row">
                @if (Session::has('flash_message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif

                @yield('content', 'No content yet!')
            </div>
        </div>

        <hr>
        @include('partials.footer')

        @section('javascript')
        <script src="{{ asset('js/all.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

        @show
    </body>
</html>
