@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        @if(session('message'))
        <h1 class="alert alert-success">{{session('message')}}</h1>
        @endif

      </div>
      
      <div class="col-12 col-xl-4">
       <div class="justify-content-end d-flex">

       </div>
     </div>
   </div>
 </div>
</div>

@endsection
