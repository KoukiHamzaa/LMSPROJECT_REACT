@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
        Cours
        </h1>
    </section>
    <div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            @include('courses.menu')
                <div class="row" style="padding-left: 20px">
                
					@include('courses.header')

					@if(isset($abonnes) && $abonnes == 'yes')
						@include('courses.abonnes')
					@elseif(isset($items) && $items == 'yes')
						@include('courses.show-item')            
                    @elseif(isset($contents) && $contents == 'yes')
						@include('courses.contents')                	
					@endif
                    @if($paymentCondition == "NotPaid")
                    <div class="d-block">
                    @include('courses.show_fields')
                    @endif
                            <div class="col-md-8 text-left text-bold m-5 h3">Ajouter des commentaires ou des avis</div>
                            @include('comments.table')
                    </div>
				</div>
                </div>
            </div>
        </div>
    </div>
@endsection
