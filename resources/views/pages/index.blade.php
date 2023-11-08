@extends('pages.master')
@section('pagetitle','Data Collection firm in Zambia')
@section('topjs')
<style type="text/css">
		
  /* Specific mapael css class are below
   * 'mapael' class is added by plugin
  */

  .mapael .map {
      position: relative;
      max-width: 95%;
      
  }

  .mapael .mapTooltip {
      position: absolute;
      background-color: #fff;
      moz-opacity: 0.70;
      opacity: 1.0;
      filter: alpha(opacity=70);
      border-radius: 10px;
      padding: 10px;
      z-index: 1000;
      max-width: 200px;
      display: none;
      color: #343434;
  }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script src="{{asset('assets/m31/js/jquery.mapael.min.js')}}" charset="utf-8"></script>
<script src="{{asset('assets/m31/js/africa.js')}}"></script>
<script src="{{asset('assets/m31/js/countries.js')}}"></script>
@stop

@section('pagecontent')
<section class="slider slider-1" id="slider-1">
    <div class="container-fluid pr-0 pl-0">
      <div class="carousel owl-carousel custom-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800" data-slider-id="#custom-carousel">
        <!--  Start .slide-->
        <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
          <div class="bg-section"><img src="{{asset('assets/m31/images/background/bg1.jpg')}}" alt="M31 Research Background Image"/></div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-7">
                <div class="slide-content">
                  <h2 class="slide-headline" style="font-size: 70px;">Your Research Partner in Zambia</h2>
                  <p class="slide-desc" style=" font-size: 22px;">We provide reliable data, research, and insights to private and public organisations, multilateral organisations, and non-profits from around the world.</p>
                  <div class="slide-buttons">
                   <a class="btn btn--white" href="{{route('partner')}}">Partner with Us</a>
                  </div>
                </div>
                <!-- End .slide-content -->
              </div>
            </div>
            <!--  End .row-->
          </div>
        </div>
        
      </div>
    </div>
    <!--  End .container-fluid-->
  </section>

  <section class="services-bar" id="servicesBar">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-12 col-md-6 col-lg-3 services-bar-card active">
          <div class="thumb-body"> 
            <h3>What we do <i class="fa fa-arrow-right"></i></h3>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i class="thumb-icon fa fa-database"></i>
          <div class="thumb-body"> 
            <p>Data</p>
            <h3> <a href="{{route('datacollection')}}">Data Collection & Quality Assurance</a></h3>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i class="thumb-icon fa fa-search"></i>
          <div class="thumb-body"> 
            <p>Research</p>
            <h3> <a href="{{route('research')}}"> Multiple methods Research</a></h3>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 services-bar-card"> <i class="thumb-icon fa fa-check-circle"></i>
          <div class="thumb-body"> 
            <p>Inisght</p>
            <h3> <a href="{{route('insight')}}">Reliable information & publications</a></h3>
          </div>
        </div>
        
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>

  <!--
  ============================
  About #3 Section
  ============================
  -->
  <section class="about about-2 about-3" id="about-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5">
          <div class="heading heading-9">
            <h2 class="heading-title" style="color: #006666;">A deep understanding of the Zambian context</h2>
          </div>
          <div class="about-block"> 
            <div class="block-left"> 
              <p style="font-size: 15pt; text-align: justify;">Successfully working with local communities requires a deep appreciation and respect for their culture, beliefs, and practices. M31 Research empowers local communities in Zambia by engaging staff who live in the localities in which we operate.</p>
              <p style="font-size: 15pt; text-align: justify;">This participatory approach to research allows us to gian local support and efficiently meet government requirements including obtaining Zambian regulatory approvals.</p>
            </div>
          </div>
           <div class="signature-block">
            <div class="signature-body"> 
              <a href="{{route('partner')}}" class="btn btn-info btn--inverse" style="background: #006666;"> <i class="fa fa-solid fa-at"></i> Contact Us</a>
            </div>
          </div>
          
        </div>
        <!-- End .col-lg-6-->
        <div class="col-12 col-lg-6 offset-lg-1">
          <div class="about-img">
            <div class="bg-section"><img class="img-fluid" src="{{asset('assets/m31/images/background/zambia_enumerator.jpg')}}" alt="Zambian Cultural Context"/></div>
            <div class="about-card">
              <h6>M31 Research understands the local context in Zambia.</h6>
                <a href="{{route('caps')}}" target="_blank"><i class="icon-arrow-right"></i> Download Company Profile</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>
  <!--
  ============================
  Services Bar Section
  ============================
  
 <section class="bg-grey" style="padding-top:10px; padding-bottom:10px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="mapcontainer">
            <div class="map">
                <span>M31 Research Regional Reach Map</span>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          
            <h4 style="color: #006666;">Our Multi-Country Network</h4>
            <p style="line-height: 15pt; font-family: Roboto; text-align:justify;" class="bold">With our office in Zambia, M31 Research has a presence in several African countries through satellite offices, strategic partnerships, and country representatives. Our multi-country presence allows us to smoothly execute large scale multi-country projects.</p>

<div class="row">
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="{{route('zambia')}}">
    <img  class="rounded"  src="{{asset('assets/m31/images/flags/zm.svg')}}" alt="Zambia"></a>
  <figcaption class = "figure-caption">Zambia</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#">
    <img  class="rounded"  src="{{asset('assets/m31/images/flags/bw.svg')}}" alt="Botswana"></a>
  <figcaption class = "figure-caption">Botswana</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#">
    <img  class="rounded"  src="{{asset('assets/m31/images/flags/na.svg')}}" alt="Namibia"></a>
  <figcaption class = "figure-caption">Namibia</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style=" width:20%; ">
  <a href="#">
    <img  class="rounded"  src="{{asset('assets/m31/images/flags/zw.svg')}}" alt="Zimbabwe"></a>
  <figcaption class = "figure-caption">Zimbabwe</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style=" width:20%; ">
    <a href="#">
      <img  class="rounded"  src="{{asset('assets/m31/images/flags/mw.svg')}}" alt="Malawi"></a>
    <figcaption class = "figure-caption">Malawi</figcaption>
    </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
    <a href="#">
      <img  class="rounded"  src="{{asset('assets/m31/images/flags/za.svg')}}" alt="South Africa"></a>
    <figcaption class = "figure-caption">South Africa</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
    <a href="#">
      <img  class="rounded"  src="{{asset('assets/m31/images/flags/ls.svg')}}" alt="Lesotho"></a>
    <figcaption class = "figure-caption">Lesotho</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
    <a href="#">
      <img  class="rounded"  src="{{asset('assets/m31/images/flags/sz.svg')}}" alt="Eswatini"></a>
    <figcaption class = "figure-caption">Eswatini</figcaption>
  </div>
</div>
<div class="row">
  
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/tz.svg')}}" alt="Tanzania"></a>
  <figcaption class = "figure-caption">Tanzania</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/ao.svg')}}" alt="Angola"></a>
  <figcaption class = "figure-caption">Angola</figcaption>
  </div>
  
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/mz.svg')}}" alt="Mozambique"></a>
  <figcaption class = "figure-caption">Mozambique</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
    <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/cd.svg')}}" alt="DRC"></a>
    <figcaption class = "figure-caption">Congo DR</figcaption>
  </div>
  
</div>
<div class="row">
  
    <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/rw.svg')}}" alt="Rwanda"></a>
  <figcaption class = "figure-caption">Rwanda</figcaption>
  </div>
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/ss.svg')}}" alt="South Sudan"></a>
  <figcaption class = "figure-caption">South Sudan</figcaption>
  </div>
  
  <div class="col-xs-6 col-sm-3" style="width:20%; ">
  <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/ke.svg')}}" alt="Kenya"></a>
  <figcaption class = "figure-caption">Kenya</figcaption>
  </div>

  <div class="col-xs-6 col-sm-3" style="width:20%; ">
    <a href="#"><img  class="rounded"  src="{{asset('assets/m31/images/flags/et.svg')}}" alt="Ethiopia"></a>
    <figcaption class = "figure-caption">Ethiopia</figcaption>
    </div>
  
