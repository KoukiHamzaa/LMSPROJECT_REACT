<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>Identifiant d'utilisateur</th>
        <th>Identifiant du cours</th>
        <th>Identifiant de catégorie</th>
        <th>Montant</th>
        <th>Statut</th>
        <th>Moyen de paiement</th>
        <th>Processeur de paiement</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->user_id }}</td>
            <td>{{ $payment->course_id }}</td>
            <td>{{ $payment->category_id }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->status }}</td>
            <td>{{ $payment->mode_of_payment }}</td>
            <td>{{ $payment->payment_processor }}</td>
                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
