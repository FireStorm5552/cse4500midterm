<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment = Equipment::all();
		return view('equipment',compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
     'name' => 'required',
     'processor' => 'required',
	 'ram' => 'required',
	 'type' => 'required',
     'manufacturer_id' => 'required',
	 'purchase_id' => 'required',
	 'uzer_id' => 'required',
]);
		$equipment = Equipment::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $equipment= Equipment::find($id);
	$equipment->notes;
	return view('equipment.show',compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::find($id);
		return view('equipment.edit', compact('equipment'));
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
       $validated = $request->validate([
     'name' => 'required',
     'processor' => 'required',
	 'ram' => 'required',
	 'type' => 'required',
     'manufacturer_id' => 'required',
	 'purchase_id' => 'required',
	 'uzer_id' => 'required',
]);

	 Equipment::whereId($id) ->
	 update($validated);
	return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipment::destroy($id);
		return redirect('/equipment');
    }
}
