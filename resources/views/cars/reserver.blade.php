@extends('layouts.app')

@section('content')
        <div class="row my-4">
            <div class="col-md-12">
              <div class="card">
                <h3 class="card-header text-center mt-2 my-4">Reserver Car</h3>
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
@endsection