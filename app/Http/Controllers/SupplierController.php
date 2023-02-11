<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Models\Salutation;
use App\Http\Requests\Persons\Index;
use App\Http\Requests\Persons\Show;
use App\Http\Requests\Persons\Create;
use App\Http\Requests\Persons\Store;
use App\Http\Requests\Persons\Edit;
use App\Http\Requests\Persons\Update;
use App\Http\Requests\Persons\Destroy;


/**
 * Description of SupplierController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class SupplierController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.persons.index', ['records' => Supplier::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Supplier $supplier)
    {
        return view('pages.persons.show', [
                'record' =>$supplier,
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
            'model' => new Supplier,
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
        $model=new Supplier;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Supplier saved successfully');
            return redirect()->route('persons.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Supplier');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Supplier $supplier)
    {
		$salutations = Salutation::all(['id']);

        return view('pages.persons.edit', [
            'model' => $supplier,
			"salutations" => $salutations,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Supplier $supplier)
    {
        $supplier->fill($request->all());

        if ($supplier->save()) {
            
            session()->flash('app_message', 'Supplier successfully updated');
            return redirect()->route('persons.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Supplier');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Supplier  $supplier
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Supplier $supplier)
    {
        if ($supplier->delete()) {
                session()->flash('app_message', 'Supplier successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Supplier');
            }

        return redirect()->back();
    }
}
