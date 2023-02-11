<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Salutation;
use App\Http\Requests\Persons\Index;
use App\Http\Requests\Persons\Show;
use App\Http\Requests\Persons\Create;
use App\Http\Requests\Persons\Store;
use App\Http\Requests\Persons\Edit;
use App\Http\Requests\Persons\Update;
use App\Http\Requests\Persons\Destroy;


/**
 * Description of InstructorController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class InstructorController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.persons.index', ['records' => Instructor::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Instructor $instructor)
    {
        return view('pages.persons.show', [
                'record' =>$instructor,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$salutations = Salutation::all(['id']);

        return view('pages.persons.create', [
            'model' => new Instructor,
			"salutations" => $salutations,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Instructor;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Instructor saved successfully');
            return redirect()->route('persons.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Instructor');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Instructor $instructor)
    {
		$salutations = Salutation::all(['id']);

        return view('pages.persons.edit', [
            'model' => $instructor,
			"salutations" => $salutations,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Instructor $instructor)
    {
        $instructor->fill($request->all());

        if ($instructor->save()) {
            
            session()->flash('app_message', 'Instructor successfully updated');
            return redirect()->route('persons.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Instructor');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Instructor  $instructor
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Instructor $instructor)
    {
        if ($instructor->delete()) {
                session()->flash('app_message', 'Instructor successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Instructor');
            }

        return redirect()->back();
    }
}
