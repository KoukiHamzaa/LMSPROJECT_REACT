@extends('layouts.app')

@section('content')
<div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                  {{ $category->created_at->format('d/m/Y') }}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-blue"></i>
              <div class="timeline-item">

                <h3 class="timeline-header">
                  <a href="http://127.0.0.1:8000/profile/">
                  <strong>User : </strong>
                  {{ strtoupper(Auth::user()->name) }}</a>
                </h3>

                <div class="timeline-body">
                {{ $category->description }}
                </div>
              </div>
            </li>

            <li>
              <i class="fa fa-camera bg-purple"></i>

              <div class="timeline-item">
              <span class="time"><i class="fa fa-eye"></i> {{ $category->view_count }}</span>


                <h3 class="timeline-header"> Photo uploaded</h3>

                <div class="timeline-body">
                  <img class="margin" src="{{ $category->categories_photos }}" alt=" "width="230" height="180" >
                </div>
              </div>
            </li>
            <li>

          </ul>
        </div>
@endsection
