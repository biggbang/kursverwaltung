<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Salutation;
use App\Http\Requests\Persons\Index;
use App\Http\Requests\Persons\Show;
use App\Http\Requests\Persons\Create;
use App\Http\Requests\Persons\Store;
use App\Http\Requests\Persons\Edit;
use App\Http\Requests\Persons\Update;
use App\Http\Requests\Persons\Destroy;


/**
 * Description of PersonController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class PersonController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.persons.index', ['records' => Person::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Person $person)
    {
        return view('pages.persons.show', [
                'record' =>$person,
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
            'model' => new Person,
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
        $model=new Person;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Person saved successfully');
            return redirect()->route('persons.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Person');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Person $person)
    {
		$salutations = Salutation::all(['id']);

        return view('pages.persons.edit', [
            'model' => $person,
			"salutations" => $salutations,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Person $person)
    {
        $person->fill($request->all());

        if ($person->save()) {
            
            session()->flash('app_message', 'Person successfully updated');
            return redirect()->route('persons.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Person');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Person $person)
    {
        if ($person->delete()) {
                session()->flash('app_message', 'Person successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Person');
            }

        return redirect()->back();
    }
}
