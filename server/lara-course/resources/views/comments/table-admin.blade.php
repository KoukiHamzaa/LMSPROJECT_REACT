<div class="table-responsive">
    <table class="table" id="comments-table">
        <tbody>
        @foreach($course->comments as $comment)
        <div class="h4"> comments by <a href="/users/{{ $comment->user['id']}}">{{ $comment->user['name']}}</a> -- comments creatd at {{$comment->created_at->format('h:i a - D d M Y')}}</div>
            <tr>
            <td>{{ $comment->body }}</td>
            @if(Auth::check() AND ( Auth::user()->id == $comment->user_id || Auth::user()->role_id < 3 ) )
                <td>
                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comments.show', [$comment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('comments.edit', [$comment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
