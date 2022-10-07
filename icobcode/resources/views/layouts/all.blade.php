<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{'Icob'}}</title>
        <!-- Tailwind CSS  CDN -->
         <script src="https://cdn.tailwindcss.com"></script>
      
       
    </head>
    <body >
       @include('includes.navbar')

        @yield('content')


      @include('includes.script')      
    </body>
</html>
