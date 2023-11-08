<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="author" content="Chisangu Matome"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="description" content="Research Company in Africa, Zambia, Malawi, Botswana, Tanzania, Kenya, Zimbabwe, South Africa, Rwanda, South Sudan, Liberia, Sierra Leone, Lesotho, eSwatini"/>
        <title>@yield('pagetitle') - M31 Research</title>
        <link href="{{asset('assets/m31/images/favicon/favicon.png')}}" rel="icon"/>
        <!--  Fonts ==
          /home/sonny/projects/m31/m31/public/assets/images/favicon/
        -->
        <link rel="preconnect" href="https://fonts.gstatic.com"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
        <!--  Stylesheets==
        -->
        <link href="{{asset('assets/m31/css/vendor.min.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/m31/css/style.css')}}" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
        @yield('topjs')
      </head>
  <body>

    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
      <!-- Start .header-1-->
      @include('partials.header')
      <!--
      ============================
      Slider #1 Section
      ============================
      -->
     @yield('pagecontent')
      
     @include('partials.footer')
      <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
    </div>
    <!--  Footer Scripts==
    -->
    
    <script src="{{asset('assets/m31/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/m31/js/functions.js')}}"></script>
  </body>
</html>