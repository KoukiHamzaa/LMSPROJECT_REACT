@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tp Td
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tpTd, ['route' => ['tpTds.update', $tpTd->id], 'method' => 'patch']) !!}

                        @include('tp_tds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection