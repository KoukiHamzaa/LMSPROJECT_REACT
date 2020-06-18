{{--Admin:1, moderator:2, instructors:3 also students:4 !! --}}

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Catégorie Cours</span></a>
            <!-- we change this item from Categories  to Courses -->
</li>
@if(Auth::user()->role_id == 1)
<li class="{{ Request::is('courseUsers*') ? 'active' : '' }}">
    <a href="{{ route('courseUsers.index') }}"><i class="fa fa-edit"></i><span>Abonnement</span></a>  
</li>
@endif
    <!-- we change this item from Course Users to Subscription -->


<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-list"></i><span>Mes cours</span></a>
                        <!---start_List----->
        <li class="{{ Request::is('courses*') ? 'active' : '' }} ml-5"}>
            <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Cours</span></a>
        </li>
        <li class="{{ Request::is('courses*') ? 'active' : '' }} ml-5">
            <a href=""><i class="fa fa-edit"></i><span>TP_TD</span></a>
        </li>
        <li class="{{ Request::is('courses*') ? 'active' : '' }} ml-5">
            <a href=""><i class="fa fa-edit"></i><span>Examens du calendrier</span></a>
        </li>
        <!---start_List----->
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Paiements</span></a>
</li>
{{-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- Admin Section -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --}}

@if(Auth::user()->role_id < 3)

@if(Auth::user()->role_id == 1)
<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>commentaires</span></a>
</li>
@endif

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>



                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Utilisatrices</span></a>
                </li>


<li class="{{ Request::is('views*') ? 'active' : '' }}">
    <a href="{{ route('views.index') }}"><i class="fa fa-edit"></i><span>Vues</span></a>
</li>

    @if(Auth::user()->role_id == 1 )
    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
        <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Rôles</span></a>
    </li>
    @endif
@endif


<!-- <li class="{{ Request::is('coupons*') ? 'active' : '' }}">
    <a href="{{ route('coupons.index') }}"><i class="fa fa-edit"></i><span>Coupons</span></a>
</li> -->

<li class="{{ Request::is('courseUsers*') ? 'active' : '' }}">
    <a href="{{ route('courseUsers.index') }}"><i class="fa fa-edit"></i><span>Utilisateurs du cours</span></a>
</li>

