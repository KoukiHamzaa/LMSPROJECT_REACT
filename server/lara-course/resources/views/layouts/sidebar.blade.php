<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://i.ibb.co/PcGSCyQ/Ulearn.png" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>InfyOm</p>
                @else
                    @if(Auth::user()->role_id == 1)
                            <p><div class="role_center">© Administrateur</div> <br/> {{ Auth::user()->name}}</p>
                        @elseif(Auth::user()->role_id == 2)
                            <p><div class="role_center">© Modérateur</div> <br/>  {{ Auth::user()->name}}</p>
                        @elseif(Auth::user()->role_id == 3)
                            <p><div class="role_center">© Instructeur</div> <br/>  {{ Auth::user()->name}}</p>
                        @else 
                        <p><div class="role_center">© étudiant</div> <br/>  {{ Auth::user()->name}}</p>
                    @endif

                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Chercher..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>