<div class="table-responsive">
    <table class="table" id="courseUsers-table">
        <thead>
            <tr>
                <th>Identifiant</th>
        <th>Identifiant de cours</th>
        <th>Identifiant de catégorie</th>
        <th>Identifiant du compte utilisateur</th>
        <th>La date de paiement</th>
        <th>Date d'expiration</th>
        <th>Plan</th>
        <th>Montant payé</th>
        <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseUsers as $courseUser)
            <tr>
                <td>{{ $courseUser->user_id }}</td>
            <td>{{ $courseUser->course_id }}</td>
            <td>{{ $courseUser->category_id }}</td>
            <td>{{ $courseUser->user_account_id }}</td>
            <td>{{ $courseUser->paid_date }}</td>
            <td>{{ $courseUser->expiry_date }}</td>
            <td>{{ $courseUser->plan }}</td>
            <td>{{ $courseUser->paid_amount }}</td>
            <td>{{ $courseUser->status }}</td>
                <td>
                    {!! Form::open(['route' => ['courseUsers.destroy', $courseUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courseUsers.show', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courseUsers.edit', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
