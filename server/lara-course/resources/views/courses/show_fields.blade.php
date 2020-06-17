<!-- Title Field -->
<div class="form-group col-xs-12 col-md-6">
    <div class="h1 text-primary text-uppercase"><u>{{ $course->title}}</u></div>
    <div>
        <div class="h3 text-capitalize text-success font-weight-bold ml-5 mt-1 col-md-6">
             {{ $course->sub_title }}
        </div>
        <div class="h5 text-capitalize text-warning font-weight-bold ml-5 mt-1 ml-5 col-md-6">
        -- Subscriber Count : {{ $course->subscriber_count }}
        </div>
    </div>
</div>
<!-- Actual Price Field -->
<div class="form-group col-md-4  ">
    <!-- <div>{!! Form::label('actual_price', 'Price:') !!}</div> -->
    <div class="h2 mb-0 rounded">
        <div class="bg-primary w-50">Price :{{ $course->actual_price -  $course->discount_price}}$</div>
        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
	</div>
		<br>
    <div class="h3 mt-50 mt-0 rounded">
      <div class="bg-warning w-25"><del>{{ $course->actual_price }}$</del></div>
    </div>
    <!-- <p>{{ $course->discount_price }}</p> -->
</div>
<div class="col-md-2">
    <span class="time h6"><a class="text-dark" href="{{ route('courses.index') }}"> <i class="fa fa-angle-double-left"></i>Go back</a></span>
    <br>
    <div class="h3 mt-5 mb-5">
    <a class="text-dark" href="">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Buy Now
    </a>
    </div>

</div>

<!-- User namer Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('user_id', 'Auther:') !!}
    <a href="/users/{!! $course->user['id'] !!}" target="_blank">
        <p class="text-capitalize text-success text-dark  ml-5">
            <i class="fa fa-user" aria-hidden="true"></i>
            {!! $course->user['name'] !!}
        </p>
    </a>
</div>

@if(Auth::user()->role_id < 3)

<!-- View Count Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>
    <i class="fa fa-eye" aria-hidden="true"></i>
    {{ $course->view_count }}
    </p>
</div>
<!-- ======================================== -->
<!-- Creator Status Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    <p>
        @if($course->creator_status == 1)
        published 
            @if(Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id)
        | 
            {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to Unpublish ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment annuler la publication?')"]) !!}
            {!! Form::close() !!}
            @endif
        @else
        Unpublish 
        @if((Auth::check()) && (Auth::user()->role_id < 3 ) && ( Auth::user()->id == $course->user_id ))
        | 
            {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to Publish ', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment publier?')"]) !!}
            {!! Form::close() !!}
            @endif
        @endif
    </p>
</div>

<!-- Admin Status Field -->
<div class="form-group col-md-3 list-group-item disabled">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    <p>
        @if($course->admin_status == 1) 
        Approve 
              @if(Auth::user()->role_id < 2)
        | 
            {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to disapprove ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment refuser? ? ')"]) !!}
            {!! Form::close() !!}
             @endif
        @else
        Disapprove
            @if(Auth::user()->role_id < 2)
        | 
            {!! Form::open(['route' => ['courses.approve', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Click to Approve ', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('êtes-vous sûr de vouloir approuver ? ')"]) !!}
            {!! Form::close() !!}
            @endif
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