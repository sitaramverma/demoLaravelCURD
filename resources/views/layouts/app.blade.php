<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','My Laravel')}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body style="width:100%">
         @include('inc.navbar')
         {{-- <div class="container"> --}}
                @include('inc.messages')
                @yield('content')
         {{-- </div> --}}

         <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
         <script>
             CKEDITOR.replace( 'article-ckeditor' );
         </script>
    </body>
</html>
