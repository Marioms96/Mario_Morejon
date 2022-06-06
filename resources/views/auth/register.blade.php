@extends('layouts.auth_app')
@section('title')
    Crear Cuenta
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Crear cuenta</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre</label><span
                                    class="text-danger">*</span>
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                                   name="nombre"
                                   tabindex="1" placeholder="Inserta nombre" value="{{ old('nombre') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('nombre') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellidos</label><span
                                    class="text-danger">*</span>
                            <input id="lastName" type="text"
                                   class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}"
                                   name="apellidos"
                                   tabindex="1" placeholder="Inserta apellidos" value="{{ old('apellidos') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('apellidos') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ident-number">DNI</label><span
                                    class="text-danger">*</span>
                            <input id="identNumber" type="text"
                                   class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}"
                                   name="dni"
                                   tabindex="1" placeholder="Inserta DNI" value="{{ old('dni') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('dni') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone-number">Teléfono</label><span
                                    class="text-danger">*</span>
                            <input id="telephoneNumber" type="text"
                                   class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                                   name="telefono"
                                   tabindex="1" placeholder="Inserta tu teléfono" value="{{ old('telefono') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('telefono') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label><span
                                    class="text-danger">*</span>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Inserta email" name="email" tabindex="1"
                                   value="{{ old('email') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label">Contraseña
                                :</label><span
                                    class="text-danger">*</span>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
                                   placeholder="Inserta contraseña" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation"
                                   class="control-label">Confirmar contraseña:</label><span
                                    class="text-danger">*</span>
                            <input id="password_confirmation" type="password" placeholder="Confirmar contraseña"
                                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Crear cuenta
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        ¿Ya tienes cuenta? <a
                href="{{ route('login') }}">Iniciar sesión</a>
    </div>
@endsection
