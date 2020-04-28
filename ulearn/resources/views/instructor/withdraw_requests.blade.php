@extends('layouts.backend.index')
@section('content')

<div class="page-header">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('instructor.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Withdraw Requests</li>
  </ol>
  <h1 class="page-title">Withdraw Requests</h1>
</div>

<div class="page-content">

<div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                
            </div>
        </div>
        
        <div class="panel-body">
          <table class="table table-hover table-striped w-full">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>PayPal ID</th>
                <th>Amount</th>
                <th>Requested On</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($withdraw_requests as $withdraw_request)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $withdraw_request->paypal_id }}</td>
                <td>{{ $withdraw_request->amount }}</td>
                <td>{{ $withdraw_request->created_at->format('d/m/Y h:i A') }}</td>
                <td>{{ $withdraw_request->status ? 'Completed' : 'Pending' }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
          <div class="float-right">
            {{ $withdraw_requests->links() }}
          </div>
          
          
        </div>
      </div>
      <!-- End Panel Basic -->
</div>

@endsection

@section('javascript')
<script type="text/javascript">
$(document).ready(function()
{ 
    $('.approve-request').click(function(event)
    {
        var url = $(this).attr('href');
        event.preventDefault();
        alertify.confirm('Are you sure want to approve this request?', function () {
            window.location.href = url;
        }, function () {    
            return false;
        });
    });
});
</script>
@endsection