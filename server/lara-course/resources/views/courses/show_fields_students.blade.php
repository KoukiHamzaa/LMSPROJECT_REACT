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
    <div class="h3 mt-5">
    <a class="text-dark" href="">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Buy Now
    </a>
    </div>

</div>

<!-- User namer Field -->
<div class="form-group col-md-6 list-group-item disabled">
    {!! Form::label('user_id', 'Auther:') !!}
    <a href="/users/{!! $course->user['id'] !!}" target="_blank">
        <p class="text-capitalize text-success text-dark  ml-5">
            <i class="fa fa-user" aria-hidden="true"></i>
            {!! $course->user['name'] !!}
        </p>
    </a>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-6 list-group-item disabled">
<div class="mt-5">
    {!! Form::label('category_id', 'Category name:') !!}
    <a href="/categories/{!! $course->category['id'] !!}" target="_blank"><p class="h4 text-capitalize text-success"><i class="fa fa-link"  font-weight-bold" aria-hidden="true">{{ $course->category['name'] }}</i></p></a>
</div>
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

<!-- Playlist Url Field -->
<div class="form-group col-md-6 list-group-item-warning">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}<br>
    <iframe  src="{{ $course->playlist_url }}" frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="400" height="200"></iframe>
</div>

<!-- Photo Field -->
<div class="form-group col-md-6 list-group-item-warning">
  {!! Form::label('photo', 'Photo:') !!}<br>
    <img src="{{ $course->photo }}" class="card-img-top" alt="Card image cap" width="400" height="200">
</div>

<!-- created time -->
<div class="form-group col-md-4 list-group-item disabled">
<div class="mt-5">
    {!! Form::label('created_at', 'Date de création du cours :') !!}
    <p>{{ $course->created_at->format('h:i a - D d M Y') }}</p>
</div>
</div>

<!-- created time -->
<div class="form-group col-md-4 list-group-item disabled">
    <div class="mt-5">
        {!! Form::label('updated_at', 'dernière mise à jour du cours :') !!}
        <p>{{ $course->updated_at->format('h:i a - D d M Y') }}</p>
    </div>
</div>
<br>
<div class="col-md-">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Description</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">About Instructor</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Tags</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">What Will Student Learn</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Target Student</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Requirements</a>
</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">{{ $course->description }}</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">{{ $course->about_instructor }}</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">{{ $course->tags }}</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">{{ $course->what_will_student_learn }}</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">{{ $course->target_student }}</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">{{ $course->requirements }}</div>
</div>
</div>
<br>