@extends('layouts.app')

@section('content')
<div class="row my-4">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header text-center text-capitalize mt-2 my-4">add cette Voiture</h3>    
            <div class="card-body">
            {!! form($form) !!} 
            </div>
        </div>
    </div>
</div> 
@endsection
