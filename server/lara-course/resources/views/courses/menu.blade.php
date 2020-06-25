<div class="col-md-12 text-center">
  <ul class="nav nav-pills text-bold">
      <li role="presentation" class="bg-light"><a href="{{ route('courses.show', ['id' =>$course->id])}}">Cours</a></li>
      <li role="presentation"><a href="{{ route('courses.contents', ['course_id' =>$course->id])}}">Contenu</a></li>
      <li role="presentation"><a href="#">Commentaires et avis</a></li>
      @if(Auth::check() && ((Auth::user()->id == $course->user_id) || Auth::user()->role_id < 3))
          <li role="presentation"><a href="#">Les abonnés</a></li>
      @endif
  </ul> 
</div>