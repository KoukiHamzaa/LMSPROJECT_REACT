<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Category Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>About Instructor</th>
        <th>Discount Price</th>
        <th>Actual Price</th>
        <th>Playlist Url</th>
        <th>View Count</th>
        <th>Subscriber Count</th>
        <th>Status</th>
        <th>Photo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->user_id }}</td>
            <td>{{ $course->category_id }}</td>
            <td>{{ $course->title }}</td>
            <td>{{ $course->description }}</td>
            <td>{{ $course->about_instructor }}</td>
            <td>{{ $course->discount_price }}</td>
            <td>{{ $course->actual_price }}</td>
            <td>{{ $course->playlist_url }}</td>
            <td>{{ $course->view_count }}</td>
            <td>{{ $course->subscriber_count }}</td>
            <td>{{ $course->status }}</td>
            <td>{{ $course->photo }}</td>
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
