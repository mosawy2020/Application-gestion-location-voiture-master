<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\VisiteTechnique;
use App\Car;
use Carbon\Carbon;
class VisiteTchechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visiteTechniques=VisiteTechnique::paginate(6);
        return view('visiteTechnique.index')->with([
            'visiteTechniques'=> $visiteTechniques,
            'title'=> 'Toutes les voiture',
            ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\VisiteForm::class, [
            'method' => 'POST',
            'url' => route('visiteTechnique.store')
        ]);
        //VisiteTechnique
        $visiteTechniques=DB::table('visite_techniques')->distinct()->get();
        return view('visiteTechnique.create', compact('form','visiteTechniques'));
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
            'centre'=>'required',
            'id_controle'=>'required',
            'n_autorisation'=>'required',
            'date_visite'=>'required',
            'duree_mois'=>'required',
            'prix'=>'required',
            'contact_center'=>'required',
            'observation'=>'required',
        ]);
     /*  $name="";
        $file = $request->file('image');
        $name = $file->getClientOriginalName();         
        $file->move(public_path('images'),$name);
        */
       // printf("Now: %s", Carbon::now());
       $date = Carbon::now();
      // dd($date->isoFormat('Do MMMM YYYY, h:mm:ss a'));
       $dateToday=$date->isoFormat('M/D/YY');
      // $knownDate = Carbon::now();     
       // create testing date
       // Carbon::setTestNow($knownDate);
       // dd(Carbon::create(1992, 4, 18, 12)->diffForHumans()); 
       // $date1->diffInMonths($date2);
       // $dt->addMonth(duree_mois);

       $cars=Car::All();
        VisiteTechnique::create([

            'car_id'=>$cars->random()->id,
            'centre'=>$request->centre,
            'id_controle'=>$request->id_controle,
            'n_autorisation'=>$request->n_autorisation,
            'date_visite'=>$request->date_visite,
            'duree_mois'=>$request->duree_mois,
            'date_fin'=>$request->date_fin,
            'prix'=>$request->prix,
            'contact_center'=>$request->contact_center,
            'observation'=>$request->observation,

            
            //'image'=> '/images/'.$name,
        ]);
       return redirect()->route('visiteTechnique.index')->withSuccess('visiteTechnique ajoutee');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VisiteTechnique  $visiteTechnique
     * @return \Illuminate\Http\Response
     */
    public function show(VisiteTechnique $visiteTechnique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VisiteTechnique  $visiteTechnique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visiteTechnique= VisiteTechnique::find($id);
        return view('visiteTechnique.edit', compact('visiteTechnique'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VisiteTechnique  $visiteTechnique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,VisiteTechnique  $visiteTechnique)
    {
       //  $date = Carbon::now();
       //  $dateToday=$date->isoFormat('M/D/YY');

        $this->validate($request,[
            'car_id'=>'required',
            'centre'=>'required',
            'id_controle'=>'required',
            'n_autorisation'=>'required',
            'date_visite'=>'required',
            'date_fin'=>'required',
            'duree_mois'=>'required',
            'prix'=>'required',
            'contact_center'=>'required',
            'observation'=>'required',
           // 'image'=>'required',
        ]);
      /*  $image=$visiteTechnique->image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();         
            $file->move(public_path('images'),$name);
            $image='/images/'.$name;
        }*/
        $visiteTechnique->update([
            'car_id'=>$request->car_id,
            'centre'=>$request->centre,
            'id_controle'=>$request->id_controle,
            'n_autorisation'=>$request->n_autorisation,
            'date_visite'=>$request->date_visite,
            'date_fin'=>$request->date_fin,
            'duree_mois'=>$request->duree_mois,
            'prix'=>$request->prix,
            'contact_center'=>$request->contact_center,
            'observation'=>$request->observation,
         //  'image'=>$image,
        ]);
        return redirect()->route('visiteTechnique.index')->withSuccess('visiteTechnique modifier');    
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VisiteTechnique  $visiteTechnique
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisiteTechnique $visiteTechnique)
    {
        
        $visiteTechnique->delete();
        return redirect()->route('visiteTechnique.index')->withSuccess('Voiture supprimer');

    }
}
