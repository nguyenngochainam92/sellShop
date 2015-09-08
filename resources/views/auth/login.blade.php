@extends('master')
@section('title', 'Login')
@section('content')

	<!--#contact-page-->

	 <div id="contact-page" class="container">
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					@if(session()->has('error'))
						@include('partials/error', ['type' => 'danger', 'message' => session('error')])
					@endif	
					<hr>	
					<h2 class="intro-text text-center">{{ trans('front/login.connection') }}</h2>
					<hr>
					<p>{{ trans('front/login.text') }}</p>				
					
					{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}	
					
					<div class="row">
						<div class="form-group">
							{!!Form::label(trans('front/login.log'))!!}
							{!!Form::text('log',null,array('required','class'=>'form-control'))!!}
						</div>
						<div class="form-group">
							{!!Form::label(trans('front/login.password'))!!}
							{!!Form::text('password',null,array('required','class'=>'form-control'))!!}
						</div>
						<div 
						{!! Form::submit(trans('front/form.send'), array('class' => '') ['col-lg-12']) !!}
						{!! Form::check('memory', trans('front/login.remind')) !!}
						{!! Form::text('address', '', ['class' => 'hpet']) !!}		  
						<div class="col-lg-12">					
							{!! link_to('password/email', trans('front/login.forget')) !!}
						</div>

					</div>
					
					{!! Form::close() !!}

					<div class="text-center">
						<hr>
							<h2 class="intro-text text-center">{{ trans('front/login.register') }}</h2>
						<hr>	
						<p>{{ trans('front/login.register-info') }}</p>
						{!! link_to('auth/register', trans('front/login.registering'), ['class' => 'btn btn-default']) !!}
					</div>

				</div>
			</div>
		</div>
	</div>

	<!--/#contact-page-->

@endsection