@extends('layouts.app')

@section('title', 'Thank you for Shopping')

@section('content')


    <div class="py-3 pyt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if(session('message'))
                        <h5 class="alert alert-success">{{ session('message') }}</h5>
                    @endif
                    
                    <div class="mb-5 mt-3">
                        
                            <h1><i class="fa fa-heart"></i></h1>
                        
                        <h3 >Hvala na kupovini! </h3>
                        <h4>Dodjite nam opet. </h4>
                        <a href="{{ url('products')}}" class="btn btn-primary">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection