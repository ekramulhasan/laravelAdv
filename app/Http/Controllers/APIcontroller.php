<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class APIcontroller extends Controller
{

    public function firstAIP(){

        $make_api = [

            [

            'name' => 'ekramul',
            'phone' => '01677124239',
            'address' => 'mirpur-1',

            ],

            [

                'name' => 'shawon',
                'phone' => '01677124240',
                'address' => 'mirpur-2',

            ],

            [

                'name' => 'raiyan',
                'phone' => '01677124241',
                'address' => 'mirpur-10',

            ],

        ];

      return response()->json($make_api);

    }

    public function student_api(){

        $student_data = Student::all();
        return $student_data;

    }


    public function student_api_withPeremiter($id=null){

        if ($id) {
            $student_data = Student::find($id);
        }
        else{
            $student_data = Student::all();
        }


        return $student_data;

    }


    public function storeStudent(Request $request){

     $result =   Student::updateOrCreate([

            'student_info_id' => $request->student_info_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address

        ]);

        if ($result) {

            return "successfully data save!";
        }
        else {

            return "fail data save!";

        }
    }



    public function updateStudent(Request $request){

            // $result =   Student::updateOrCreate([

            //        'student_info_id' => $request->student_info_id,
            //        'name' => $request->name,
            //        'phone' => $request->phone,
            //        'address' => $request->address

            //    ]);

            $data = Student::find($request->id);

          $result =  $data->update([

                'student_info_id' => $request->student_info_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address

            ]);

               if ($result) {

                   return "successfully data update!";
               }
               else {

                   return "fail data save!";

               }

    }


}
