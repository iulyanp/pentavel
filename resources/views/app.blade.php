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
             @yield('content', 'No content yet!')
        </div>
    </div>

    <hr>
    @include('partials.footer')

    @section('javascript')
    <!-- Custom Theme JavaScript -->
    <script src="{{ assets('js/all.js') }}"></script>
    @show
</body>
</html>
