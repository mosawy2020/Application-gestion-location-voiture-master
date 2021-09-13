<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;
class CarController extends Controller
{
    public function index(Request $request)
    {
        // recheche by marque
   /* if($request->search !== null){
         $cars = Car::orderBy('created_at','DESC')->whereMarque($request->search)->paginate(6); //get();
         return view('cars.index')->with([
            'cars'=>$cars,
            'title'=>'Resulate Trouver:'.$request->search,
        //    'count'=>$cars->count()
            ]);
        }
    */
        // recheche by type
     /*   elseif($request->searchType !== null){
            $cars = Car::orderBy('created_at','DESC')->whereType($request->searchType)->paginate(6); //get();
            return view('cars.index')->with([
               'cars'=>$cars,
               'title'=>'Resulate Trouver:'.$request->search,
           //    'count'=>$cars->count()
               ]);
           }*/
     //else{
        $cars=Car::paginate(6);
        return view('cars.index')->with([
            // 'cars'=>Car::All(),
            'cars'=> $cars,
            'title'=> 'Toutes les voiture',
            ]);
          
     //}
     
    }
    public function show(Car $car)
    {
        return view('cars.show')->withCar($car);
    }
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\CarsForm::class, [
            'method' => 'POST',
            'url' => route('cars.store')
        ]);
        //
        $cars=DB::table('cars')->distinct()->get();
        //$prixJour=DB::select('SELECT distinct prixJour FROM cars ');
         $prixJour=DB::table('cars')->select('prixJour')->distinct()->get();
        return view('cars.create', compact('form','cars','prixJour'));
       // dd($prixJour);
    }
    public function store(FormBuilder $formBuilder, Request $request)
    {   
    /*
        $form = $formBuilder->create(\App\Forms\CarsForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }*/
      
        $this->validate($request,[
            'matricule'=>'required',
            'marque'=>'required',
            'modele'=>'required',
            'etat'=>'required',
            'type_carburant'=>'required',
            'prixJour'=>'required',
            'disponible'=>'required',
            'image'=>'required',
        ]);
        $name="";
        $file = $request->file('image');
        $name = $file->getClientOriginalName();         
        $file->move(public_path('images'),$name);
        Car::create([
            'matricule'=>$request->matricule,
            'marque'=>$request->marque,
            'modele'=>$request->modele,
            'etat'=>$request->etat,
            'type_carburant'=>$request->type_carburant,
            'prixJour'=>$request->prixJour,
            'disponible'=>$request->disponible,
            'image'=> '/images/'.$name,
        ]);
       return redirect()->route('cars.index')->withSuccess('Vouture ajoutee');
      
    }
    public function edit(Car $car)
    {
        return view('cars.edit')->withCar($car);

    }
    public function update(Request $request,Car $car)
    {
        $this->validate($request,[
            'matricule'=>'required',
            'marque'=>'required',
            'modele'=>'required',
            'etat'=>'required',
            'type_carburant'=>'required',
            'prixJour'=>'required',
            'disponible'=>'required',
            'image'=>'required',
        ]);
        $image=$car->image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();         
            $file->move(public_path('images'),$name);
            $image='/images/'.$name;
        }
        $car->update([
            'matricule'=>$request->matricule,
            'marque'=>$request->marque,
            'modele'=>$request->modele,
            'etat'=>$request->etat,
            'type_carburant'=>$request->type_carburant,
            'prixJour'=>$request->prixJour,
            'disponible'=>$request->disponible,
            'image'=>$image,
   ]);
        return redirect()->route('cars.index')->withSuccess('Voiture modifier');    
    }
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->withSuccess('Voiture supprimer');

    }
    public function reserver()
    {
         return view('cars.reserver')->withCars(Car::orderBy('created_at','DESC')->whereDisponible(1)->paginate(10));
      // return view('cars.reserver')->with(['cars'=>Car::all()]);
    }
}
