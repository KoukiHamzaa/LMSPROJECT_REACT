@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                @if( Auth::user()->role_id < 3 )
                    @include('courses.show_fields')
                @else  
                    @include('courses.show_fields_students')
                @endif 
                    <br>
                    @include('users.table') 
                </div>
            </div>
        </div>
    </div>
@endsection
