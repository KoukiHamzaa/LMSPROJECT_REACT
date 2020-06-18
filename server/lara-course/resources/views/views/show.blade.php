@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Vue
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('views.show_fields')
                    <a href="{{ route('views.index') }}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection
