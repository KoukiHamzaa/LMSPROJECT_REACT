<!-- <div class="card-columns"> -->
<div class="card-deck" id="courses-table">
    <div class="row">
        @foreach($courses as $course)
				<div class="col-sm-4">
				<div class="card">
						<!-- <img class="card-img-top" src="{!! $course->photo !!}" alt="Card image cap" width="230" height="180"> -->
                        <div class="">
                        <iframe  src="{!! $course->promo_video_url !!}"
                               frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="270" height="180">
                        </iframe>
                        </div>
						<div class="card-body">
							<h5 class="card-title">{!! $course->title !!}</h5>
							<p class="card-text">
							{{ \Illuminate\Support\Str::limit($course->description, 150, $end='...') }}
							</p> 
							<ul class="list-group list-group-flush">
									<small class="text-muted">Views :{{ $course->view_count }}</small>
							</ul>
						</div>
						<div class="card-footer">
						{!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
							 <div class="btn-toolbar">
								<a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-primary" >View Course</a>
								@if(Auth::user()->role_id < 3)
									<a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
									{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
								@endif
							 <div>
								{!! Form::close() !!}
						</div>
				</div>
			</div>    <!-- the end of col sm - 3  -->
		@endforeach
    </div> <!-- the end of row -->
</div>


<!-- <iframe width="230" height="180" src="https://www.youtube.com/embed/CqlsgjnePmg"
 frameborder="0" allow="accelerometer; autoplay;
  encrypted-media; gyroscope; picture-in-picture" 
 allowfullscreen></iframe> -->