@extends('student.layout.mastar')

@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key => $value)
      <form action="{{url('reportdone')}}" method = "post">
        <input type="hidden" name="user_to" value="{{$value->user_to}}">
        @csrf
        <tr>
          <th scope="row">#</th>
          <td>{{$value->user_from_name}}</td>
          <td>
            @php
              $check = DB::table('report')->where('studentid',Auth::Id())->where('teacherid',$value->user_to)->count();
            @endphp
        @if($check>0)
        <button class="btn btn-warning disabled" disabled>Reported</button>

          @else
            <button type="submit" class="btn btn-danger">Report</button></td>
        @endif
        </tr>
      </form>
      @endforeach
    </tbody>
    </table>


@endsection
