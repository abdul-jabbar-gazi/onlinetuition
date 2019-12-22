@extends('student.layout.mastar')

@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Current Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key => $value)
        <tr>
          <th scope="row">#</th>
          <td>{{$value->firstName}}</td>
          <td>{{$value->currentStatus}}</td>
          <td>

              @php
                $check = DB::table('teacherstudent')->where('user_form',Auth::Id())->where('user_to',$value->user_id)->count();
              @endphp
          @if($check>0)
          <button class="btn btn-warning disabled" disabled>Request Sent</button>

            @else
              <a href="{{url('sendrequest?id='.$value->user_id)}}"><button class="btn btn-warning">Send Request</button></a>
          @endif
          </td>
      @endforeach
      </tr>
    </tbody>
    </table>

@endsection
