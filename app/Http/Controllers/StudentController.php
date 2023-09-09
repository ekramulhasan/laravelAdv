<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function innerJoin(){

      $data =  DB::table('students')->join('student_infos','students.student_info_id','=','student_infos.id')->select('students.name','student_infos.department')->get();
      return $data;

    }

    public function leftJoin(){

        $data =  DB::table('students')->rightJoin('student_infos','students.student_info_id','=','student_infos.id')->select('students.name','student_infos.department')->get();
        return $data;

      }
}
