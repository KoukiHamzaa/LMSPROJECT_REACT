<div class="table-responsive">
    <table class="table" id="tpTds-table">
        <thead>
            <tr>
        <th>Nom du cours</th>
        <th>Type</th>
        <th>Url</th>
        @if(Auth::user()->role_id < 3)
                <th colspan="3">Action</th>
        @endif
            </tr>
        </thead>
        <tbody>
        @foreach($tpTds as $tpTd)
            <tr>
            <h3 class="text-capitalize">--- {{ $tpTd->title }}</h3>
            <td class="text-capitalize font-weight-bold">
                @foreach($courses as $course)
                    @if($tpTd->course_id == $course->id)
                        {{$course->title}}
                    @endif
                @endforeach	  
          </td>
            <td>
            @if($tpTd->tp_td == 0)
                    TP
                @else 
                    TD
                @endif
            </td>
            <td><a href="{{ $tpTd->file }}" target="_blank">{{ $tpTd->file }}</a></td>
            
            
                <td>
                    {!! Form::open(['route' => ['tpTds.destroy', $tpTd->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    @if(Auth::user()->role_id < 3)
                        <a href="{{ route('tpTds.edit', [$tpTd->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
