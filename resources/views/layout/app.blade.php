<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

         <!-- Meta description -->

        <meta charset="utf-8">
        <meta http-equip="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'laravel')}}</title>

        
        <!-- stylesheet -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
         <!-- Fonts -->
         <link rel="dns-prefetch" href="//fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
        
        
    </head>
    <body>
       
        @include('inc.navbar')
    
       @yield('hr') 
      @yield('content') 
      @yield('content_home') 
      @yield('hr_home') 
      @yield('content_about') 
      @yield('hr_about') 
      @yield('Get_involve') 
      @yield('hr_involve') 
      @yield('Subscribe')
      @yield('make_your_journey')
      @include('inc.footer')

    </body>
</html>
