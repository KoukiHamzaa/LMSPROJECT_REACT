<div class="register-box">
    {{-- <div class="register-logo">
        <a href="{{ url('/home') }}"><b>Braintem </b>École en ligne</a>
</div> --}}

<div class="register-box-body">

    <div class="social-auth-links text-center">
        <a href="/login/facebook" class="btn btn-block btn-social btn-facebook btn-flat">
            <i class="fa fa-facebook"></i> Se connecter avec
            Facebook</a>
        <br />

        <a href="/login/google" class="btn btn-block btn-social btn-google btn-flat">
            <i class="fa fa-google"></i> Connectez-vous avec Google</a>
    </div>

    <p class="login-box-msg">Ou créez un nouveau compte</p>
    <form method="post" action="{{ url('/register') }}">

        {!! csrf_field() !!}

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> J'accepte les <a href="#">conditions</a>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-danger btn-block btn-flat">S'inscrire</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <a href="{{ url('/login') }}" class="text-center">Déjà un compte? Connectez-vous à la place.</a>
</div>
<!-- /.form-box -->
</div>