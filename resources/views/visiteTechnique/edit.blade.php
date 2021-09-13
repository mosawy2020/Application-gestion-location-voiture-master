@extends('layouts.app')

@section('content')
<div class="row my-4">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header text-center text-capitalize mt-2 my-4">Modifer une visiteTechnique</h3> 
            <div class="form-group">
              <a href="{{route('visiteTechnique.create')}}">
                  <button class="btn btn-primary" >
                    <i class="fa fa-plus"></i>
                  </button>
                </a>
              </div>   
            <div class="card-body">
                <!-- debut form  -->
                <form action="{{route('visiteTechnique.update',$visiteTechnique->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                   {{ method_field('PUT') }}
                   <div class="form-group">
                    <label>car_id</label>
                    <input type="text" value="{{$visiteTechnique->car_id}}" name="car_id" class="form-control">
                   </div>
                    <div class="form-group">
                        <label>Centre</label>
                        <input type="text" value="{{$visiteTechnique->centre}}" name="centre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Id Controle</label>
                        <input type="text" value="{{$visiteTechnique->id_controle}}" name="id_controle" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>n_autorisation</label>
                        <input type="text" value="{{$visiteTechnique->n_autorisation}}" name="n_autorisation" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>date_visite</label>
                        <input type="datetime-local"
                        value="{{$visiteTechnique->date_visite}}"
                        name="date_visite" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>date_fin</label>
                        <input type="datetime-local" value="{{$visiteTechnique->date_fin}}" name="date_fin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>duree_mois</label>
                        <input type="number" value="{{$visiteTechnique->duree_mois}}" name="duree_mois" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>prix</label>
                        <input type="text" value="{{$visiteTechnique->prix}}" name="prix" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>contact_center</label>
                        <input type="text" value="{{$visiteTechnique->contact_center}}" name="contact_center" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>observation</label>
                        <input type="text" value="{{$visiteTechnique->observation}}" name="observation" class="form-control">
                    </div>
                <!--
                  <div class="form-group">
                    <label for="">Photo*</label>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    </div>
                -->
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
                <!-- fin form  -->
                 </div><!--/card body-->
             </div><!--./card -->
         </div><!--/col12-->
     </div><!--/row-->

@endsection