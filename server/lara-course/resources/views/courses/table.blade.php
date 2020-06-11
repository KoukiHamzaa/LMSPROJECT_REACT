<!-- <div class="card-columns"> -->
<div class="card-deck">
    <div class="row">
	@foreach($courses as $course)
			<div class="col-sm-4">
				<div class="card">
						<iframe  src="{!! $course->promo_video_url !!}"
                               frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen >
                        </iframe>
						
						<div class="card-body">
							<h2 class="card-title text-primary font-weight-bold text-capitalize">{!! $course->title !!}</h2>
							<p class="card-text">
							{{ \Illuminate\Support\Str::limit($course->description, 150, $end='...') }}
							</p> 
							<h4 class="text-success font-weight-bold text-capitalize ">Course Created by <u>{!! $course->user['name'] !!}</u></h4>
							<p class="text-muted font-weight-bold text-capitalize">Subscriber in this Course : {!!number_format($course->subscriber_count)!!} Student</p>

							<h3 class="text-secondary font-weight-normal text-capitalize">price {!! $course->actual_price !!} $ </h3>
							<h4 class="text-info font-weight-light text-capitalize">discount price {!! $course->discount_price !!} $ </h4>
							@if(Auth::user()->role_id < 3)
							<ul class="list-group list-group-flush">
									<small class="text-muted">Views :{{ $course->id }}</small>
							</ul>
							@endif
						</div>
						
						<div class="card-footer">
							{!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
									<!-- <div class='btn-group'> -->
									<div class="btn-toolbar">
									@if(Auth::user()->role_id < 3)
									<a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-primary" >View Course</a>
									@else
									<a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-primary" >Join Course</a>
									@endif 
								@if(Auth::user()->role_id < 3)
									<a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
									{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
								@endif 
									</div>
								{!! Form::close() !!}
						</div>
						
				</div>
			</div>    <!-- the end of col sm - 3  -->
		@endforeach
    </div> <!-- the end of row -->
</div>