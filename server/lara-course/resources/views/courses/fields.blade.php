<div class="col-md-12">
          <ul class="timeline">
            <!Start-------------------->
            <li class="time-label">
                  <span class="bg-primary">
                  Fill in all the important data please 
                  </span>
            </li>
            <!End-------------------->
            <li class="time-label ">
                  <span class="bg-green ">
                    First Section
                  </span>
            </li>
            <!Start-------------------->
            <li>
              <i class="fa fa-pencil bg-blue"></i>
              <div class="timeline-item">
                <div class="timeline-header text-primary">
                {!! Form::label('user_id', 'User Code:') !!}
                </div>
                        <!-------------------->
                <div class="timeline-body ">
                    <div class="form-group-sm ">
                    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
              </div>
            </li>
            <!End-------------------->
            <!Start-------------------->
            <li>
              <i class="fa fa-pencil bg-aqua"></i>
              <div class="timeline-item">
                <div class="timeline-header text-primary">
                {!! Form::label('category_id', 'Category Code:') !!}
                </div>
                                        <!-------------------->
                <div class="timeline-body ">
                    <div class="from-group-sm ">
                    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
              </div>
            </li>
            <!End-------------------->
            <!Start-------------------->
            <li>
              <i class="fa fa-pencil bg-yellow"></i>
              <div class="timeline-item">

                <div class="timeline-header text-primary">
                {!! Form::label('title', 'Title:') !!}
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
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							{!! Form::label('sub_title', 'Sub Title:') !!}
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
            <li class="time-label">
                  <span class="bg-green">
                    Second Section
                  </span>
            </li>
            <!Start-------------------->
            <li>
                    <!---hiddenitem----->
              <div class="timeline-item invisible">
                <div class="timeline-body">
                  <img src="http://placehold.it/250x1" alt="..." class="margin">
                  <img src="http://placehold.it/250x5" alt="..." class="margin">
                  <img src="http://placehold.it/250x5" alt="..." class="margin">
                </div>
              </div>
            </li>
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
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
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							        {!! Form::label('about_instructor', 'About Instructor:') !!}
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
                    Third Section
                  </span>
            </li>
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('playlist_url', 'Playlist Url:') !!}
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
              <div class="timeline-item ">
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
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
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
                  Fourth  Section
                  </span>
            </li>
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('tags', 'Tags:') !!}
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
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('creator_status', 'Creator Status:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::number('creator_status', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('admin_status', 'Admin Status:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							{!! Form::number('admin_status', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li>  
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
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
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('target_student', 'Target Student:') !!}
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
                  Last  Section
                  </span>
            </li>
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('requirements', 'Requirements:') !!}
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
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('discount_price', 'Discount Price:') !!}
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
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('actual_price', 'Actual Price:') !!}
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
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('view_count', 'View Count:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::number('view_count', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <!End-------------------->
            <!Start-------------------->
            <li>
				<i class="fa fa-pencil bg-maroon"></i>
              <div class="timeline-item ">
					<div class="timeline-header text-primary">
							            {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
					</div>
												<!-------------------->
					<div class="timeline-body">
						  <div class="from-group-sm">
							 {!! Form::number('subscriber_count', null, ['class' => 'form-control']) !!}
						  </div>
					</div>
              </div>
            </li> 
            <li class="time-label">
                  <span class="bg-light">
                  {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                  </span>
            </li>
          </ul>
        </div>