<!---start--All peopel can see this section----->

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Catégorie Cours</span></a>

</li>

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="" class="disabled button" style="pointer-events: none;cursor: default;text-decoration: inherit;"><i class="fa fa-list"></i><span>Mes cours</span></a>
                        <!---start_List----->
        <li class="{{ Request::is('courses*') ? 'active' : '' }} ml-5"}>
            <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Cours</span></a>
        </li>
        <li class="{{ Request::is('courses*') ? 'active' : '' }} ml-5">
            <a href=""><i class="fa fa-edit"></i><span>TP_TD</span></a>
        </li>
 
 <li class="{{ Request::is('notes*') ? 'active' : '' }}">
    <a href="{{ route('notes.index') }}"><i class="fa fa-edit"></i><span>Liste des évaluations</span></a>
</li>

 <li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-edit"></i><span>Calandrier des examens </span></a>
</li>
</li>


<!---end--All peopel can see this section----->

<!---start--Admin section----->
@if(Auth::user()->role_id == 1)
<li class="{{ Request::is('courseUsers*') ? 'active' : '' }}">
    <a href="{{ route('courseUsers.index') }}"><i class="fa fa-edit"></i><span>Abonnement</span></a>  
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Paiements</span></a>
</li>
.
<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>commentaires</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
     <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Liste d Utilisateurs</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Rôles</span></a>
</li>
	
@endif
<!---end--Admin section----->

<!---start--instructor section----->
@if(Auth::user()->role_id == 2)
<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>commentaires</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
     <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Liste d Utilisateurs</span></a>
</li>
@endif
<!---end--instructor section----->
<!---start--student section----->
@if(Auth::user()->role_id == 3)


@endif
<!---end--student section----->