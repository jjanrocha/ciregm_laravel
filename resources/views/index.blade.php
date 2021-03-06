@extends('layout.basico')

@section('content')

@section('title', 'Login')

<div style="min-height: 100vh;" class="bg-dark">
    <div class="container-login">
        <div class="box-login">
            <div class="form-group d-flex justify-content-center">
                <img src="{{ asset('img/logo.png') }}" width="120px" />
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="id" placeholder='Usuario' class="form-control"
                            value="{{ old('id') ?? '' }}" required>
                    </div>
                    @if ($errors->has('id'))
                        <div style="color: orange">
                            {{ $errors->first('id') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="password" placeholder='Senha' class="form-control"
                            value="{{ old('password') ?? '' }}" required>
                    </div>
                    @if ($errors->has('password'))
                        <div style="color: orange">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="col text-center">
                        <button type="submit" class="btn botao">Login</button>
                    </div>
                </div>
            </form>

            @if ($errors->has('msg'))
                <div class="alert alert-danger" role="alert">
                    Usuário e/ou senha inválidos.
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
