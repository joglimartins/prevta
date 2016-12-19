@extends('layouts.auth')

@section('content')
<div class="container">
<div class="container d-table">
        <div class="d-100vh-va-middle">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card-group">
                        <div class="card p-2">
                            <div class="card-block">
                                <h1>Acesso</h1>
                                <form role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <p class="text-muted">Acesse ao painel</p>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <div class="input-group mb-1">
                                        <span class="input-group-addon"><i class="icon-user"></i>
                                        </span>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="input-group mb-2">
                                        <span class="input-group-addon"><i class="icon-lock"></i>
                                        </span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Lembre-me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="submit" class="btn btn-primary px-2">Acessar</button>
                                        </div>
                                        <div class="col-xs-6 text-xs-right">
                                            <a href="{{ url('/password/reset') }}" type="button" class="btn btn-link px-0">Esqueceu a senha?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">
                            <div class="card-block text-xs-center">
                                <div>
                                    <h2>Sys<strong>Lab</strong></h2>
                                    <p>Sistema desenvolvido para o ITAPREI.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
