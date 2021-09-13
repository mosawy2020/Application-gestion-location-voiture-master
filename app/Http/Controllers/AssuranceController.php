<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;
use App\Assurance;

use Carbon\Carbon;

class AssuranceController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assurances=Assurance::paginate(6);
        return view('assurance.index')->with([
            // 'cars'=>Car::All(),
            'assurances'=> $assurances,
            'title'=> 'Toutes les assurances',
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\AssuranceForm::class, [
            'method' => 'POST',
            'url' => route('assurance.store')
        ]);
        //
        $assurance=DB::table('assurances')->distinct()->get();
         return view('assurance.create', compact('form','assurance'));
       // dd($prixJour);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'assurance' => 'required',
            'num_police' => 'required',
            'date_operation' => 'required',
            'date_debut' => 'required',
            'duree_mois' =>'required',
            'prix' => 'required',
            'contact_assurance' => 'required',
            'observation' => 'required',
            
            ]);
        $cars=Car::All();
        Assurance::create([
            'car_id'=>$cars->random()->id,
            'assurance'=>$request->assurance,
            'num_police'=>$request->num_police,
            'date_operation'=>$request->date_operation,
            'date_debut'=>$request->date_debut,
            'duree_mois'=>$request->duree_mois,
            'prix'=>$request->prix,
            'contact_assurance'=>$request->contact_assurance,
            'observation'=>$request->observation,
        ]);
       return redirect()->route('assurance.index')->withSuccess('assurance ajoutee');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function show(Assurance $assurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Assurance $assurance)
    {
        $assurance= Assurance::find($id);
        return view('assurance.edit', compact('assurance'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assurance $assurance)
    {
        $this->validate($request,[
            'assurance' => 'required',
            'num_police' => 'required',
            'date_operation' => 'required',
            'date_debut' => 'required',
            'duree_mois' =>'required',
            'prix' => 'required',
            'contact_assurance' => 'required',
            'observation' => 'required',
            
            ]);
        $assurance->update([
            'car_id'=>$request->car_id,
            'assurance'=>$request->assurance,
            'num_police'=>$request->num_police,
            'date_operation'=>$request->date_operation,
            'date_debut'=>$request->date_debut,
            'duree_mois'=>$request->duree_mois,
            'prix'=>$request->prix,
            'contact_assurance'=>$request->contact_assurance,
            'observation'=>$request->observation,
        ]);
       return redirect()->route('assurance.index')->withSuccess('assurance modifier');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assurance $assurance)
    {
        $assurance->delete();
        return redirect()->route('assurance.index')->withSuccess('Voiture supprimer');

    }
}
