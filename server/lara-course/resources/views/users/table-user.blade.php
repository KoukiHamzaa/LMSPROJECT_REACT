<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Genre</th>
                <th>Montant payé</th>
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
                @if(Auth::user()->id == $user->id || Auth::user()->role_id < 3)
                    <td>
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
