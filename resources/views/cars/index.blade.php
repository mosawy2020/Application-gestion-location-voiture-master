@extends('layouts.app')

@section('content')
<div class="row my-4">
  <div class="col-md-12">
      <div class="card">
          <h3 class="card-header text-center text-capitalize mt-2 my-4">Liste  Voiture</h3> 
          <div class="form-group">
            <a href="{{route('cars.create')}}">
                <button class="btn btn-primary" >
                  <i class="fa fa-plus"></i>
                </button>
              </a>
            </div>   
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Marque</th>
                  <th>Modele</th>
                  <th>Matricule</th>
                  <!--<th>Couleur</th>-->
                  <th>Puissance</th>
                  <th>Vitice</th>
                  <th>Type</th>
                  <th>Etat</th>
                  <th>PrixJour</th>
                  <th>Image</th>
                  <th>Disponible</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cars as $car)  
                <tr>
                  <td>
                    <a href="{{route('cars.show',$car->id)}}">
                      {{$car->marque}}
                    </a>
                  </td>
                  <td>{{$car->modele}}</td>
                  <td>{{$car->matricule}}</td>
                  <!--<td>{car->couleur}}</td>-->
                  <td>{{$car->puissance}}</td>
                  <td>{{$car->vitice}}</td>
                  <td>{{$car->type_carburant}}</td>
                  <td>{{$car->etat}}</td>
                  <td>{{$car->prixJour}}dh</td>
                  <td>
                    <img src="{{$car->image}}" width="60" height="60" class="img-fluid"  srcset="" alt="">
                  </td>
                  <td>
                    @if($car->disponible)
                       <a class="btn btn-info" href="{{route('cars.show',$car->id)}}" style="color: white;">Disponible</a>
                    @else
                      <a class="btn btn-danger disabled">Reserve</a>
                    @endif
                  </td>
                  <td class="d-flex flex-row justify-content-center">
                      <a href="{{route('cars.edit',$car->id)}}" class="btn btn-warning mr-2"><i class="fa fa-edit"></i></a>
                      <form action="{{route('cars.destroy',$car->id)}}" method="post">
                      @csrf
                      {{method_field('delete')}} 
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>      
                @endforeach
              </tbody>
            </table>
            <!-- debut pagination-->
            <div class="d-flex justify-content-center">
              <!-- code panination -->
              {!! $cars->links() !!}
            </div>
            <!-- debut pagination-->
          </div>
      </div>
  </div>
</div> 
@endsection