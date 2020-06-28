<!-- <div class="card-columns"> -->
<div class="card-deck">
    <div class="row">
		@foreach($categories as $category)
			<div class="col-sm-4">
				<div class="card">
						<!-- <img class="card-img-top" src="http://placehold.jp/230x180.png" alt="Card image cap" width="230" height="180"> -->
						<img class="card-img-top" src="{{ $category->categories_photos }}" alt="Card image cap" width="230" height="180">
						
						<div class="card-body">
							<h5 class="card-title">{!! $category->name !!}</h5>
							<p class="card-text">
							{{ \Illuminate\Support\Str::limit($category->description, 150, $end='...') }}
							</p> 
							<ul class="list-group list-group-flush">
									<!-- <li class="list-group-item">{!! $category->view_count !!}</li> -->
									<!-- <small class="text-muted">Views :{{ $category->view_count }}</small> -->
									@if(Auth::user()->role_id < 3)
									<small class="text-muted">Views :{{ $category->view_count }}</small>
									@endif 
							</ul>
						</div>
						
						<div class="card-footer">
							{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
									<!-- <div class='btn-group'> -->
									<div class="btn-toolbar">
									<a href="{{ route('categories.show', [$category->id]) }}" class="btn btn-primary" >Afficher la catégorie</a>
								@if(Auth::user()->role_id < 3)
									<a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
									{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
								@endif 
									</div>
								{!! Form::close() !!}
						</div>
						
				</div>
			</div>    <!-- the end of col sm - 3  -->
		@endforeach
    </div> <!-- the end of row -->
</div>