@extends('layouts.app')

@section('content')
<div class="row my-4">
  <div class="col-md-12">
      <div class="card">
          <h3 class="card-header text-center text-capitalize mt-2 my-4">Liste  Visite Technique</h3> 
          <div class="form-group">
            <a href="{{route('visiteTechnique.create')}}">
                <button class="btn btn-primary" >
                  <i class="fa fa-plus"></i>
                </button>
              </a>
            </div>   
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>car_id</th>
                  <th>centre</th>
                  <th>id_controle</th>
                  <th>n_autorisation</th>
                  <th>date_visite</th>
                  <th>date_fin</th>
                  <th>duree_mois</th>
                  <th>prix</th>
                  <th>contact_center</th>
                  <th>observation</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($visiteTechniques as $visit)  
                <tr>
                  <td>
                    <a href="">
                      {{$visit->car_id}}
                    </a>
                  </td>
                  <td>{{$visit->centre}}</td>
                  <td>{{$visit->id_controle}}</td>
                  <td>{{$visit->n_autorisation}}</td>
                  <td>{{$visit->date_visite}}</td>
                  <td>{{$visit->date_fin}}</td>
                  <td>{{$visit->duree_mois}}</td>
                  <td>{{$visit->prix}}dh</td>
                  <td>{{$visit->contact_center}}</td>
                  <td>{{$visit->observation}} </td>
                  <td class="d-flex flex-row justify-content-center">
                      <a href="{{route('visiteTechnique.edit',$visit->id)}}" 
                        class="btn btn-warning mr-2">
                        <i class="fa fa-edit"></i>
                      </a>
                    <form action="{{route('visiteTechnique.destroy',$visit->id)}}" method="post">
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
              {!! $visiteTechniques->links() !!}
            </div>
            <!-- debut pagination-->
          </div>
      </div>
  </div>
</div> 
@endsection