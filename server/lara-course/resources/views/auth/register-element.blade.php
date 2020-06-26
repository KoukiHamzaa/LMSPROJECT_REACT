<div class="register-box">
    {{-- <div class="register-logo">
        <a href="{{ url('/home') }}"><b>Ul </b>Ulearn</a>
</div> --}}

<div class="register-box-body">

{{--<div class="social-auth-links text-center">
        <a href="/login/facebook" class="btn btn-block btn-social btn-facebook btn-flat">
            <i class="fa fa-facebook"></i> Sign in with
            Facebook</a>
        <br />

        <a href="/login/google" class="btn btn-block btn-social btn-google btn-flat">
            <i class="fa fa-google"></i> Sign in with Google</a>
    </div>--}}

    <p class="login-box-msg">Ou créez un nouveau compte</p>
    <form method="post" action="{{ url('/register') }}">

        {!! csrf_field() !!}

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nom complet">
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
            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe">
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
                        <input type="checkbox"> je suis d'accord avec le <a href="#">termes</a>
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

    <a href="{{ url('/login') }}" class="text-center">Vous avez déjà un compte ??</a>
    <br>
    <a class="btn btn-primary text-capitalize" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Si vous êtes un enseignant?
		  </a>
</div>
	<div class="collapse" id="collapseExample">
		<div class="card card-body">
<div class="register-box-footer" style="background: #fff;height:160px;">
			<div  class="text-left" style="margin-top:10px;margin-left:20px;font-family: 'MuseoModerno', cursive;">
				<br>
                <ul>
					<li style="  margin: 5px 50px 5px 0px;">Complétez votre  inscription</li>
					<li>Puis envoyez-nous un <a href="mailto: contact@ulearn.com">e-mail</a> avec toute votre certification.</li>
					<li>Nous allons changer votre compte<br> de rôle par défaut (étudiant) en rôle enseignant(dans24h).</li>
				<ul>
			</div>
		</div>
	</div>
</div>
<!-- /.form-box -->
</div>