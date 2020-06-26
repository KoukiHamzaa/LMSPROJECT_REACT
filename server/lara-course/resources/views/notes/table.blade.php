<div class="table-responsive">
    <table class="table" id="notes-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>User Id</th>
        <th>Course Id</th>
        <th>Category Id</th>
        <th>Note</th>
        <th>Nb</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
            <tr>
                <td>{{ $note->title }}</td>
            <td>{{ $note->user_id }}</td>
            <td>{{ $note->course_id }}</td>
            <td>{{ $note->category_id }}</td>
            <td>{{ $note->note }}</td>
            <td>{{ $note->NB }}</td>
                <td>
                    {!! Form::open(['route' => ['notes.destroy', $note->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('notes.show', [$note->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('notes.edit', [$note->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
