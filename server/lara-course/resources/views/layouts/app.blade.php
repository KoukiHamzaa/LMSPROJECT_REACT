<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ulearn</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{ url('/bootstrap/Bootstrap 4.1.3/bootstrap.min.css') }}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
   
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/bootstrap/Bootstrap 3.3.7/bootstrap_min_css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/bootstrap/Bootstrap 3.3.7/bootstrap_toggle_min_css/bootstrap-toggle.min.css') }}"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/font_awesome/font-awesome.min.css') }}"> -->

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/AdminLTE/AdminLTE_min_css/AdminLTE.min.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">
    <!-- <link rel="stylesheet"  href="{{ url('/AdminLTE/_all_skins_min_css/_all-skins.min.css') }}" />     -->

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <!-- <link rel="stylesheet" href="{{ url('/iCheck/_all_css/_all.cs') }}" />     -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/iCheck/select2_min_css/select2.min.css') }}"> -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/Ionicons/ionicons_min_css/ionicons.min.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/Ionicons/bootstrap_datetimepicker_min_css/bootstrap-datetimepicker.min.css') }}"> -->
    <!-- Nice_edit -->
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <!-- <script src="{{ url('/Nice_edit/nicEdit-latest.js') }}" type="text/javascript"></script> -->
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
    <!-- Icon Place -->
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/PcGSCyQ/Ulearn.png" />
    <!-- <link rel="icon" type="image/x-icon" href="{{ url('/Icon Place/Ulearn.png') }}" /> -->

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />    

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
<!-- style="background-image: url('https://i.ibb.co/Qb8PZvL/yellow-and-and-blue-colored-pencils-1762851.jpg'); -->
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>Ulearn</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div class=""  style="padding-right: 800px">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <!-- <span class="sr-only">Basculer la navigation</span>   -->
                </a>
                </div>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu ">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu" style="left:20%">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{ Auth::user()->image}}"
                                     class="user-image" alt="User Image"/>
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{ Auth::user()->image}}"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Membre depuis {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/users/{{ Auth::user()->id }}" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Déconnexion
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2020 
                <img src="https://www.n-3rd.com/wp-content/uploads/2019/09/cropped-n-3rd-logo-110-32x32.png" width="15" height="15" alt="icon_copyright">.
                <!-- <img src="{{ url('/Icon Place/logo/n-3rd/cropped-n-3rd-logo-110-32x32.png') }}" width="15" height="15" alt="icon_copyright">. -->
                <a href="https://www.n-3rd.com">N3RD</a>
            </strong> Tous les droits sont réservés.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Basculer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Accueil</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/login') }}">Accueil</a></li>
                    <li><a href="{{ url('/register') }}"  target="_blank">S'inscrire</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="{{ url('/script/jQuery/jquery.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <!-- <script src="{{ url('/script/jQuery/moment.min.js') }}"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="{{ url('/script/jQuery/bootstrap.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <!-- <script src="{{ url('/script/jQuery/bootstrap-datetimepicker.min.js') }}"></script> -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- <script src="{{ url('/script/jQuery/bootstrap-toggle.min.js') }}"></script> -->

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    <!-- <script src="{{ url('/script/AdminLTE/adminlte.min.js') }}"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <!-- <script src="{{ url('/script/iCheck/icheck.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <!-- <script src="{{ url('/script/iCheck/select2.min.js') }}"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="{{ url('/script/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- <script src="{{ url('/script/popper.min.js') }}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="{{ url('/script/bootstrap.min.js') }}" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    @stack('scripts')
</body>
</html>