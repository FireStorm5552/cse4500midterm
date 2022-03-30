<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uzer;

class UzerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uzers = Uzer::all();
		return view('uzers',compact('uzers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('uzers.create');
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
     'email' => 'required',
	 'phone' => 'required',
]);
		$uzer = Uzer::create([
     'name' => $request->name,
     'email' => $request->email, 
	 'phone' => $request->phone,
]);
	return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $uzer= Uzer::find($id);
	$uzer->equipment;
	return view('uzers.show',compact('uzer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uzer = Uzer::find($id);
		return view('uzers.edit', compact('uzer'));
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
     'email' => 'required',
	 'phone' => 'required',
]);

	 Uzer::whereId($id) ->
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
        Uzer::destroy($id);
		return redirect('/uzers');
    }
}
