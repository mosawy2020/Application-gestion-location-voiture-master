@extends('layouts.app')

@section('content')
  <div class="row my-4">
    <div class="col-md-8 mx-auto">
       <div class="card border border-primary shodow-sm">
        <h3 class="card-header">Inscription</h3>
        <div class="card-body">
            <form action="{{route('users.register')}}" method="post">
            @csrf
                <div class="form-group">
                   <label for="name">Nom & Prenom</label>
                   <input type="text" name="name" class="form-control" placeholder="Nom & Prenom ...">
                </div>
                <div class="form-group">
                    <label for="tel">Tel</label>
                    <input type="text" name="tel" class="form-control" placeholder="Telephone ...">
                 </div>
                 <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="Ville ...">
                 </div>
                <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" name="email" class="form-control" placeholder="Email ...">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control" placeholder="Password ...">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">valider</button>
                </div>
            </form>
            </div>
          </div>
      </div>      
  </div>
    
@endsection