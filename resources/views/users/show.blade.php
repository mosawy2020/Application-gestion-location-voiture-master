@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-3 py-3">
        <!-- -->
        <div class="card">
            <img src="{{$user->image}}" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center">{{$user->name}}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Tel : {{$user->tel}}</li>
              <li class="list-group-item">Ville : {{$user->ville}}</li>
            </ul>
          </div>
        <!-- -->
    </div>
    <div class="col-md-9">
        <h3 class="text-center">Mes Commands</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Type</th>
                    <th>PrixJour</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>NBRJour</th>
                    <th>prix TCC</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            @foreach (auth()->user()->commands as $command)
                <tr>
                    <td>{{App\Car::findOrFail($command->car_id)->marque}}</td>
                    <td>{{App\Car::findOrFail($command->car_id)->type}}</td>
                    <td>{{App\Car::findOrFail($command->car_id)->prixJour}}dh</td>
                    <td>{{$command->dateL}}</td>
                    <td>{{$command->dateR}}</td>
                    <td>{{$command->NbrJour}}Jour</td>
                    <td>{{$command->prixTTC}}dh</td>
                    <td class="d-flex flex-row justify-content-center">
                    <form action="{{route('command.delete',[$command->id,$command->car_id])}}" method="post">
                     @csrf
                     {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
  </div>
@endsection