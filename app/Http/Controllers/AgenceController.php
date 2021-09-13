<?php

namespace App\Http\Controllers;

use App\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return view('agence.index');
        $agences=Agence::all();
        return view('agence.index')->with(['agences'=> $agences]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function show(Agence $agence)
    { 
     //   return view('agence.show')->withAgence($agence);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agence $agence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        //
    }
    public function showAgence()
    { 
        $agences=Agence::all();
        return view('agence.show', compact('agences')); 
        
    }

}
