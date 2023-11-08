@extends('pages.master')

@section('pagetitle','Research and Management Consultant in Africa')

@section('pagecontent')
<!-- Start #page-title-->
<section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/m31/images/background/evaluation.jpg')}}" alt="Data Collection in Zambia"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="title text-center">
            <div class="title-heading">
              <h1>Bespoke and Advisory Services</h1>
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

  <section class="service-single case-study case-study-2 pb-70" id="service-single">
    <div class="container">
      <div class="row">
        <!-- 
        ============================
        Sidebar Area
        ============================
        -->
        <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
          <div class="sidebar sidebar-case-study">
            <!-- Start .widget-categories-->
            
            <!-- End .widget-categories -->
            <!-- Start .widget-reservation-->
            <div class="widget widget-reservation">
              <div class="widget-content">
                <h5>Tailored Solutions</h5>
                <p>M31 offers research and advisory services that are tailored according to your organisations needs. We discuss client needs before suggesting an approach or developing a programme.</p>
                <a class="btn btn--transparent btn--inverse btn--block" href="{{route('partner')}}"> <i class="fa fa-envelope"></i> Contact Us</a>
              </div>
            </div>
            <!-- End .widget-reservation-->
            <!-- Start .widget-download-->
            <div class="widget widget-download">
              <div class="widget-title">
                <h5>downloads</h5>
              </div>
              <div class="widget-content">
                <ul class="list-unstyled">
                  <li><a href="{{route('caps')}}" target="_blank"> <span>Company Profile</span><span class="icon">pdf</span></a></li>
                </ul>
              </div>
            </div>
            <!-- End .widget-download-->
          </div>
        </div>
        <!-- End .col-lg-4 -->
        <div class="col-sm-12 col-md-12 col-lg-8">
          <!-- Start .case-study-entry-->
          <div class="case-study-entry">
            <div class="entry-content">
              <div class="entry-bio">
                <h3 class="heading-title" style="color: #054950;">Capcacity Building of Staff</h3>
                <p style="font-size: 15pt; text-align:justify;">
                  From practical hands-on training to strategic-level overviews, we deliver online training, tailored to suit your organisation's needs.
                  We offer tailored online and on-site training and briefings on Theory of Change, measuring social impact, commissioning for outcomes and social value, SROI, measuring local economic impact, community economic development, and more.
                  We will always discuss your needs in full before suggesting an approach or developing a programme.
                </p>
               
              </div>
              <div class="entry-bio">
                <h3 class="heading-title" style="color: #054950;">Strategic Planning</h3>
              
                <p style="font-size: 15pt; text-align:justify;">M31 strategic planning experts help analyze the available options and work with organisations to determine a clearer, achievable, and cost effective course of action at minimal risk. Our experts help to develop future organisation strategies that aim at meeting the organisation's long-term goals.</p>
                
            </div>
            <div class="entry-bio">
              <h3 class="heading-title" style="color: #054950;">Customer Satisfaction Surveys</h3>
            
              <p style="font-size: 15pt; text-align:justify;">M31 customer survey uses best-practice metrics like Net Promoter Score (NPS), Customer Effort Score (CES), and other key performance indicators (KPIs) to help you benchmark your results against industry peers. We inform and inspire our clients through powerful data, empowering technology and high-impact consulting, all designed to help our clients make better decisions and achieve faster progress.</p>
              
          </div>
          <div class="entry-bio">
            <h3 class="heading-title" style="color: #054950;">Public Opinion Polls</h3>
          
            <p style="font-size: 15pt; text-align:justify;">M31 conducts custom, local opinion research for universities, non-profits, governments and small to medium-sized businesses, ad agencies and public relations firms. Full projects may employ gold-standard random-digit-dial telephone surveys or hybrid methodologies to gain key insights from a wide range of target populations. All M31 Poll projects employ advanced technologies and rigorous science to provide data on a population as a whole, along with key demographic subgroups. </p>
            
        </div>
          </div>
          <!-- End .case-study-entry-->
        </div>
        <!-- End .col-lg-8-->
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>
  
@stop