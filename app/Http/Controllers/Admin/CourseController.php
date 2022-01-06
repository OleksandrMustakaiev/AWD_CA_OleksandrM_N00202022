<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //         'name' => 'required',
        //         'course_code' =>'required|max:500',
        //         'start_date' => 'required|date|after:tomorrow',
        //     ]);
    
            // if validation passes create the new book
            $course = new Course();
            $course->name = $request->input('name');
            $course->course_code = $request->input('course_code');
            $course->cao_points = $request->input('cao_points');
            $course->start_date = $request->input('start_date');
            $course->contact_email = $request->input('contact_email');
            $course->save();

            return redirect()->route('admin.courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.show', [
        'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('admin.courses.edit', [
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        // $request->validate([
        //     'name' => 'required',
        //     'course_code' =>'required|max:500',
        //     'start_date' => 'required|date|after:tomorrow',
        //     'end_date' => 'required|date|after:tomorrow'
        // ]);

        $course->name = $request->input('name');
        $course->course_code = $request->input('course_code');
        $course->cao_points = $request->input('cao_points');
        $course->start_date = $request->input('start_date');
        $course->contact_email = $request->input('contact_email');
        $course->save();

        return redirect()->route('admin.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index');
    }
}
