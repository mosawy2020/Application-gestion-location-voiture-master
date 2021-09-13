@extends('layouts.app')

@section('content')
      <h3 class="card-header text-center py-2 pt-2"> {{$car->marque}}voitures</h3>
      <div class="card mb-3">
      <img src="{{$car->image}}" class="card-img-top" alt="">
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
              </div>
            @if($car->disponible)
            <li class="btn btn-primary">
              <p class="card-text">
                  <small class="text-muted">
                      <a href="{{route('command.create',$car->id)}}" class="btn btn-primary">Reserver</a>
                  </small>
              </p>
            </li>
            @else
            <li class="btn btn-danger">
              <p class="card-text">
                <small class="text-muted">
                    <a href="#" class="btn btn-primary">Reserve</a>
                </small>
              </p>
            </li>
            @endif
          </ul>
      </div>   
@endsection