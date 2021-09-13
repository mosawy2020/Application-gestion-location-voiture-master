<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return view('admins.index')->withCars(Car::orderBy('created_at','DESC')->paginate(10));
        
    }
    public function create()
    {
        return view('users.register');
    }
    public function showAllclients()
    {
       $clients=User::all();
        return view('users.allClient')->with(['users'=> $clients]);
    }
    public function ContUsers()
    {
        $clientsCount = Client::withCount(['user'])->get();
        return view('users', compact('usersCount'));
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // return view('clients.show')->withClient(Client::findOrFail($id));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    /*
    public function register(Request $request){
       $this->validate($request,[
                'email'=> 'required',
                'password'=> 'required',
                'name'=> 'required',
                'tel'=> 'required',
                'ville'=> 'required',
            ]);
            //dd($request->all());
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'tel'=>$request->tel,
                'ville'=>$request->ville,
            ]);
    
            return redirect()->route('auth.login')->with([
                'success'=> 'Compte est Cree'
            ]);
        
        }
   /* public function auth(Request $request)
    {
        $this->validate($request,[
            'email'=> 'required',
            'password'=> 'required',
        ]);
        if (auth()->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('cars.index');
        } else {
            return redirect()->route('auth.login')->with([
                'error'=> 'email ou password incorrect'
            ]);
        }
    }
    
    public function login()
    {
        return view('auth.login');
    }
    public function logout()
    {
       auth()->logout();
       return redirect()->route('cars.index');
    }
    */
    
}
