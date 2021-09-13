@extends('layouts.app')

@section('content')
    <!--  Header -->
    <div class="header-agence">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-center">Gestion location Voiture</h1>
            </div>
          </div><!-- fin row -->
        </div><!-- fin container-fluid -->
      </div>
      <!-- fin header -->

      <!-- headerinfo -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Véhicules</span>
            <span class="info-box-number">
                {{ \App\Car::all()->count() }}
                <small></small>
            </span>
            </div>
            <!-- fin info-box-content -->
        </div>
        <!-- fin info-box -->
        </div>
        <!-- fin col -->
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Loués</span>
            <span class="info-box-number">{{ \App\Car::all()->count() }}</span>
            </div>
            <!-- fin info-box-content -->
        </div>
        <!-- fin info-box -->
        </div>
        <!-- fin col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Reservations</span>
            <span class="info-box-number">{{ \App\Car::whereDisponible(1)->count() }}</span>
            </div>
            <!-- fin info-box-content -->
        </div>
        <!-- fin info-box -->
        </div>
        <!-- fin col -->
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number">{{ \App\Client::all()->count() }} </span>
            </div>
            <!-- fin info-box-content -->
        </div>
        <!-- fin info-box -->
        </div>
        <!-- fin col -->
    </div> 
    <!-- headerinfo -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="agence">
                        <h2 class="text-center"></h2>
                        <div class="row">                            
                            <div class="col-md-6 bnt">
                               <a href="{{route('reserver.index')}}" class="btn btn-warning btn-lg btn-block" role="button" >Location</a>
                               <a href="{{route('agence.show')}}" class="btn btn-warning btn-lg btn-block" role="button" >Information</a>
                               <a href="" class="btn btn-danger btn-lg btn-block" role="button" >Charges</a>
                            </div>
                            <div class="col-md-6">
                               <a href="{{route('clients.allClient')}}" class="btn btn-warning btn-lg btn-block" role="button" >clients</a>
                               <a href="{{route('cars.index')}}" class="btn btn-warning btn-lg btn-block" role="button">Vehicules</a>       
                               <a href="" class="btn btn-danger btn-lg btn-block" role="button" >Reservations</a>
                            </div>
                          </div>
                         </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
