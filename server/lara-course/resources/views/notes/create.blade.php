@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1 class="pull-left">Notes</h1>
    </section>
    <div class="content" style="margin-top:50px">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'notes.store']) !!}

                        @include('notes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
