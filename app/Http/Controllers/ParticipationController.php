<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Participation;
use App\Models\Person;
use App\Models\Presentation;
use App\Http\Requests\Participations\Index;
use App\Http\Requests\Participations\Show;
use App\Http\Requests\Participations\Create;
use App\Http\Requests\Participations\Store;
use App\Http\Requests\Participations\Edit;
use App\Http\Requests\Participations\Update;
use App\Http\Requests\Participations\Destroy;


/**
 * Description of ParticipationController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ParticipationController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.participations.index', ['records' => Participation::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Participation $participation)
    {
        return view('pages.participations.show', [
                'record' =>$participation,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$persons = Person::all(['id']);
		$presentations = Presentation::all(['id']);

        return view('pages.participations.create', [
            'model' => new Participation,
			"persons" => $persons,
			"presentations" => $presentations,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Participation;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Participation saved successfully');
            return redirect()->route('participations.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Participation');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Participation $participation)
    {
		$persons = Person::all(['id']);
		$presentations = Presentation::all(['id']);

        return view('pages.participations.edit', [
            'model' => $participation,
			"persons" => $persons,
			"presentations" => $presentations,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Participation $participation)
    {
        $participation->fill($request->all());

        if ($participation->save()) {
            
            session()->flash('app_message', 'Participation successfully updated');
            return redirect()->route('participations.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Participation');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Participation  $participation
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Participation $participation)
    {
        if ($participation->delete()) {
                session()->flash('app_message', 'Participation successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Participation');
            }

        return redirect()->back();
    }
}
