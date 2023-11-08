@extends('pages.master')

@section('pagetitle','Project Evaluation Institute')


@section('pagecontent')
<!-- Start #page-title-->
<section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/m31/images/background/evaluation.jpg')}}" alt="Data Collection in Zambia"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="title text-center">
            <div class="title-heading">
              <h1>Process, Outcome, Impact, and Summative Evaluation</h1>
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
                <h5>OECD-DAC criteria</h5>
                <p>Our valuation standards are entrenched in existing international guidelines particularly the OECD-DAC criteria of  relevance, coherence, effectiveness, efficiency, impact and sustainability.</p>
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
                <h3 class="heading-title" style="color: #054950;">Our Approch to Evaluation</h3>
                <p style="font-size: 15pt; text-align:justify;">
                    M31 designs and implements both formative (process) and summative (outcome) evaluations at the project, program, portfolio, and organization levels of analysis, for organisations in the development and humanitarian aid sector across the globe
                </p>
                <p style="font-size: 15pt; text-align:justify;">Our approach promotes the engagement of stakeholders as an important component of the evaluation process. Stakeholders play a key role by offering input throughout the evaluation process to ensure effective and useful reporting of evaluation results. We encourage input and participation from the various stakeholders at critical points along the way to ensure the effective use of evaluation results. To maximize stakeholder involvement and expertise, we keep the lines of communication open from the initial stages of planning through reporting and dissemination. Our desire is for evaluation recommendations and findings to inform decision making and lead to program improvement. We therefore typically use a participatory evaluation approach in which all stakeholders, including beneficiaries, work together in designing, carrying out and interpreting the evaluation.</p>
               
              </div>
              <div class="entry-bio entry-bio-2">
                <h3 class="heading-title" style="color: #054950;">Evaluation Criteria</h3>
                <div class="row">
                    <div class="col-12 col-lg-12"> 
                        <p style="font-size: 15pt; text-align:justify;"> Our evaluation standards are entrenched in existing international guidelines particularly the OECD-DAC criteria of  relevance, coherence, effectiveness, efficiency, impact and sustainability.</p>
                        <img class="entry-chart" src="{{('assets/images/background/evaluation_criteria.png')}}" alt="Training of data collection staff"/></div>
                  <div class="col-12 col-lg-12">
                    
                    <p style="font-size: 15pt; text-align:justify;">M31 conducts systematic and impartial assessments of projects, programmes, strategies, and policies. We provide insights, data, and recommendations on development and humanitarian programmes by NGOs and other local and international institutions.</p>
                  </div>
                  
                </div>
              </div>
            
            
           
             
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