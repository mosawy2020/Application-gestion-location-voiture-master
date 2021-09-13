@extends('layouts.app')

@section('content')
  <div class="row my-4">
      <div class="col-md-12">
        <div class="form-group">
          <button class="btn btn-primary" data-toggle="modal" data-target="#addCar" >
            <i class="fa fa-plus"></i>
          </button>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Marque</th>
                      <th>Model</th>
                      <th>Type</th>
                      <th>PrixJournee</th>
                      <th>Disponilite</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cars as $car)
                    <tr>
                    <td>{{$car->id}}</td>
                      <td>{{$car->marque}}</td>
                      <td>{{$car->model}}</td>
                      <td>{{$car->type}}</td>
                      <td>{{$car->prixJour}}dh</td>
                      <td>
                        @if ($car->disponible)
                          <span class="badge badge-success">Disponible</span>
                        @else
                          <span class="badge badge-danger">Reserve</span>
                        @endif
                      </td>
                      <td>
                      <img src="{{$car->image}}" width="60" height="60" class="img-fluid" srcset="" alt="">
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
                <!-- debut  pagination -->
                <div class="d-flex justify-content-center">
                  {!! $cars->links() !!}
                </div>
                <!-- fin pagination -->
            </div>
        </div>
      </div>
   </div>
    <!-- Modal -->
    <div class="modal fade" id="addCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter use voiture</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- debut form  -->
          <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Marque*</label>
                <input type="text" name="marque" class="form-control" placeholder="Marque">
              </div>
              <div class="form-group">
                <label>Model*</label>
                <input type="text" name="model" class="form-control" placeholder="Model">
              </div>
              <div class="form-group">
                <label>Type*</label>
                <select class="form-control" name="type" id="">
                  <option value="" selected disabled>Veuiller choisir un type</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Essence">Essence</option>
                </select>
              </div>
              <div class="form-group">
                <label>Prix Journee*</label>
                <input type="number" name="prixJour" class="form-control" placeholder="Prix Journee">
              </div>
              <div class="form-group">
                <label>Disponiblete*</label>
                <select class="form-control" name="disponible" id="">
                  <option value="" selected disabled>Veuiller choisir une option</option>
                  <option value="1">Oui</option>
                  <option value="0">Non</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Photo*</label>
                <input type="file" name="image" class="form-control" placeholder="image">
              </div>
              <button type="submit" class="btn btn-primary">Valider</button>
              </form>
            <!-- fin form  -->
          </div>
        </div>
      </div>
    </div>
@endsection