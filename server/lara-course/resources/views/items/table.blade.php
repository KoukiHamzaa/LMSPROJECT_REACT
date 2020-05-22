<div class="table-responsive">
    <table class="table" id="items-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>View Count</th>
        <th>Url</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->user_id }}</td>
            <td>{{ $item->course_id }}</td>
            <td>{{ $item->view_count }}</td>
            <td>{{ $item->url }}</td>
            <td>{{ $item->description }}</td>
                <td>
                    {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('items.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('items.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
