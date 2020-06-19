<div class="col-md-12">
          <ul class="timeline">
            <!Start-------------------->
            <li class="time-label">
                  <span class="bg-primary">
                  Remplissez toutes les données importantes s'il vous plaît
                  </span>
            </li>
            <!End-------------------->
            <li class="time-label ">
                  <span class="bg-green ">
                  Première Partie
                  </span>
            </li>
            <!Start-------------------->
            <li>
              <i class="fa fa-pencil bg-yellow"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8">
              <span class="time"><a href="http://127.0.0.1:8000/courses/"> <i class="fa fa-angle-double-left"></i>Retourner</a></span>
                <div class="timeline-header text-primary">
                {!! Form::label('title', 'Titre:') !!}
                </div>
                                        <!-------------------->
                <div class="timeline-body">
                    <div class="from-group-sm ">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
              </div>
            </li>
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-purple"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							{!! Form::label('sub_title', 'Sous-titre:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::text('sub_title', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <li>
                    <i class="fa fa-pencil bg-maroon"></i>
                          <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 col-xs-12 col-sm-6 col-lg-8">
                            <div class="timeline-header text-primary">
                             <label for="category_id">Nom de catégorie</label>
                            </div>

                            <div class="timeline-body">
                                <div class="from-group-sm">
                                  <select	class="browser-default custom-select font-weight-bold" name="category_id" id="category_id">
                                     @if(isset($course))
                                    <option  class="font-weight-bold" value="{{ $course->category['id'] }}" > {{ $course->category['name'] }} </option>
                                      @endif
                                      @foreach($categories as $category)
                                    <option class="font-weight-bold" value="{{$category->id}}"> {{$category->name}} </option>
                                      @endforeach
                                  </select>
                                </div>
                            </div>
                         </div>
            </li>  
            <!End-------------------->
            <li class="time-label">
                  <span class="bg-green">
                  Deuxième Partie
                  </span>
            </li>
            <!Start-------------------->
            <li>
                    <!---hiddenitem----->
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 invisible">
                <div class="timeline-body">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                  <img src="http://placehold.it/100x1" alt="..." class="">
                </div>
              </div>
            </li>
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							    {!! Form::label('description', 'Description:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							        {!! Form::label('about_instructor', 'à propos de l instructeur:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::textarea('about_instructor', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <li class="time-label">
                  <span class="bg-green">
                  Troisième Partie
                  </span>
            </li>
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('playlist_url', 'URL de la playlist:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::text('playlist_url', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('photo', 'Photo:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::text('photo', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('promo_video_url', 'URL de la vidéo promotionnelle:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::text('promo_video_url', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>
            <!End-------------------->
            <li class="time-label">
                  <span class="bg-green">
                  Quatrième Partie
                  </span>
            </li>
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('tags', 'Mots clés:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::text('tags', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('what_will_student_learn', 'Qu est-ce que l élève apprendra:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::textarea('what_will_student_learn', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('target_student', 'Étudiant cible:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::textarea('target_student', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <!End-------------------->
            <li class="time-label">
                  <span class="bg-green">
                  Dernière Partie
                  </span>
            </li>
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('requirements', 'Exigences:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::textarea('requirements', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <!End-------------------->
            <!Start-------------------->
@if(Auth::check() AND Auth::user()->role_id < 3)
            <li>
                    <i class="fa fa-pencil bg-maroon"></i>
                          <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 col-xs-12 col-sm-6 col-lg-8">
                            <div class="timeline-header text-primary">
                                          <label for="admin_status">Statut d'administrateur:</label>
                            </div>
                                        <!-------------------->
                            <div class="timeline-body">
                                <div class="from-group-sm">
                                  <select	class="browser-default custom-select font-weight-bold"  name="admin_status" id="admin_status">
                                             @if(isset($course))
                                          <option class="font-weight-bold" value="{{ $course->admin_status }}">
                                              @if( $course->admin_status == 1) on
                                              @else off
                                              @endif   
                                         </option>
                                              @endif
                                        <option value="0" > Off </option>
                                        <option value="1" > On </option>
                                  </select>
                                </div>
                            </div>
                         </div>
            </li>  
@endif
          <!End-------------------->
          <!Start-------------------->
            <li>
                    <i class="fa fa-pencil bg-maroon"></i>
                          <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 col-xs-12 col-sm-6 col-lg-8">
                            <div class="timeline-header text-primary">
                                          <label for="creator_status">Statut du créateur de cours:</label>
                            </div>
                                        <!-------------------->
                            <div class="timeline-body">
                                <div class="from-group-sm">
                                  <select	class="browser-default custom-select font-weight-bold"  name="creator_status" id="creator_status">
                                          @if(isset($course))
                                          <option class="font-weight-bold" value="{{ $course->creator_status }}">
                                            @if(isset($course) AND $course->creator_status == 1)  on
                                            @else  off 
                                            @endif  
                                          </option>
                                            @endif
                                            <option value="0" > Off </option>
                                            <option value="1" > On </option>
                                  </select>
                                </div>
                            </div>
                         </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('discount_price', 'Prix bas:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::number('discount_price', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item col-xs-12 col-sm-6 col-lg-8 ">
					<div class="timeline-header text-primary">
							            {!! Form::label('actual_price', 'Prix actuel:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::number('actual_price', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <!End-------------------->
            <li class="time-label">
                  <span class="bg-light">
                  {!! Form::submit('Enregistrer', ['class' => 'btn btn-danger']) !!}
                  </span>
            </li>
          </ul>
        </div>