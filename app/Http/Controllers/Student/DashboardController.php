<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class DashboardController extends Controller
{
  public function searchteacher()
  {

    $location = $_REQUEST['location'];
    $salary = $_REQUEST['salary'];
    $skill = $_REQUEST['skill'];

    $data = DB::table('teacherinfo')
            ->where('permanentAddress',$location)
            ->where('salary','<=',$salary)
            ->where('skill',$skill)
            ->get();
      return view('student.searchresult',compact('data'));
  }



  public function sendrequest()
  {
    $userto = $_REQUEST['id'];
    $userform = Auth::Id();
    DB::table('teacherstudent')
      ->insert(['user_form' => $userform, 'user_to' => $userto, 'status' => 0, 'action_user_id' => $userform]);
       return redirect()->back();
  }

  public function rating()
  {
    $user = Auth::Id();
    $data = DB::table('teacherstudent')->where('user_form',$user)->get();
    foreach ($data as $key => $value) {
      $name = DB::table('users')->where('id',$value->user_to)->first()->name;
      $data[$key]->user_from_name = $name;
    }
    return view('Student.rating',compact('data'));
  }

  public function ratesubmit()
  {
    $teacherid = $_REQUEST['user_to'];
    $studentid = Auth::Id();
    $rate =$_REQUEST['rate'];
    DB::table('rating')
      ->insert(['teacherid' => $teacherid, 'studentid' => $studentid,'rate'=>$rate] );
       return redirect()->back();
  }

  public function report()
  {
    $user = Auth::Id();
    $data = DB::table('teacherstudent')->where('user_form',$user)->get();
    foreach ($data as $key => $value) {
      $name = DB::table('users')->where('id',$value->user_to)->first()->name;
      $data[$key]->user_from_name = $name;
    }
    return view('Student.report',compact('data'));
  }

  public function reportsubmit()
  {
    $teacherid = $_REQUEST['user_to'];
    $studentid = Auth::Id();
    DB::table('report')
      ->insert(['teacherid' => $teacherid, 'studentid' => $studentid,'reportstatus'=>'1'] );
       return redirect()->back();
  }
}
