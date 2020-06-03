{{--Admin:1, moderator:2, instructors:3 also students:4 !! --}}

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Courses Categories</span></a>
            <!-- we change this item from Categories  to Courses -->
</li>

{{-- <li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>My Courses</span></a>
        <!-- we change this item from Courses to My Courses -->
</li> --}}



<li class="{{ Request::is('courseUsers*') ? 'active' : '' }}">
    <a href="{{ route('courseUsers.index') }}"><i class="fa fa-edit"></i><span>Subscription</span></a>  
    <!-- we change this item from Course Users to Subscription -->
</li>

{{-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- moderator -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --}}
@if(Auth::user()->role_id < 4)
<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>My Courses</span></a>
</li>
@endif

{{-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- Admin Section -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --}}

@if(Auth::user()->role_id < 3)

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Items</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('views*') ? 'active' : '' }}">
    <a href="{{ route('views.index') }}"><i class="fa fa-edit"></i><span>Views</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endif


