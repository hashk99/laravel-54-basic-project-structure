<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>Laravel</title>
        @section('head')
            @include('includes.common.main_css') 
        @show
 
        <script>
            window.Laravel =  <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        @section('head')
        @show
    </head>

    <body >
    <div id="app" ></div>
        {{-- PRELOADER --}}
       <!--  <div id="app-loader" class="page-loading-overlay">
            <div class="loader">
               
            </div>
        </div> -->
        {{-- END PRELOADER --}}
  
      
        <div id="dashboard-wapper" >
            @include('includes.common.header') 
            @yield('content') 
            @include('includes.common.footer') 
        </div>
        
    @section('javascript')
     @include('includes.common.main_js')
       
    @show
 
    </body>
</html>