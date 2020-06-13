<!-- Title Field -->
<div class="form-group col-xs-12 col-md-7">
    <div class="h1 text-primary text-uppercase"><u>{{ $course->title}}</u></div>
    <div>
        <div class="h3 text-capitalize text-success font-weight-bold ml-5 mt-1 col-md-6">
             {{ $course->sub_title }}
        </div>
        <div class="h5 text-capitalize text-warning font-weight-bold ml-5 mt-1 ml-5 col-md-6">
        Subscriber Count :{{ $course->subscriber_count }}
        </div>
    </div>
</div>
<!-- Actual Price Field -->
<div class="form-group col-md-4  ">
    <!-- <div>{!! Form::label('actual_price', 'Price:') !!}</div> -->
    <div class="h2 mb-0 rounded">
        <div class="bg-primary w-50">Price :{{ $course->actual_price -  $course->discount_price}}$</div>
	</div>
		<br>
    <div class="h3 mt-50 mt-0 rounded">
      <div class="bg-warning w-25"><del>{{ $course->actual_price }}$</del></div>
    </div>
    <!-- <p>{{ $course->discount_price }}</p> -->
</div>
<div class="col-md-1 h6">
<span class="time"><a href="{{ route('courses.index') }}"> <i class="fa fa-angle-double-left"></i>Go back</a></span>
</div>

<!-- Discount Price Field
<div class="form-group col-md-2 ">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    <p>{{ $course->discount_price }}</p>
</div> -->


<!-- User namer Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('user_id', 'Auther:') !!}
    <p>{!! $course->user['name'] !!}</p>
</div>

@if(Auth::user()->role_id < 3)

<!-- View Count Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $course->view_count }}</p>
</div>
<!-- ======================================== -->
<!-- Creator Status Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    <p>
        @if($course->creator_status == 1)
        published | 
            {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to Unpublish ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment annuler la publication?')"]) !!}
            {!! Form::close() !!}
        @else
        Unpublish | 
            {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to Publish ', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment publier?')"]) !!}
            {!! Form::close() !!}
        @endif
    </p>
</div>

<!-- Admin Status Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    <p>
        @if($course->admin_status == 1) 
        Approve | 
            {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to disapprove ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment refuser? ? ')"]) !!}
            {!! Form::close() !!}
        @else
        Disapprove | 
            {!! Form::open(['route' => ['courses.approve', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to Approve ', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('êtes-vous sûr de vouloir approuver ? ')"]) !!}
            {!! Form::close() !!}
        @endif
        <!-- {{ $course->admin_status }} -->
    </p>
</div>

@endif



<!-- Description Field -->
<div class="form-group col-md-9 list-group-item list-group-item-info">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-3 list-group-item disabled">
<div class="mt-5">
    {!! Form::label('category_id', 'Category name:') !!}
    <a href="/categories/{!! $course->category['id'] !!}" target="_blank"><p class="h4 text-capitalize text-success"><i class="fa fa-link"  font-weight-bold" aria-hidden="true">{{ $course->category['name'] }}</i></p></a>
</div>
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-12 list-group-item list-group-item-info">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Playlist Url Field -->
<div class="form-group col-md-6 list-group-item-warning">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}<br>
    <iframe  src="{{ $course->playlist_url }}" frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="400" height="200"></iframe>
</div>

<!-- Photo Field -->
<div class="form-group col-md-6 list-group-item-warning">
  {!! Form::label('photo', 'Photo:') !!}<br>
    <!--x   <p>{{ $course->photo }}</p> -->
    <!-- <img src="{{ $course->photo }}" class="img-fluid" alt="Responsive image rounded mb-0" width="400" height="200"> -->
    <img src="{{ $course->photo }}" class="card-img-top" alt="Card image cap" width="400" height="200">
</div>

<!-- Tags Field -->
<div class="form-group col-md-8 list-group-item list-group-item-info">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $course->tags }}</p>
</div>

<!-- created time -->
<div class="form-group col-md-4 list-group-item disabled">
<div class="mt-5">
    {!! Form::label('created_at', 'Date de création du cours :') !!}
    <p>{{ $course->created_at->format('h:i a - D d M Y') }}</p>
</div>
</div>

<!-- What Will Student Learn Field -->
<div class="form-group col-md-8 list-group-item list-group-item-info">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    <p>{{ $course->what_will_student_learn }}</p>
</div>

<!-- created time -->
<div class="form-group col-md-4 list-group-item disabled">
    <div class="mt-5">
        {!! Form::label('updated_at', 'dernière mise à jour du cours :') !!}
        <p>{{ $course->updated_at->format('h:i a - D d M Y') }}</p>
    </div>
</div>

<!-- Target Student Field -->
<div class="form-group col-md-12 list-group-item list-group-item-info">
    {!! Form::label('target_student', 'Target Student:') !!}
    <p>{{ $course->target_student }}</p>
</div>

<!-- Requirements Field -->
<div class="form-group col-md-12 list-group-item list-group-item-info">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{{ $course->requirements }}</p>
</div>

<!-- Subscriber Count Field
<div class="form-group col-md-4 list-group-item disabled">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{{ $course->subscriber_count }}</p>
</div> -->