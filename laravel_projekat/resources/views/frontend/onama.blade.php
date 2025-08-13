@extends('layouts.app')


@section('content')

<div class="kontent">
    <div class="page-header">
        <h2>O nama</h2>
        <hr>
    </div>
    <div class="row">
        
            <div class="col-md-6" >
                <p class="prg text-justify">
                    <strong>Florapro</strong> je kompanija koja je zapocela sa radom 2008.<br> a online prodaja je zazivela 2012. godine. 
                    Fokus naseg rada jeste posvecenost kupcima kao i odrzavanje kvaliteta proizvoda.<br>
                    Svakoj musteriji posveticemo paznju i vreme u odabiru prave biljke za Vas.<br> Za sve nedoumice bile oko
                    proizvoda, odabira prave biljke za Vas ili odrzavanja te iste mozete nam pisati na 
                    <a href="{{ url('/kontakt') }}">kontakt</a> strani.<br><br>
                    <strong>Informacije vezane za isporuku </strong><br>
                    Isporuke vrsimo ponedeljkom i cetvrtkom. Dostavu vrsimo na 2,3 dana. 
                    Ukoliko dodje do bilo kakvih gresaka pri isporuci obavezno posaljite 
                    poruku na nasoj <a href="{{ url('/kontakt') }}">kontakt</a> strani sa naslovom "Greska" 
                    kako bi sto pre resili problem. 
                </p>
            </div>
            <div class="col-md-6">
                <img src="images/lilies.jpg" alt="onama" class="img-thumbnail">
            </div>


    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="images/4.jpg" alt="onama" class="img-thumbnail" >
        </div>
            <div class="col-md-6" align="center">
                
                <p class="par">
                <h4>Korisne informacije</h4>
                    <strong><em>Radno vreme:</em></strong><br>
                    Ponedeljak – petak: 09h do 21h<br>
                    Subota: 09h do 19h<br>
                    Nedelja: ne radimo<br><br>

                    <strong><em>Telefoni:</em></strong><br>
                    060/3481-730<br>
                    062/3910-223<br><br>

                    <strong><em>Adresa:</em></strong><br>
                    Savski nasip 7, Beograd 11000<br>
                    
                </p>
            </div>
    </div>
</div>



@endsection