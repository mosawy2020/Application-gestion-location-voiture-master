<?php

namespace App\Http\Controllers;

use App\Command;
use App\Car;
use Illuminate\Http\Request;
use DateTime;
class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('commands.index')->with(['commands'=>Command::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('commands.create')->withCar(Car::findOrFail($id));
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
            'car_id'=> 'required',
            'dateL'=> 'required',
            'dateR'=> 'required',
        ]);
        $car=Car::findOrFail($request->car_id);
        $dateLocation=new DateTime($request->dateL);
        $dateRetour=new DateTime($request->dateR);
        $jours=date_diff($dateLocation,$dateRetour);
        $prixTtc=$car->prixJour * $jours->format('%d');
        Command::create([
            'user_id'=>auth()->user()->id,
            'car_id'=>$request->car_id,
            'dateL'=>$request->dateL,
            'dateR'=>$request->dateR,
            'NbrJour'=>$jours->format('%d'),
            'prixTTC'=>$prixTtc,
        ]);
        $car->update([
            'disponible'=> 0,
        ]);
        return redirect()->route('users.profile',auth()->user()->id)->with([
            'success'=> 'commande est ajouter'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function show(Command $command)
    {
        //
        return view('commands.show')->withCommand($command);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function edit(Command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function destroy(Command $command)
    {
        //
    }
    public function deleteUserCommands($commandId,$cardId)
    {
        $command=Command::findOrFail($commandId);
        if ($command->car_id==$cardId) 
        {
            $command->delete();  
            return redirect()->route('users.profile',auth()->user()->id)->with([
                'success'=> 'commande est supprimer'
            ]);
        }
        

    }
}
