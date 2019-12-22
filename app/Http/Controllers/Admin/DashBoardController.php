<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashBoardController extends Controller
{
    public function everythingcheck()
    {
      $totalteacher = DB::Table('users')->where('user_type',1)->count('user_type');
      $totalstudent = DB::Table('users')->where('user_type',2)->count('user_type');


      return view('admin.dashboard',compact('totalteacher','totalstudent'));
    }

    public function banteacher()
    {
      if(isset($_REQUEST['reportstatus']))
      {
        $teacherid = $_REQUEST['teacherid'];
        $studentid = $_REQUEST['studentid'];
        $reportstatus = $_REQUEST['reportstatus'];

        if($reportstatus == 1)
        {
          DB::table('report')
          ->where('teacherid',$teacherid)
          ->where('studentid',$studentid)
          ->update(['reportstatus' => 2]);
             return redirect()->back();
        }
        else if($reportstatus == 2)
        {
          DB::table('report')
          ->where('teacherid',$teacherid)
          ->where('studentid',$studentid)
          ->update(['reportstatus' => 1]);
             return redirect()->back();
        }
      }

      else
      {
        $id = $_REQUEST['id'];
        DB::table('report')
        ->where('id',$id)
        ->delete();
        return redirect()->back();
      }
    }
}
