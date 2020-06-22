@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Utilisateur 
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
<!-- ========================================================================= -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Abonnements</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cours créés par {{ $user->name }}</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">@include('courses.table')</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">@include('courses.table')</div>
    </div>
<!-- ========================================================================= -->
            </div>
        </div>
    </div>
@endsection
