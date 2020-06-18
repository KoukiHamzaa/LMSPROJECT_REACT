@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Rôle
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('roles.show_fields')
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection
