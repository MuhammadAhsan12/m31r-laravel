@extends('pages.master')

@section('pagetitle','About M31 Research')

@section('pagecontent')
<section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/m31/images/background/m31_andromeda.png')}}" alt="Background"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="title text-center">
            <div class="title-heading">
              <h1>M31 Research</h1>
              <div class="clearfix"></div>
                <ol class="breadcrumb justify-content-center">
                 <p class="text-white">Data | Research | Insight</p>
                </ol>
            </div>
          </div>
          <!-- End .title -->
        </div>
        <!-- End .col-lg-8 -->
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>
 <!-- Start #page-title-->

  <!-- End #page-title-->
  <!--
  ============================
  About #5 Section
  ============================
  -->
  <section class="about about-4" id="about-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="about-img about-img-left">
            <div class="about-img-warp bg-overlay">
              <div class="bg-section"><img class="img-fluid" src="{{asset('assets/m31/images/background/m31_team.jpg')}}" alt="about Image"/></div>
            </div>
          
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="heading heading-3">
            <h1 class="heading-title" style="color: #054950;">Your Research Partner in Zambia</h1>
          </div>
          <div class="about-block"> 
            <div class="row">
              <div class="col-12 col-lg-8">
                <div class="block-left"> 
                  <p style="font-size: 22px; text-align:justify;">M31 Research believes in creating lasting partnerships with our clients. We value our clients and work hard to deliver beyond their expectations.</p> 
                    
                  <p style="font-size: 22px; text-align:justify;">M31 Research works in Zambia where we have carefully selected teams of highly competent experts and managers supported by a vast network of trained supervisors and enumerators.
                  </p>

                  <p style="font-size: 22px; text-align:justify;">M31 has the capacity to deploy multiple field teams equipt with tablet computers to implement digital data collection and quality assurance procedures ensuring high quality research.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="block-right">
                  <div class="detail"> 
                    <h6>Vision </h6>
                    <p>A world where all decisions are informed by evidence.</p>
                  </div>
                  <div class="detail"> 
                    <h6>Mission</h6>
                    <p>To deliver a world class customer experience through the effective use of technology and
                        management principles.</p>
                  </div>
                  <div class="detail"> 
                    <h6>Values</h6>
                    <p>Integrity and Hard work.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- End .col-lg-6-->
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>


@stop