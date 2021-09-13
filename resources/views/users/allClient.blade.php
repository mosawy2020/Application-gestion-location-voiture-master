@extends('layouts.app')

@section('content')
  <div class=" row">
    <h2 class="text-center">clients location</h2>
    <div class="card col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tel</th>
                    <th>Ville</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->tel}}</td>
                    <td>{{$client->ville}}</td>
                    <td>{{$client->email}}</td>
                    <td class="d-flex flex-row justify-content-center">
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
  </div>
@endsection