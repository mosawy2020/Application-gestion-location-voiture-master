@extends('layouts.app')

@section('content')
<div class="row my-4">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header text-center text-capitalize mt-2 my-4">Modifer une voiture</h3> 
            <div class="form-group">
              <a href="{{route('cars.create')}}">
                  <button class="btn btn-primary" >
                    <i class="fa fa-plus"></i>
                  </button>
                </a>
              </div>   
            <div class="card-body">
                <!-- debut form  -->
                <form action="{{route('cars.update',$car->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <div class="form-group">
                        <label>Marque*</label>
                    <input type="text" value="{{$car->marque}}" name="marque" class="form-control" placeholder="Marque">
                    </div>
                    <div class="form-group">
                        <label>Model*</label>
                        <input type="text" value="{{$car->model}}"name="model" class="form-control" placeholder="Model">
                    </div>
                    <div class="form-group">
                    <label>Type*</label>
                        <select class="form-control" name="type" id="">
                            <option value="" selected disabled>Veuiller choisir un type</option>
                            <option value="Diesel"  {{$car->type=='Diesel'?'selected':''}} >Diesel</option>
                            <option value="Essence" {{$car->type=='Essence'?'selected':''}} >Essence</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Prix Journee*</label>
                        <input type="number" value="{{$car->prixJour}}" name="prixJour" class="form-control" placeholder="Prix Journee">
                    </div>
                    <div class="form-group">
                    <label>Disponiblete*</label>
                    <select class="form-control" name="disponible" id="">
                        <option value="" selected disabled>Veuiller choisir une option</option>
                        <option value="1"{{$car->disponible ? 'selected' : ''}}>Oui</option>
                        <option value="0"{{!$car->disponible ? 'selected' : ''}}>Non</option>
                    </select>
                    </div>
                    <div class="form-group">
                       <img src="{{$car->image}}"  width="100" height="100" class="img-fluid rounded" name="" alt=""/>
                    </div>
                    <div class="form-group">
                    <label for="">Photo*</label>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
                <!-- fin form  -->
                 </div><!--/card body-->
             </div><!--./card -->
         </div><!--/col12-->
     </div><!--/row-->

@endsection