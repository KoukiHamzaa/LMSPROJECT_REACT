@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <div class="h3 m-5"> <u>Courses Created  User :  {{ Auth::user()->name}}</u></div>
                    @include('courses.table')
                </div>
            </div>
        </div>
    </div>
@endsection
