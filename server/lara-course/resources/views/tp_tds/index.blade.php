@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">TP TD</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('tpTds.create') }}">Ajouter un nouveau</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            <php
            
            foreach($usercourses as $usercourse){
                if($usercourse->user_id == Auth::user()->id){
                    $paidCourseId = $usercourse->user_id
                }
            }
            ?>
            @if(Auth::user()->id< 3 || Auth::user()->id == $paidCourseId)
                    @include('tp_tds.table')
            @endif
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

