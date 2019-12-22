<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Auth;

class DashboardController extends Controller
{
    public function inbox()
    {
      return view('teacher.pages.inbox');
    }

    public function performance()
    {
      return view('teacher.pages.performance');
    }

    public function academic()
    {
      return view('teacher.pages.academic');
    }

    public function profileedit()
    {
      return view('teacher.pages.profile');
    }

    public function checkratings()
    {
      $currentuser = Auth::Id();
      $data = DB::Table('teacherstudent')->where('user_to',$currentuser)->count('user_form');
      $data1 = DB::Table('rating')->where('teacherid',$currentuser)->sum('rate');
      $data3 = DB::Table('rating')->where('teacherid',$currentuser)->count('studentid');
      $data4 = '';
      if($data3 == 0)
      {
        $data2 = 'No One Rated You Yet';
      }
      else
      {
        $data2 = $data1/$data3;
        if($data2 == 4)
        {
          $data4 = 'Great';
        }
        else if($data2 == 3)
        {
          $data4 = 'nice';
        }
        else if($data2 == 2)
        {
          $data4 = 'Average';
        }
        else if($data2 == 1)
        {
          $data4 = 'Below Average';
        }
        else {
          {
            $data4 = 'You Have No Rating yet.';
          }
      }

      }

      return view('teacher.pages.checkratings',compact('data','data2','data3','data4'));
    }

    public function profilesave()
    {

      $id = Auth::Id();

			$firstName = $_REQUEST['firstName'];
			$lastName = $_REQUEST['lastName'];
			$permanentAddress = $_REQUEST['permanentAddress'];
			$currentStatus = $_REQUEST['currentStatus'];
			$gender = $_REQUEST['gender'];
			$religion = $_REQUEST['religion'];
			$maritalStatus = $_REQUEST['maritalStatus'];
			$dateOfBirth = $_REQUEST['dateOfBirth'];
      $salary = $_REQUEST['salary'];
      $skill = $_REQUEST['skill'];
      DB::table('teacherinfo')
      ->insert(['firstName' => $firstName, 'lastName' => $lastName,
       'permanentAddress' => $permanentAddress, 'currentStatus' =>$currentStatus , 'gender' => $gender,
       'religion' => $religion, 'maritalStatus' => $maritalStatus, 'dateOfBirth' => $dateOfBirth, 'user_id' => $id,'salary' => $salary,'skill' => $skill]);


       return redirect()->back();

    }

    public function pendingrequest()
    {

      $data2 = DB::Table('teacherstudent')
      ->get()
      ->where('user_to',Auth::Id())
      ->where('status',0);
      //$data2[0]->demo = 6;
      //dd($data2[0]);

      foreach ($data2 as $key => $value) {
        $name = DB::table('users')->where('id',$value->user_form)->first()->name;
        $data2[$key]->user_from_name = $name;
      }
      return view('teacher.pages.inbox',compact('data2'));
    }

    public function acceptrequest()
    {
      $id = $_REQUEST['id'];
      DB::table('teacherstudent')
      ->where('id',$id)
      ->update(['status' => 1]);
         return redirect()->back();
    }
}
