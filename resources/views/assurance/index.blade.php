@extends('layouts.app')

@section('content')
<div class="row my-4">
  <div class="col-md-12">
      <div class="card">
          <h3 class="card-header text-center text-capitalize mt-2 my-4">Liste  assurancee Technique</h3> 
          <div class="form-group">
            <a href="{{route('assurance.create')}}">
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
                  <th>assurance</th>
                  <th>num_police</th>
                  <th>date_operation</th>
                  <th>date_debut</th>
                  <th>duree_mois</th>
                  <th>prix</th>
                  <th>contact_assurance</th>
                  <th>observation</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($assurances as $assurance)  
                <tr>
                  <td>
                    <a href="">
                      {{$assurance->car_id}}
                    </a>
                  </td>
                  <td>{{$assurance->assurance}}</td>
                  <td>{{$assurance->num_police}}</td>
                  <td>{{$assurance->date_operation}}</td>
                  <td>{{$assurance->date_debut}}</td>
                  <td>{{$assurance->duree_mois}}</td>
                  <td>{{$assurance->prix}}dh</td>
                  <td>{{$assurance->contact_assurance}}</td>
                  <td>{{$assurance->observation}} </td>
                  <td class="d-flex flex-row justify-content-center">
                      <a href="{{route('assurance.edit',$assurance->id)}}" 
                        class="btn btn-warning mr-2">
                        <i class="fa fa-edit"></i>
                      </a>
                    <form action="{{route('assurance.destroy',$assurance->id)}}" method="post">
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
              {!! $assurances->links() !!}
            </div>
            <!-- debut pagination-->
          </div>
      </div>
  </div>
</div> 
@endsection