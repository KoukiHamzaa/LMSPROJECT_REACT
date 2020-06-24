<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Genre</th>
                <th>Est abonné?</th>
                <th>Email</th>
                <th>Nombre de vues</th>
                <th>Rôle</th>
                        <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->gender }}</td>
                @if(($user->isSubscribed == 1) && ($user->role_id != 1))
                     <td>Abonne</td>
                @elseif(($user->isSubscribed != 1) && ($user->role_id != 1))
                     <td>Non Abonne</td>
                @else
                    <td>-</td>
                @endif
                <td><a class="text-secondary font-weight-bold text-capitalize" href="mailto:{{$user->email}}"> {{ $user->email }}</a></td>
               @if($user->role_id != 1)
                     <td>{{ $user->view_count }}</td>
                @else
                     <td>-</td>
                @endif
                <td>{{ $user->role['name'] }}</td>
                @if(Auth::user()->id == $user->id || Auth::user()->role_id == 1)
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
