<<<<<<< HEAD
@extends('site.layouts.default') {{-- Web site Title --}}
@section('title') {{{ Lang::get('site/user.login') }}} :: @parent @stop

{{-- Content --}} @section('content')
<div class="page-header">
	<h1>{{{ Lang::get('site/user.login_to_account') }}}</h1>
</div>
<form class="form-horizontal" method="POST"
	action="{{URL::to('auth/login')}}" accept-charset="UTF-8">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- ./ csrf token -->
	<fieldset>
		<div class="form-group {{$errors->has('email')?'has-error':''}}">
			<label class="col-md-2 control-label" for="email"> {{
				Lang::get('site/user.e_mail') }} </label>
			<div class="col-md-10">
				<input class="form-control" tabindex="1"
					placeholder="{{ Lang::get('site/user.e_mail') }}" type="text"
					name="email" id="email" value="{{ Input::old('email') }}"> <span
					class="help-block">{!!$errors->first('email', '<span
					class="help-block">:message </span>')!!}
				</span>
			</div>
		</div>
		<div class="form-group {{$errors->has('email')?'has-error':''}}">
			<label class="col-md-2 control-label" for="password"> {{
				Lang::get('site/user.password') }} </label>
			<div class="col-md-10">
				<input class="form-control" tabindex="2"
					placeholder="{{ Lang::get('site/user.password') }}" type="password"
					name="password" id="password"> <span class="help-block">{!!$errors->first('password',
					'<span class="help-block">:message </span>')!!}
				</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<button tabindex="3" type="submit" class="btn btn-primary">{{
					Lang::get('site/user.submit') }}</button>
				<a class="btn btn-default" href="register">{{
					Lang::get('site/user.register') }}</a>
			</div>
		</div>
	</fieldset>
</form>

@stop
=======
@extends('site.layouts.default') {{-- Web site Title --}}
@section('title') {{{ trans('site/user.login') }}} :: @parent @stop

{{-- Content --}} @section('content')
<div class="page-header">
	<h1>{{{ trans('site/user.login_to_account') }}}</h1>
</div>
<form class="form-horizontal" method="POST"
	action="{{URL::to('auth/login')}}" accept-charset="UTF-8">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- ./ csrf token -->
	<fieldset>
		<div class="form-group {{$errors->has('email')?'has-error':''}}">
			<label class="col-md-2 control-label" for="email"> {{
				trans('site/user.e_mail') }} </label>
			<div class="col-md-10">
				<input class="form-control" tabindex="1"
					placeholder="{{ trans('site/user.e_mail') }}" type="text"
					name="email" id="email" value="{{ Input::old('email') }}"> <span
					class="help-block">{!!$errors->first('email', '<span
					class="help-block">:message </span>')!!}
				</span>
			</div>
		</div>
		<div class="form-group {{$errors->has('email')?'has-error':''}}">
			<label class="col-md-2 control-label" for="password"> {{
				trans('site/user.password') }} </label>
			<div class="col-md-10">
				<input class="form-control" tabindex="2"
					placeholder="{{ trans('site/user.password') }}" type="password"
					name="password" id="password"> <span class="help-block">{!!$errors->first('password',
					'<span class="help-block">:message </span>')!!}
				</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<button tabindex="3" type="submit" class="btn btn-primary">{{
					trans('site/user.submit') }}</button>
				<a class="btn btn-default" href="register">{{
					trans('site/user.register') }}</a>
			</div>
		</div>
	</fieldset>
</form>

@stop
>>>>>>> 75c9bc1... delete roles for users and fix translate functionality
