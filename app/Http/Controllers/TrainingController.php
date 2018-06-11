<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Training; //include the namespace of Training.php 

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // app/Http/Controllers
		// TrainingController.php
		
		$trainings= Training::all()->toArray();
		//$trainings=Training::all()->to
        return view('trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // app/Http/Controllers
		// TrainingController.php
		
		return view('trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	
	//// TrainingController.php
    public function store(Request $request)
    {
        //validate insert new record process is here
		$training = $this->validate(request(), [
          'trainingname' => 'required',
          'desc' => 'required',
		  'trainer' => 'required'
        ]);
        
        Training::create($training);//insert record

        return back()->with('success', 'Training has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
