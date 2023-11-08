@extends('pages.master')
@section('pagetitle','Data Collection Firm in Zambia')
@section('pagecontent')
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
  <div class="bg-section"><img src="{{asset('assets/m31/images/countries/zambia/cover.jpg')}}" alt="Data Collection in Zambia"/></div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="title text-lg-left"> 
          <div class="title-sub-heading">
            <p>M31 Research</p>
          </div>
          <div class="title-heading">
            <h1>Data Collection And Research Work in Zambia</h1>
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

  
<section class="about about-4" id="about-4">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5">
        <div class="about-img about-img-left">
          <div class="about-img-warp bg-overlay">
            <div class="bg-section">
              <img class="img-fluid" src="{{asset('assets/m31/images/countries/zambia/enumerator.jpeg')}}" alt="Enumerator"/></div>
          </div>
          <div class="counter">
            <div class="counter-icon"> <i class="fa fa-solid fa-users"></i></div>
            <div class="counter-num"> <span>500+</span>
            </div>
            <div class="counter-name">
              <h6>Enumerators</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <div class="heading heading-3">
          <p class="heading-subtitle">Providing Full Range Of Research Services in Africa.</p>
          <h3 class="heading-title">Data Collection and Research in Zambia.</h3>
          <a href="{{route('caps')}}" class="text-success">M31 Zambia Capability Statement (PDF) <i class="fa fa-download"></i></a>
        </div>
        <div class="about-block"> 
          <div class="row">
            <div class="col-12 col-lg-12">
                <p style="font-size: 18px; text-align:justify;">M31 Research has its headquarters in Lusaka Zambia with more than 16 full time consultants, and 40 subject matter experts. We maintain a carefully constructed roster of more than 500 trained enumerators distributed across the 10 provinces of the country. Our typical enumerator has at least a college diploma and can speak 3 or more languages.</p>
                <p style="font-size: 18px; text-align:justify;">M31 Research is fully authorised to conduct research in all 10 provinces of Zambia. Our logistical capabilities allow us to collect data from the remotest corners of the country using digital data collection tools. Our team of experienced qualitative researchers leads FGDs, KIIs, Observations, and transcription.</p>
            </div>
          </div>
        </div>
       <div>
        <h4 style="color:#006666">Contact us:
         <br><br> <a href="mailto:zambia@m31r.com">Email: zambia@m31r.com</a><br>
         
        </h4>
        <Address style="font-size: 20px;">Address: 46 Senanga Road, Handsworth, Lusaka Zambia</Address>
       </div>
      </div>
      <!-- End .col-lg-6-->
    </div>
    <!-- End .row-->
  </div>
  <!-- End .container-->
</section>
 
@stop