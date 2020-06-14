@extends('layouts.app')

@section('content')
<div class="col-md-12">
          <ul class="timeline">
			<li class="time-label">
				 <span class="bg-red">
					 {{ $category->created_at->format('d/m/Y') }}
				 </span>
			</li>
            <li>
				  <i class="fa fa-user bg-blue"></i>
				  <div class="timeline-item">
					  <span class="time"><a href="http://127.0.0.1:8000/categories/"> <i class="fa fa-angle-double-left"></i>Go back</a></span>
					  <h3 class="timeline-header">
						<a href="http://127.0.0.1:8000/profile/">
						<strong>Created By: </strong>
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
				<span class="time"><i class="fa fa-eye"></i> viwes :{{ $category->view_count }}</span>
                <h3 class="timeline-header"> Photo uploaded</h3>
					<div class="timeline-body col-md-6">
						<img class="margin" src="{{ $category->categories_photos }}" alt=" "width="230" height="180" >
					</div>
					@include('courses.table_category')	
             </div>
            </li>	
			<p></p>
			<p></p>	
          </ul>
        </div>
@endsection