<?php

namespace App\Http\Controllers;

Use App\Models\Course;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth:student-api');
    // }
    public function store(Course $course){
       
              
        
        //    $student->courses()->attach([
        //       'student_id' => $student->id,
        //       'course_id' => $course->id,
        //       'status' => \App\Enum\CourseEnrollEnum::ACTIVE    
        // ]);

         $student = auth()->guard('student-api')->user();
         $student->courses()->attach($course->id, [
            'status' => \App\Enum\CourseEnrollEnum::ACTIVE
       ]);
          return response()->json([
            "student name" => $student->firstname,
            "student ID" => $student->id,
            "Course Name" => $course->title,
            "Course ID" => $course->id
          ]);
    
    }


    public function enrolledCourseIndex()
    {
      $student = auth()->guard('student-api')->user();
      $courses = DB::table('course_student')
      ->where('student_id', $student->id)
      ->get();
      $enrolled = [];

      foreach($courses as $course){
      $cd = DB::table('Courses')
            ->where('id', $course->course_id)
            ->get();
        array_push($enrolled, $cd);
      }

     
     return response()->json($enrolled);
    }
      

    

}
