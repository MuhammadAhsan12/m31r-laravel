@extends('pages.master')
@section('pagetitle','Partner with M31 Research')

@section('pagecontent')
<section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/m31/images/get_in_touch.jpg')}}" alt="Get in Teouch with M31 Research"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="title text-center">
            <div class="title-heading">
              <h1>Partner with M31 Research</h1>
              <div class="clearfix"></div>
                <ol class="breadcrumb justify-content-center">
                 <p class="text-white">Get in touch with us for partership opportunities.</p>
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
      <section class="about about-2 about-5" id="about-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="heading heading-9">
                <p class="heading-subtitle">Your Research Partner in Africa</p>
               <h2 class="heading-title" style="color: #054950;">M31 works with private and public organisations, multilateral organisations, and non-profits from around the world.</h2>
              </div>
             
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="address">
                    <div class="office"> 
                      <h4>General Inquiries</h4>
                    </div>
                    <ul class="list-unstyled info">
                        <li style="font-size: 25px;"><span class="fas fa-envelope"></span><a href="mailto:info@m31r.com"> info@m31r.com</a></li>
                        <li style="font-size: 25px;"><span class="fas fa-phone-alt"></span><a href="tel:00260978937745"> +260 978 937 745</a></li>
                        <li style="font-size: 25px;"><span class="fas fa-clock"></span> Central African Time (GMT+2)</li>
                    </ul>
                  </div>
                </div>
             
              
              </div>
            </div>
            <!-- End .col-lg-6-->
            <div class="col-12 col-lg-5 offset-lg-1">
              <div class="about-img abput-img-text">
                <div class="about-img-warp">
                  <div class="bg-section"><img class="img-fluid" src="{{asset('assets/m31/images/get_in_touch.jpg')}}" alt="M31 Research Team"/></div>
                </div>
                <div class="about-card">
                  <h6>World-Class Research Services</h6>
                  <p>Providing full range of services in data collection, research, and insight.</p><a href="{{route('caps')}}" target="_blank"><i class="icon-arrow-right"></i> Download Company Profile</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>

@stop