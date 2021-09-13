@extends('layouts.app')

@section('content')
    <h2 class="text-center py-4">Agence information</h2>
    <div class="card row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>nameAgence</th>
                <th>Ville</th>
                <th>Adress</th>
                <th>Devise</th>
                <th>Tel</th>
                <th>Fix</th>
                <th>Email</th>
                <th>Website</th>
                <th>Num_contrat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($agences as $agence)
              <tr>
                <td>{{$agence->nom}}</td>
                <td>{{$agence->ville}}</td>
                <td>{{$agence->adresse}}</td>
                <td>{{$agence->devise}}</td>
                <td>{{$agence->tel}}</td>
                <td>{{$agence->fix}}</td>
                <td>{{$agence->email}}</td>
                <td>{{$agence->website}}</td>
                <td>{{$agence->num_contrat}}</td>
              </tr>      
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection