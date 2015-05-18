@extends('app')

@section('header')
 @include('partials.header', ['title' => 'Contact', 'body' => 'This is the articles body'])
@endsection

@section('content')
    <div class="content">
    <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
        <blockquote>{{ Inspiring::quote() }}</blockquote>

        {!! Form::open() !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('message', 'Message:') !!}
                {!! Form::textarea('message', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Contact', ['class'=>'btn btn-default']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection
