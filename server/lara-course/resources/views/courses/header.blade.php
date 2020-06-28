<!-- Title Field -->
<div class="form-group col-xs-12 col-md-6">
    <div class="h1 text-primary text-uppercase"><u>{{ $course->title}}</u></div>
    <div>
        <div class="h3 text-capitalize text-success font-weight-bold ml-5 mt-1 col-md-5">
             {{ $course->sub_title }}
        </div>
        <div class="h5 text-capitalize text-warning font-weight-bold ml-5 mt-1 ml-5 col-md-6">
        -- Nombre d'abonnés : {{ $course->subscriber_count }}
        </div>
    </div>
</div>

@if(Auth::user()->role_id < 3 || $paymentCondition == "NotPaid")
<!-- Actual Price Field -->
<div class="form-group col-md-3  ">
    <!-- <div>{!! Form::label('actual_price', 'Price:') !!}</div> -->
    <div class="h2 mb-0 rounded">
        <div class="bg-primary w-50">Prix :{{ $course->actual_price -  $course->discount_price}}Dt</div>
        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
	</div>
		<br>
    <div class="h3 mt-50 mt-0 rounded">
      <div class="bg-warning w-25"><del>{{ $course->actual_price }}Dt</del></div>
    </div>
    <!-- <p>{{ $course->discount_price }}</p> -->
</div>
@endif

<!--start-- buy courses -->
<div class="col-md-2">
    <span class="time h5 ml-5 font-weight-bold"><a class="text-dark" href="{{ route('courses.index') }}"> <i class="fa fa-angle-double-left"></i>Retourner</a></span>
    <br>
    <div class="h3 mt-5 mb-5">
    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
			  <div class="col-md-8 col-md-offset-2">
					@if(Auth::check())
						<input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
					@else
						<input class="form-control" type="email" placeholder="entrez votre email valide" name="email" value="" required="required"> {{-- required --}}
					@endif
					<input type="hidden" name="orderID" value="{{$course->id}}">
					<input type="hidden" name="amount" value="{{ $course->actual_price  - $course->discount_price }}"> {{-- required in kobo --}}
					<input type="hidden" name="quantity" value="1">
					<input type="hidden" name="currency" value="DT">
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['course_id' => $course->id,'custmer_email' => $course->user['email'],'category_id' =>$course->category_id,]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
					{{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

					 <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
					 
                    @if($paymentCondition == "NotPaid")
					<p>
                            <button class="h3 mt-2 mr-5" type="submit" value="Pay Now!" style="background-color:transparent;border: none;width:150px">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Acheter maintenant
                            </button>
                            @if($course->discount_price  > 0 ) 
                            <div class="text-dark" style="font-size: 9px;margin: 0;display: inline-block;">Garantie remboursement-24-h<br>{{ $course->actual_price -  $course->discount_price }}$</div>
                                @else
                            <div class="text-dark pt-0 mr-5" style="font-size: 9px;margin: 0;display: inline-block;">Garantie remboursement-24-h<br>{{ $course->actual_price }}$</div>
                            @endif
					</p>
                    @endif
			  </div>
        </div>
	</form>
    </div>
</div>
<!--end-- buy courses -->
<!-- User namer Field -->
@if(Auth::user()->role_id < 3)
<div class="form-group col-md-4 list-group-item disabled">
    {!! Form::label('user_id', 'Auther:') !!}
    <a href="/users/{!! $course->user['id'] !!}" target="_blank">
        <p class="text-capitalize text-success text-dark  ml-5">
            <i class="fa fa-user" aria-hidden="true"></i>
            {!! $course->user['name'] !!}
        </p>
    </a>
</div>
@else
<div class="form-group col-md-4">
    <a href="/users/{!! $course->user['id'] !!}" target="_blank">
        <p class="text-capitalize text-success text-dark">
        {!! Form::label('user_id', 'Auther:') !!}
            <i class="fa fa-user ml-2" aria-hidden="true"></i>
            {!! $course->user['name'] !!}
        </p>
    </a>
</div>
@endif

@if(Auth::user()->role_id < 3)
<!-- Creator Status Field -->
@if(Auth::user()->role_id < 3)
<div class="form-group col-md-4 list-group-item disabled">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    <p>
        @if($course->creator_status == 1)
        Publier 
            @if(Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id)
        | 
            {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Cliquer pour Supprimer ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment annuler la publication?')"]) !!}
            {!! Form::close() !!}
            @endif
        @else
        Supprimer 
        @if((Auth::check()) && (Auth::user()->role_id < 3 ) && ( Auth::user()->id == $course->user_id ))
        | 
            {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Cliquer pour Publier ', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment publier?')"]) !!}
            {!! Form::close() !!}
            @endif
        @endif
    </p>
</div>

<!-- Admin Status Field -->
<div class="form-group col-md-4 list-group-item disabled">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    <p>
        @if($course->admin_status == 1) 
        Approuver 
              @if(Auth::user()->role_id < 2)
        | 
            {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>  Cliquez pour refuser ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment refuser? ? ')"]) !!}
            {!! Form::close() !!}
             @endif
        @else
        Disapprove
            @if(Auth::user()->role_id < 2)
        | 
            {!! Form::open(['route' => ['courses.approve', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value="{{$course->id}}" />
            {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>   Cliquez pour  Approuver ', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('êtes-vous sûr de vouloir approuver ? ')"]) !!}
            {!! Form::close() !!}
            @endif
        @endif
        <!-- {{ $course->admin_status }} -->
    </p>
</div>
@endif
@endif
