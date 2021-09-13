@extends('layouts.app')

@section('content')
   <div class="clients-all">
    <h2 class="text-center h2-header">clients locations</h2>
    <div class="row">
    <div class="col-md-12">
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Prenom</th>
                    <th>Num permis</th>
                    <th>Email</th>
                    <th>Date_Néé</th>
                    <!--
                    <th>Tel</th>
                    <th>Date_Insc</th> 

                    <th>Cin</th>
                    <th>Ville</th>
                    <th>Adresse</th>
                    <th>Civilite</th>

                    <th>Action</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>
                            <img src="{{$client->image}}" width="60" height="60" class="img-fluid"  alt="{{$client->nom}}_img">
                        </td>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->num_permis}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->date_inscription}}</td>
                        <!--
                        <td>{/{$client->cin}}</td>
                        <td>{/{$client->tel}}</td>
                        <td>{/.{$client->adresse}}</td>
                        <td>{/§{$client->ville}}</td>
                        <td>{/.{$client->civilite}}</td>
                        <td>{.{$client->date_naissance}}</td>
                        <td></td> -->
                    </tr>
                @endforeach 
            </tbody>
        </table>
       </div>
    </div>
  </div>
</div>
@endsection