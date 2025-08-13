@extends('layouts.app')


@section('content')

<div>
    <livewire:frontend.product.view :product="$product"/>
</div>

@endsection