</div>

 


</div>
</div>
</div>
</section>
 
      ============================
      Services Bar Section
      ============================
      -->
      <section class="services-bar" id="servicesBar">
        <div class="container">
          <div class="heading" style="padding-bottom:50px;">
            <h2 class="heading-title" style="color: #006666; padding-bottom:5px;">Our Sector Experties</h2>
            <p style="font-size: 30px; line-height:1.5; text-align: justify;">We divide our work into the broad categories of Social Development, Natural Resources, Economic Development, and Governance. M31 Research provides data, research, and insight in each work category in Zambia. Download our <a href="{{route('caps')}}" target="_blank"><i class="fa fa-download"></i> company profile (.pdf) </a> to learn more.</p>
          </div>
          <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-3 services-bar-card">
              <i class="thumb-icon"> 
              <img src="{{asset('assets/m31/images/icons/people.png')}}" alt="People" style="width: 50px;"></i>
              <div class="thumb-body"> 
                <p>Society</p>
                <h3> <a href="#" onClick="return false;">Social Development</a></h3>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 services-bar-card">
              <i class="thumb-icon">
              <img src="{{asset('assets/m31/images/icons/natural-resources.png')}}" alt="Natrual Resources" style="width: 50px;"></i>
              <div class="thumb-body"> 
                <p>Nature</p>
                <h3> <a href="#" onClick="return false;">Natural Resources</a></h3>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i class="thumb-icon"> 
              <img src="{{asset('assets/m31/images/icons/analytics.png')}}" alt="Economic Development" style="width: 50px;"></i>
              <div class="thumb-body"> 
                <p>Economy</p>
                <h3> <a href="#" onClick="return false;">Economic Development</a></h3>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 services-bar-card"><i class="thumb-icon"> 
              <img src="{{asset('assets/m31/images/icons/government-building.png')}}" alt="Governance" style="width: 50px;"></i>
              <div class="thumb-body"> 
                <p>Governance</p>
                <h3> <a href="#" onClick="return false;">Governance</a></h3>
              </div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!--

<!--
  ============================
  Clients #1 Section
  ============================
  -->
  < <section class="work work-projects bg-gray" id="workProjects">
    <div class="container">
      <div class="row"> 
        <div class="col-12">
          <div class="heading">
            <h2 class="heading-title" style="color: #006666;">Explore our Recent Work</h2>
          </div>
        </div>
      </div>
      <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
        @foreach($articles as $article)
        <div class="case-item">
          <div class="case-item-warp">
            <div class="case-img"><img src="{{$article->picture}}" alt="{{$article->title}}"/></div>
            <div class="case-content">
              <div class="case-title">
                <h4><a href="{{route('work.show', $article->slug)}}">{{$article->title}}</a></h4>
              </div>
              <div class="case-cat"><a href="javascript:void(0)">analytics</a>
                <a href="javascript:void(0)">optimization</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>
  <section class="clients clients-carousel clients-1 bg-gray">
    <div class="container">
      <h5 class="text-center" style="color: #006666;">We are Trusted by</h5>
      <div class="row">
        <div class="col-12">
          <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="3000">
            
            <div class="client">
              <img src="{{asset('assets/m31/images/clients/GrasrootSoccerLogo.png')}}" alt="Grassroot Soccer"/></div>
            <div class="client">
                <img src="{{asset('assets/m31/images/clients/BusaraLogo.png')}}" alt="Busara"/></div>
            <div class="client">
              <img src="{{asset('assets/m31/images/clients/SaveTheChildrenLogo.png')}}" alt="Save the Children"/></div>
              <div class="client">
                <img src="{{asset('assets/m31/images/clients/UNICEFLogo.png')}}" alt="UNICEF Logo"/></div>
              <div class="client">
                <img src="{{asset('assets/m31/images/clients/project-giz.png')}}" alt="GIZ Zambia"/></div>
            <div class="client">
              <img src="{{asset('assets/m31/images/clients/UniversityofTorontoLogo.png')}}" alt="University of Toronto"/>
            </div>
          </div>
        </div>
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>
@stop