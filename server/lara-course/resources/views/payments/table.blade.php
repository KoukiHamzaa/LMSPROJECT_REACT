<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
        <tr>
        <th>Nom d Etudiant </th>
        <th>Nom du cours</th>
        <th>Nom de catégorie</th>
        <th>Montant payé</th>
        <th>Opération?</th>
        <th>Moyen de paiement</th>
        <th>Processeur de paiement</th>
        <th>Date de paiement</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td class="text-capitalize font-weight-bold">
                    <?php 
                foreach($users as $user){

                // $courseName ="-";
                    if($user->id == $payment->user_id){
                        $userName = $user->name;
                    }
                    
                }
                echo $userName;
                ?>
                    </td>
            <td class="text-capitalize font-weight-bold">
                <?php 
                foreach($courses as $course){

                // $courseName ="-";
                    if($course->id == $payment->course_id){
                        $courseName = $course->title;
                    }
                    
                }
                echo $courseName;
                ?>
            </td>
            <td class="text-center text-capitalize font-weight-bold">
                <?php 
                foreach($categories as $category){
                // $courseName ="-";
                    if($category->id == $payment->category_id){
                        $categoryName = $category->name;
                    }
                }
                echo $categoryName;
                ?>
            </td>
            <td class="font-weight-bold" ><u>{{ $payment->amount }}</u>Dt</td>
            <td class="text-center text-capitalize">{{ $payment->status }}</td>
            <td class="text-center text-capitalize">{{ $payment->mode_of_payment }}</td>
            <td class="text-center text-capitalize">{{ $payment->payment_processor }}</td>
            <td>{{ $payment->created_at}}</td>
                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$payment->course_id]) }}" class='btn btn-default btn-xs' target="_blank" data-toggle="tooltip" data-placement="top" title="aller au cours?"><i class="glyphicon glyphicon-eye-open"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>