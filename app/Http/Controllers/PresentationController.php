<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Presentation;
use App\Models\Course;
use App\Http\Requests\Presentations\Index;
use App\Http\Requests\Presentations\Show;
use App\Http\Requests\Presentations\Create;
use App\Http\Requests\Presentations\Store;
use App\Http\Requests\Presentations\Edit;
use App\Http\Requests\Presentations\Update;
use App\Http\Requests\Presentations\Destroy;


/**
 * Description of PresentationController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class PresentationController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.presentations.index', ['records' => Presentation::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Presentation $presentation)
    {
        return view('pages.presentations.show', [
                'record' =>$presentation,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$courses = Course::all(['id']);

        return view('pages.presentations.create', [
            'model' => new Presentation,
			"courses" => $courses,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Presentation;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Presentation saved successfully');
            return redirect()->route('presentations.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Presentation');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Presentation $presentation)
    {
		$courses = Course::all(['id']);

        return view('pages.presentations.edit', [
            'model' => $presentation,
			"courses" => $courses,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Presentation $presentation)
    {
        $presentation->fill($request->all());

        if ($presentation->save()) {
            
            session()->flash('app_message', 'Presentation successfully updated');
            return redirect()->route('presentations.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Presentation');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Presentation  $presentation
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Presentation $presentation)
    {
        if ($presentation->delete()) {
                session()->flash('app_message', 'Presentation successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Presentation');
            }

        return redirect()->back();
    }
}
