<div class="table-responsive">
    <table class="table" id="coupons-table">
        <thead>
            <tr>
                <th>Identifiant d'utilisateur</th>
        <th>Identifiant du cours</th>
        <th>Identifiant étudiant</th>
        <th>Identifiant de catégorie</th>
        <th>Identifiant du compte utilisateur</th>
        <th>Disponible sur la page du cours</th>
        <th>Type</th>
        <th>Prix</th>
        <th>Statut</th>
        <th>Date limite</th>
        <th>Count Timer</th>
        <th>Total disponible</th>
        <th>Total restant</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($coupons as $coupon)
            <tr>
                <td>{{ $coupon->user_id }}</td>
            <td>{{ $coupon->course_id }}</td>
            <td>{{ $coupon->student_id }}</td>
            <td>{{ $coupon->category_id }}</td>
            <td>{{ $coupon->user_account_id }}</td>
            <td>{{ $coupon->available_on_course_page }}</td>
            <td>{{ $coupon->type }}</td>
            <td>{{ $coupon->price }}</td>
            <td>{{ $coupon->status }}</td>
            <td>{{ $coupon->deadline }}</td>
            <td>{{ $coupon->count_timer }}</td>
            <td>{{ $coupon->total_available }}</td>
            <td>{{ $coupon->total_remaining }}</td>
                <td>
                    {!! Form::open(['route' => ['coupons.destroy', $coupon->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('coupons.show', [$coupon->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('coupons.edit', [$coupon->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
