@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Commentaire
        </h1>
    </section>
    <div class="content ">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="col-md-8">
                    {!! Form::open(['route' => 'comments.store']) !!}

                        @include('comments.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
