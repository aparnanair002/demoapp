<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course(){
        return view('Guest.course');
    }

    public function course_insert(Request $req){
        Course::create([
            'name' => $req->name,
            'description' => $req->description
        ]);
        return back()->with('success', 'Course added successfully!');
    }

    public function course_view(){
        $courses = Course::all();
        return view('Guest.courseview', compact('courses')); // gets $courses from database, redirects to courseview page
    }
    public function course_delete($id){
        $course=Course::find($id);
        if ($course){
            $course->delete();
            return redirect()->route('courseview')->with('success', 'Course deleted successfully!');

        }

    }

    public function course_edit($id){
        $course = Course::findOrFail($id);
        if ($course) {
            return view('Guest.courseedit', compact('course'));
        }
        return redirect()->route('courseview')->with('error', 'Course not found!');
    }

    public function course_update(Request $req,Course $course){

            $course->update([
                'name' => $req->name,
                'description' => $req->description
            ]);
            return redirect()->route('courseview')->with('success', 'Course updated successfully!');
                    }
}
