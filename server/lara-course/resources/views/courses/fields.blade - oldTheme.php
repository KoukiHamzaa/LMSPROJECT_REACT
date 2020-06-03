<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    {!! Form::text('sub_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- About Instructor Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    {!! Form::textarea('about_instructor', null, ['class' => 'form-control']) !!}
</div>

<!-- Playlist Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    {!! Form::text('playlist_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control']) !!}
</div>

<!-- Promo Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    {!! Form::text('promo_video_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>

<!-- Creator Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    {!! Form::number('creator_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    {!! Form::number('admin_status', null, ['class' => 'form-control']) !!}
</div>

<!-- What Will Student Learn Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    {!! Form::textarea('what_will_student_learn', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Student Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('target_student', 'Target Student:') !!}
    {!! Form::textarea('target_student', null, ['class' => 'form-control']) !!}
</div>

<!-- Requirements Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('requirements', 'Requirements:') !!}
    {!! Form::textarea('requirements', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    {!! Form::number('discount_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Actual Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actual_price', 'Actual Price:') !!}
    {!! Form::number('actual_price', null, ['class' => 'form-control']) !!}
</div>

<!-- View Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view_count', 'View Count:') !!}
    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Subscriber Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    {!! Form::number('subscriber_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div>
