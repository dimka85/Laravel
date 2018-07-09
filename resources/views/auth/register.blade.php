@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{ Form::open(['route' => 'register', 'files' => true]) }}

                        <div class="form-group row">
                            {{ Form::label('first_name', __('First name'), ['class' => 'col-md-4 col-form-label
                            text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('first_name', old('first_name'), ['class' => 'form-control' .
                                ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' =>
                                __('Enter your first name'), 'required', 'autofocus']) }}

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('last_name', __('Last name'), ['class' => 'col-md-4 col-form-label
                            text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('last_name', old('last_name'), ['class' => 'form-control' .
                                ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' =>
                                __('Enter your last name'), 'required']) }}

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('nickname', __('Nickname'), ['class' => 'col-md-4 col-form-label
                            text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('nickname', old('nickname'), ['class' => 'form-control' . ($errors->has('nickname') ? ' is-invalid' : ''), 'placeholder' => __('Enter your nickname'), 'required']) }}

                                @if ($errors->has('nickname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('email', __('E-Mail address'), ['class' => 'col-md-4 col-form-label
                            text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has
                                ('email') ? ' is-invalid' : ''), 'placeholder' => __('Enter your E-Mail address'), 'required']) }}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password', __('Password'), ['class' => 'col-md-4 col-form-label
                            text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password')
                                ? ' is-invalid' : ''), 'placeholder' => __('Enter your password'), 'required']) }}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password-confirmation', __('Confirm password'), ['class' => 'col-md-4
                            col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::password('password-confirmation', ['class' => 'form-control', 'placeholder'
                                => __('Confirm your password'), 'required']) }}

                                @if ($errors->has('password-confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password-confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('avatar', __('Avatar'), ['class' => 'col-md-4 col-form-label
                            text-md-right']) }}

                            <div class="col-md-6">
                                <div class="custom-file">
                                    {{ Form::file('avatar', ['class' => 'custom-file-input']) }}

                                    {{ Form::label('avatar', __('Choose file'), ['class' => 'custom-file-label',
                                    'lang' => 'ru']) }}
                                </div>

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <div class="custom-control custom-checkbox">
                                        {{ Form::checkbox('terms', null, (old('terms') ? true : false),
                                        ['class' => 'custom-control-input']) }}

                                        {{ Form::label('terms', __('I agree with terms'), ['class' =>
                                        'custom-control-label']) }}
                                    </div>
                                </div>

                                @if ($errors->has('terms'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('terms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit(__('Register'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
