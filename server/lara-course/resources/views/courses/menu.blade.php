<div class="col-md-12 text-center">
  <ul class="nav nav-pills text-bold">
  @if(Auth::check() && (($paymentCondition == "Paid") || Auth::user()->role_id < 3))
      <li role="presentation" class="active"><a href="{{ route('courses.show', ['id' =>$course->id])}}">Cours</a></li>
      <li role="presentation" class="{{ request()->is('courses/contents*') ? 'bg-info' : '' }}"><a href="{{ route('courses.contents', ['course_id' =>$course->id])}}">Contenu</a></li>
  @endif
  @if(Auth::check() && (Auth::user()->role_id < 3))
          <li role="presentation" class="{{ request()->is('courses/abonnes*') ? 'bg-info' : '' }}"><a href="{{ route('courses.abonnes', ['course_id' =>$course->id])}}">Les abonnés</a></li>
      @endif
  </ul> 
</div>

