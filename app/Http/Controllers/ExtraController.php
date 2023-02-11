<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Extra;
use App\Models\Participation;
use App\Models\Person;
use App\Http\Requests\Extras\Index;
use App\Http\Requests\Extras\Show;
use App\Http\Requests\Extras\Create;
use App\Http\Requests\Extras\Store;
use App\Http\Requests\Extras\Edit;
use App\Http\Requests\Extras\Update;
use App\Http\Requests\Extras\Destroy;


/**
 * Description of ExtraController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ExtraController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.extras.index', ['records' => Extra::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Extra $extra)
    {
        return view('pages.extras.show', [
                'record' =>$extra,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$participations = Participation::all(['id']);
		$persons = Person::all(['id']);

        return view('pages.extras.create', [
            'model' => new Extra,
			"participations" => $participations,
			"persons" => $persons,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Extra;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Extra saved successfully');
            return redirect()->route('extras.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Extra');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Extra $extra)
    {
		$participations = Participation::all(['id']);
		$persons = Person::all(['id']);

        return view('pages.extras.edit', [
            'model' => $extra,
			"participations" => $participations,
			"persons" => $persons,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Extra $extra)
    {
        $extra->fill($request->all());

        if ($extra->save()) {
            
            session()->flash('app_message', 'Extra successfully updated');
            return redirect()->route('extras.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Extra');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Extra  $extra
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Extra $extra)
    {
        if ($extra->delete()) {
                session()->flash('app_message', 'Extra successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Extra');
            }

        return redirect()->back();
    }
}
