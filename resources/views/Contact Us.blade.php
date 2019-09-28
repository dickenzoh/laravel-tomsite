@section('content')
@extends('layouts.app')
<section id="contact-form">

	<div class="container">
        <div class="lead-intro text-center">
			<h3>Contact Us or Leave a Message below</h3>
			<p class="lead">Here is a list of our updated contacts. Feel free to call or email us on official times.</p>
		</div>
		@include('inc.messages')
		<h1>Contact</h1>
		{!! Form::open(['url' => 'contact/submit']) !!}
			<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{Form::text('name', '', ['class' => 'form-control', 'placeholder' =>'Enter name'])}}
			</div>
			<div class="form-group">
			{{Form::label('email', 'Email Address')}}
			{{Form::text('email', '', ['class' => 'form-control', 'placeholder' =>'Enter ur email'])}}
			</div>
			<div class="form-group">
			{{Form::label('message', 'Message')}}
			{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' =>'Enter Message'])}}
			</div>
			<div>
			{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
			</div>
		{!! Form::close() !!}
	</div>
</section>	
@endsection
