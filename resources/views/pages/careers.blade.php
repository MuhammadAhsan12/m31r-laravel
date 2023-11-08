@extends('pages.master')
@section('pagetitle','M31 Research Jobs')
@section('pagecontent')
    <!-- Start #page-title-->
    <section class="page-title page-title-10 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="{{asset('assets/m31/images/background/M31_Research_diverse_team.jpg')}}" alt="Background"/></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="title">
                <ol class="breadcrumb justify-content-lg-start">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol>
                <div class="title-heading text-lg-left">
                  <h1>Join our team</h1>
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
      Careers Section
      ============================
      -->
      <section class="careers" id="careers">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="heading text-center">
                <p class="heading-subtitle">Make a difference with M31 Research</p>
                <h2 class="heading-title">Join a Global team of enthusiastic professionals that are dedicated to delivering excellence.</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                <div class="career-item">
                  <div class="career-item-warp">
                    <div class="career-meta">
                      <p class="career-type">full time</p>
                      <p class="career-place">Malawi</p>
                    </div>
                    <!-- End .career-type-->
                    <div class="career-content"> 
                      <h4 class="career-title">Country Director</h4>
                      <p class="career-desc">The Country Director is M31’s official representative in a country. S/He is in charge of the smooth running of the company's operations and mobilizes the resources necessary for projects to run effectively and supervises the administration of these resources.</p><a class="career-more" href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                    </div>
                    <!-- End .career-content -->
                  </div>
                  <!-- End .career-item-->
                </div>
                <div class="career-item">
                  <div class="career-item-warp">
                    <div class="career-meta">
                      <p class="career-type">full time</p>
                      <p class="career-place">Lesotho</p>
                    </div>
                    <!-- End .career-type-->
                    <div class="career-content"> 
                      <h4 class="career-title">Country Coordinator</h4>
                      <p class="career-desc">The Country Coordinator bears the overall responsibility for the development, coordination, and implementation of country projects. It is a pioneering role building up new structures, developing new projects, finding new partners and personnel.</p><a class="career-more" href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                    </div>
                    <!-- End .career-content -->
                  </div>
                  <!-- End .career-item-->
                </div>
                <div class="career-item">
                  <div class="career-item-warp">
                    <div class="career-meta">
                      <p class="career-type">Contractor</p>
                      <p class="career-place">Global</p>
                    </div>
                    <!-- End .career-type-->
                    <div class="career-content"> 
                      <h4 class="career-title">Research Consultant</h4>
                      <p class="career-desc">Research consultants conduct studies on topics in their specialized fields. They gather and analyze data, design research projects, perform in-depth research, and create reports on their findings. They ensure that quality standards and deadlines are met.</p><a class="career-more" href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                    </div>
                    <!-- End .career-content -->
                  </div>
                  <!-- End .career-item-->
                </div>
                
               
              </div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
@stop