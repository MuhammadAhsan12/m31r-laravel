<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose Business html5 template"/>
    <title>{{$article->title}}</title>
    <link href="{{asset('assets/m31/images/favicon/favicon.png')}}" rel="icon"/>
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets==
    -->
    <link href="{{asset('assets/m31/css/vendor.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/m31/css/style.css')}}" rel="stylesheet"/>
  </head>
  <body>
 
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
      <!-- Start .header-1-->
      @include('partials.header')
      <!-- Start #page-title-->
      <section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{asset('assets/m31/images/page-titles/1.jpg')}}" alt="{{$article->title}}"/></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-12">
              <div class="title text-center">
               
                <div class="title-heading">
                  <h1>{{$article->title}}</h1>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- End .title -->
            </div>
            <!-- End .col-lg-8 -->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!-- End #page-title -->
      <!--
      ============================
      Blog Single Section
      ============================
      -->
      <section class="blog blog-single blog-standard" id="blog">
        <div class="container">
          <div class="row">
        
            <div class="col-sm-12 col-md-12 col-lg-12">
              <!-- Blog Entry-->
              <div class="blog-entry">
                {!!$article->body!!}
                <!-- End .entry-comments-->
              </div>
              <!-- End .blog-entry-->
            </div>
            <!-- End .col-lg-8-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!--
      ============================
      Footer #1
      ============================
      -->
      @include('partials.footer')
      <div class="backtop" id="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="{{asset('assets/m31/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/m31/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/m31/js/functions.js')}}"></script>
  </body>
</html>