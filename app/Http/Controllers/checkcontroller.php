<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class checkcontroller extends Controller
{
    public function CheckUser()
  {

    $id = Auth::Id();

    $data = DB::table('users')
        ->where('id',$id)
        ->first();

    if($data->user_type == 2)
    {
      return view('student.dashboard');
    }
    else if($data->user_type == 1)
    {
      $user = Auth::Id();
      $checkban = DB::Table('report')
                  ->where('teacherid',$user)
                  ->where('reportstatus','2')
                  ->count('reportstatus');

        if($checkban == 0)
        {
          return view('teacher.dashboard');
        }
        else
        {
          return view('teacher.ban');
        }

    }
    else if($data->user_type == 3)
    {
      $totalteacher = DB::Table('users')->where('user_type',"1")->count('user_type');
      $totalstudent = DB::Table('users')->where('user_type',"2")->count('user_type');
      $totalrepotedteacher = DB::Table('report')->count('teacherid');
      $repotedteacher = DB::Table('report')->get();
      $banteachercount = DB::Table('report')->where('reportstatus',"2")->count('teacherid');


      foreach ($repotedteacher as $key => $value) {
        $name = DB::table('users')->where('id',$value->teacherid)->first()->name;
        $repotedteacher[$key]->user_from_name = $name;

      }

      return view('admin.dashboard',compact('totalteacher','totalstudent','repotedteacher','totalrepotedteacher','banteachercount'));
    }
  }
}
