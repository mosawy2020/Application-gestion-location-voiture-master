@extends('layouts.app')

@section('content')
  <div class="card">
        <h3 class="card-header text-center">Louer cette Voiture</h3>
        <div class="row my-3">
          <div class="col-md-12">
              <h3 class="text-info text-center p-3">{{$car->marque}} voitures</h3>
              <div class="card-body">
                <div class="card-img-top  text-center">
                  <img src="{{$car->image}}" class="img-fluid rounded m-2" alt="">
                </div>
                  <ul class="list-group list-group-flush">
                    <div class="row">
                      <div class="col-md-6">
                        <li class="list-group-item" style="font-size: 14px;">Marque :
                          <a href="{{route('cars.show',$car->id)}}"> {{$car->marque}}</a>
                        </li>
                        <li class="list-group-item">Type : {{$car->type}}</li>
                        <li class="list-group-item">Prix Journée : {{$car->prixJour}} dh</li>
                        <li class="list-group-item">Nbr Places : {{$car->places}}</li>
                      </div>
                      <div class="col-md-6">
                        <li class="list-group-item">Nbr Portes : {{$car->portes}}</li>
                        <li class="list-group-item">Nbr Sacs : {{$car->sacs}}</li>
                        <li class="list-group-item">Nbr Clima : {{$car->clima}}</li>
                        <li class="list-group-item">Type Boite vites : {{$car->boitevites}}</li>
                      </div>
                  </ul>         
              </div>
          </div>
        </div>
        <div class="card-body">
            <form action="{{route('commands.store')}}" method="post">
            @csrf
            {{method_field('post')}}
                <div class="form-group">
                   <label for="dateL">Date Debut</label>
                   <input type="date" name="dateL" class="form-control" placeholder="Date Debut ...">
                </div>
                <div class="form-group">
                    <label for="dateR">Date Fin</label>
                    <input type="date" name="dateR" class="form-control" placeholder="Date Fin ...">
                 </div>
                   <input type="hidden" id="custId" name="car_id" value="{{$car->id}}"> 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">valider</button>
                </div>
            </form>
        </div>   
  </div>
@endsection