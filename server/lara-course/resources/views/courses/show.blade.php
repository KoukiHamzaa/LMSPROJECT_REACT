@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Cours
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                            @include('courses.show_fields')
<!-- ==================================================================================================================== -->
<ul class="nav nav-pills col-md-12 mt-5" id="pills-tab" role="tablist" >
    @if(Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id)
    <li class="nav-item">
        <a class="nav-link active text-bold" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">commentaires</a>
    </li>
    @endif
    <li class="nav-item">
        <a class="nav-link text-bold" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Les abonnés</a>
    </li>
</ul>
<br>
<div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade in active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            @include('comments.table') 
        </div>
    @if(Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id)
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            @include('users.table-user') 
        </div>
    @endif
</div>
<!-- ==================================================================================================================== -->
                </div>
            </div>
        </div>
    </div>
@endsection
