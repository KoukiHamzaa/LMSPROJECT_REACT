<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Paid Amount</th>
                        <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($course->users as $user)
            <tr>
                <td>{{ $user->name }}</td>

                <td><a class="text-secondary font-weight-bold text-capitalize" href="mailto:{{$user->id}}"> {{ $user->email }}</a></td>
                <td>{{ $user->gender }}</td>
                <td>${!! $user->pivot->paid_amount !!}</td>
            
                    <td>
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
