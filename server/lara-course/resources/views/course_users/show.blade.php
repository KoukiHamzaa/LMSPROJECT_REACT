@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Utilisateur du cours
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('course_users.show_fields')
                    <a href="{{ route('courseUsers.index') }}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection
