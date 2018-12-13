@extends('layouts.plantilla2')

@section('content')

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="email" placeholder="Nombre (s)" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <button class="button is-block is-info is-large is-fullwidth" type="submit"> {{ __('Register') }} </button>
                           

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-6 is-offset-3">

                <a href="/">
                    <img src="images/logo_login.png" />
                </a>

                <div class="box">
                    
                    <h3 class="title has-text-grey">Registro</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="text"  placeholder="Nombre (s)" autofocus="" id="firstname" name="firstname" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="text" placeholder="Apellido (s)" autofocus="" id="lastname" name="lastname" required>
                            </div>
                        </div>
                        
                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="text" placeholder="Telefono" autofocus="" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="email" placeholder="Correo" autofocus="" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="password" placeholder="Contraseña" id="password" name="password" required>
                            </div>
                        </div>

                        <button class="button is-block is-info is-large is-fullwidth">Guardar</button>
                    </form>
                </div>

                <p class="has-text-grey">
                    <a href="/login">Iniciar Sesion</a> &nbsp;·&nbsp;
                    <a href="/">Inicio</a>
                </p>
                
            </div>
        </div>
    </div>
</section>

@endsection
