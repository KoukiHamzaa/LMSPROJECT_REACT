<div class="col-md-8 text-center text-bold m-5 h3"> Le contenu des cours</div>
<div class="col-md-8">
<div class="table-responsive">
    <table class="table" id="items-table">
        <thead>
            <tr>
        <!-- <th>Titre</th> -->
        <th>URL</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($course->items as $item)
            <div class="h3 text-capitalize">-- {{ $item->title}} --</div class="h3 ">
            <tr>
            <td>{{ $item->url }}</td>
            <td>{{ $item->description }}</td>
                <td>
                    <div class='btn-group'>
                    @if(Auth::check() && (Auth::user()->role_id == 1 || Auth::user()->id == $course->user_id))
                        {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                        <a href="{{ route('items.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('items.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr?')"]) !!}
                    @endif
                        <div class='btn btn-default btn-xs mt-5'><i class="fa fa-eye"><br><br>{{ $item->view_count }}</i></div>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            <!------------------------------------------------------------------------------------------------------------->
        @endforeach
        </tbody>
    </table>
    </div>
</div>
