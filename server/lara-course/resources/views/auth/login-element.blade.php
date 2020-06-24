  
 <div class="login-box-body">

<div class="social-auth-links text-center">
<p class="login-box-msg">Entrez vos informations de connexion</p>

<form method="post" action="{{ url('/login') }}">
    {!! csrf_field() !!}

    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif

    </div>
    <div class="form-group">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember"> Souviens-toi de moi
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-danger btn-block btn-flat">Se connecter</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<a href="{{ url('/password/reset') }}">Mot de passe oublié</a> |
<a href="{{ url('/register') }}" class="text-center">S'inscrire</a>

</div>