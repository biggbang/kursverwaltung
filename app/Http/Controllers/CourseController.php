<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Http\Requests\Courses\Index;
use App\Http\Requests\Courses\Show;
use App\Http\Requests\Courses\Create;
use App\Http\Requests\Courses\Store;
use App\Http\Requests\Courses\Edit;
use App\Http\Requests\Courses\Update;
use App\Http\Requests\Courses\Destroy;


/**
 * Description of CourseController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class CourseController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.courses.index', ['records' => Course::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Course $course)
    {
        return view('pages.courses.show', [
                'record' =>$course,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.courses.create', [
            'model' => new Course,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Course;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Course saved successfully');
            return redirect()->route('courses.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Course');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Course $course)
    {

        return view('pages.courses.edit', [
            'model' => $course,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Course $course)
    {
        $course->fill($request->all());

        if ($course->save()) {
            
            session()->flash('app_message', 'Course successfully updated');
            return redirect()->route('courses.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Course');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Course $course)
    {
        if ($course->delete()) {
                session()->flash('app_message', 'Course successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Course');
            }

        return redirect()->back();
    }
}
