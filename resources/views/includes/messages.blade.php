@if(Session::get('success'))
   <div class="alert alert-success">
       {{session::get('success')}}
   </div>
@endif
@if(Session::get('info'))
   <div class="alert alert-info">
       {{session::get('info')}}
   </div>
@endif
@if(Session::get('error'))
   <div class="alert alert-danger">
       {{session::get('error')}}
   </div>
@endif
@if($errors->count() > 0)
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">
       {{$error}}
   </div>
   @endforeach
@endif