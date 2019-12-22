@extends('admin.layout.mastar')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

  <!--  <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>-->


   <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$totalstudent}}</span>
                </h4>
                <p class="text-light">Total Registered Student</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart1"></canvas>
                </div>

            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <!--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>-->
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$totalteacher}}</span>
                </h4>
                <p class="text-light">Total Registered Tracher</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$totalrepotedteacher}}</span>
                </h4>
                <p class="text-light"> Teacher Get Reported By Students</p>

            </div>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart3"></canvas>
                </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$banteachercount}}</span>
                </h4>
                <p class="text-light">Teacher is Banned Already.</p>

                <div class="chart-wrapper px-3" style="height:70px;" height="70">
                    <canvas id="widgetChart4"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->
    <div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">BAN Action</th>
            <th scope="col">Undone BAN Action</th>
            <th scope="col">Delete Report</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($repotedteacher as $key => $value)
          <form action="{{url('banteacher')}}" method = "post">
            <input type="hidden" name="teacherid" value="{{$value->teacherid}}">
            <input type="hidden" name="studentid" value="{{$value->studentid}}">
            <input type="hidden" name="reportstatus" value="{{$value->reportstatus}}">
            @csrf
            <tr>
              <th scope="row">#</th>
              <td>{{$value->user_from_name}}</td>
              <td>
                @php
                  $check = DB::table('report')
                  ->where('studentid',$value->studentid)
                  ->where('teacherid',$value->teacherid)
                  ->where('reportstatus',2)
                  ->count();
                @endphp
            @if($check>0)
            <button class="btn btn-warning disabled" disabled>Baned</button>

              @else
                <button type="submit" class="btn btn-warning">BAN Teacher</button>
              @endif
              </td>
              <td>

                @php
                  $check = DB::table('report')
                  ->where('studentid',$value->studentid)
                  ->where('teacherid',$value->teacherid)
                  ->where('reportstatus',1)
                  ->count();
                @endphp
            @if($check>0)
            <button class="btn btn-primary disabled" disabled>Not Baned</button>

              @else
                <button type="submit" class="btn btn-primary">Undone BAN</button>
              @endif

              </td>
              <td>
                <a href="{{url('banteacher?id='.$value->id)}}"><button type="button" class="btn btn-danger">Delete Report</button></a>
              </td>
            </tr>
          </form>
          @endforeach
        </tbody>
        </table>

    </div>



</div> <!-- .content -->
@endsection
