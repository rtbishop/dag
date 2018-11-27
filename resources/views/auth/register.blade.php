@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('*Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('*Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('*E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone1" class="col-md-4 col-form-label text-md-right">{{ __('*Phone Number') }}</label>

                            <div class="col-md-2">
                                <input id="phone1" type="number" class="form-control{{ $errors->has('phone1') ? ' is-invalid' : '' }}" name="phone1" value="{{ old('phone1') }}" required>
                            </div>
                            <div class="col-md-2">
                                <input id="phone2" type="number" class="form-control{{ $errors->has('phone2') ? ' is-invalid' : '' }}" name="phone2" value="{{ old('phone2') }}" required>
                            </div>
                            <div class="col-md-2">
                                <input id="phone3" type="number" class="form-control{{ $errors->has('phone3') ? ' is-invalid' : '' }}" name="phone3" value="{{ old('phone3') }}" required>
                            </div>

                            @if ($errors->has('phone1'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone1') }}</strong>
                                    </span>
                            @endif
                            @if ($errors->has('phone2'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone2') }}</strong>
                                    </span>
                            @endif
                            @if ($errors->has('phone3'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone3') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group row">
                            <label for="pin" class="col-md-4 col-form-label text-md-right">{{ __('*Account Pin') }}</label>

                            <div class="col-md-6">
                                <input id="pin" type="number" class="form-control{{ $errors->has('pin') ? ' is-invalid' : '' }}" name="pin" value="{{ old('pin') }}" required>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('*Date of Birth (mm/dd/yyyy)') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="text" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" required>

                                @if ($errors->has('birthdate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="secq" class="col-md-4 col-form-label text-md-right">{{ __('*Security Question') }}</label>

                            <div class="col-md-6">
                                <select id="secq" class="form-control{{ $errors->has('secq') ? ' is-invalid' : '' }}" name="secq" required>
                                    <option value="In what city were you born?">In what city were you born?</option>
                                    <option value="What was the make of your first car?">What was the make of your first car?</option>
                                    <option value="Which is your favorite web browser?">Which is your favorite web browser?</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="seca" class="col-md-4 col-form-label text-md-right">{{ __('*Security Answer') }}</label>

                            <div class="col-md-6">
                                <input id="seca" type="text" class="form-control{{ $errors->has('seca') ? ' is-invalid' : '' }}" name="seca" value="{{ old('seca') }}" required>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('*Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('*Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
