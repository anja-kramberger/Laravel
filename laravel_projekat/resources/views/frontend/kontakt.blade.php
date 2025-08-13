@extends('layouts.app')


@section('content')

<section class="row">
    <div class="col-md-6">
        <div>
            @if(Session::has('success'))
                <br><div class="alert alert-success text-center">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <div class="page-header">
            <br><h2>Kontakt</h2>
        </div>
        <form method="post" action="{{ route('validate.kontakt')}}">
            @csrf
            <div class="form-group">
                <label for="ime">Ime i Prezime</label>
                <input type="text" class="form-control" id="ime_prezime" name="ime_prezime"  placeholder="Unesite Vase ime">
                @error('ime_prezime')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Unesite Vas Email">
                @error('email')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="tel" class="form-control" id="telefon" name="telefon"  placeholder="Unesite Vas Telefon">
                @error('telefon')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="form-group">
                <label for="naslov">Naslov</label>
                <input type="text" class="form-control" id="naslov" name="naslov"  placeholder="Unesite naslov poruke">
                @error('naslov')<small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="form-group">
                <label for="poruka">Poruka</label>
                <textarea id="poruka" class="form-control" name="poruka"  rows="4"></textarea>
                @error('poruka')<small class="text-danger">{{$message}}</small>@enderror
            </div><br>
            <div colspan="2" align="center">
                <button type="submit" class="btn btn-danger btn-lg">Posalji</button>
            </div>
            
        </form>
    </div>

    <aside class="col-md-6">
        <div class="page-header">
            <br><h2>Gde se nalazimo</h2>
        </div>
        <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Savski nasip 7, Beograd 11000</p>
        <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +381 1140 11 216</p>
        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> office@its.edu.rs</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.9756154713664!2d20.417924615803948!3d44.80168558542446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6fed108da8a7%3A0x9c662a8e931516fb!2sITS%20-%20Visoka%20%C5%A1kola%20za%20informacione%20tehnologije!5e0!3m2!1sen!2srs!4v1676857316110!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </aside>
</section>

@endsection