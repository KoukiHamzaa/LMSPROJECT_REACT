<div class="table-responsive">
    <table class="table" id="notes-table">
        <thead>
            <tr>
        <th>Nom d étudiant</th>
        <th>Nom de catégorie</th>
        <th>Note d évaluation</th>
        <th>Nom du cours</th>
        <th>Remarque</th>
        @if(Auth::user()->role_id < 3 )
                <th colspan="3">Action</th>
        @endif
            </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
            <td><h1 class="text-capitalize">{{ $note->title }}</h2><td>
            <tr>
            
            
            <td class="text-capitalize font-weight-bold">
                @foreach($users as $user)
                    @if($note->user_id == $user->id)
                        {{$user->name}}
                    @endif
                @endforeach	  
          </td>
          <td class="text-capitalize text-center font-weight-bold">
                @foreach($categories as $category)
                    @if($note->category_id == $category->id)
                        {{$category->name}}
                    @endif
                @endforeach	  
          </td>
          <td class="text-capitalize font-weight-bold">
                @foreach($courses as $course)
                    @if($note->course_id == $course->id)
                        {{$course->title}}
                    @endif
                @endforeach	  
          </td>
            <td class="text-capitalize text-center font-weight-bold">{{ $note->note }}</td>
            <td class="content">
           <div class="row">
                <div class="col-xs-12">
                    <div class="box-body">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                         Afficher la remarque
                    </button>
                    </div>
                </div>
             </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <?php 
                                    if($note->NB == "")
                                    {  
                                        echo "il n'y a pas de remarque ici ...";
                                    }else
                                    {
                                        echo $note->NB;
                                    }
                                   
                                ?>
                                
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                </div>
            </div>
            </td>
                <td>
                    {!! Form::open(['route' => ['notes.destroy', $note->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    @if(Auth::user()->role_id < 3 )
                        <a href="{{ route('notes.edit', [$note->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>