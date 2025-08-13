<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Florapro</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/stil.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/footerstil.css')}}" rel="stylesheet">


    <!-- Scripts 
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])-->
        @livewireStyles
    </head>
    <body>
        <div id="app" class="container">
         

    @include('layouts.inc.frontend.header')
    @include('layouts.inc.frontend.navbar')
    



    <main >
        @yield('content')
    </main>
    @include('layouts.inc.frontend.footer')


</div>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/js/all.min.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13/build/alertify.min.js"></script>
<script>
    window.addEventListener('message', event => {
        if(event.detail){
            alertify.set('notifier', 'position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type)
        }
    });
</script>
@livewireScripts
</body>
</html>