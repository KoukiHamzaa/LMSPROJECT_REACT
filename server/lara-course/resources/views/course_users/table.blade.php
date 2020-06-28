<div class="table-responsive">
    <table class="table" id="courseUsers-table">
        <thead>
        <tr>
        <th>Nom d Etudiant </th>
        <th>Nom du cours</th>
        <th>Nom de catégorie</th>
        <th>Montant payé</th>
        <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseUsers as $courseUser)
            @foreach($courses as $course)
            <tr>
            <td class="text-capitalize font-weight-bold">
            <?php 
            foreach($users as $user){

               // $courseName ="-";
                if($user->id == $courseUser->user_id){
                    $userName = $user->name;
                }
                
            }
            echo $userName;
            ?>
            </td>
            <td class="text-capitalize font-weight-bold">
                @if($course->id == $courseUser->course_id)
                    <a href="{{ route('users.show', [$course->id]) }}">{{$$course->name}}</a>
                @endif
            @endforeach
            </td>

            <td class="text-capitalize font-weight-bold">
            <?php 
            foreach($categories as $category){

               // $courseName ="-";
                if($category->id == $courseUser->category_id){
                    $categoryName = $category->name;
                }
                
            }
            echo $categoryName;
            ?>
            </td>
            <td class="font-weight-bold"><u>{{ $courseUser->paid_amount }} DT</u></td>
            <td class="font-weight-bold">
                @if($courseUser->status == 0)
                    Activé
                @else 
                    Désactivé
                @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['courseUsers.destroy', $courseUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$courseUser->user_id]) }}" class='btn btn-default btn-xs' target="_blank" data-toggle="tooltip" data-placement="top" title="Profil utilisateur?"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courseUsers.edit', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
          @endforeach
        @endforeach
        </tbody>
    </table>
</div>
