@extends('pages.master')

@section('pagetitle','Data Collection Firm in Africa')


@section('pagecontent')
<!-- Start #page-title-->
<section class="page-title page-title-11 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/m31/images/background/datacollection.jpeg')}}" alt="Data Collection in Zambia"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="title text-center">
            <div class="title-heading">
              <h1>Data Collection, Survey Logistics, and Quality Assurance</h1>
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
                <h5>Dedicated Survey Staff & Responsive Management</h5>
                <p>Our regional presence ensures the timeliness, cost efficiency, and compliance adherence required to meet client timelines and deliverables.</p>
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
                <h3 class="heading-title" style="color: #054950;">Translation and Programming of Survey Instruments</h3>
                <p style="font-size: 15pt; text-align:justify;">With over 2,000 languages spoken by it's inhabitants, Africa is one of the most linguistically divers regions in the world. For example, South Africa has 11 major languages, Zambia has seven (7), and Ghana has six (6). Conducting surveys in such linguistically diverse countries requires translation and contextualisation of survey instruments to suit the target populations. 
                </p>
                <p style="font-size: 15pt; text-align:justify;">
                  As part of our data collection support services, M31 Research translates and back-translates survey instruments in each of the countries we operate. Translation and back-translation is conducted by two independent teams of at least three (3) translators who later meet to discuss the differnt translation choices until a final translated instrument is produced.</p>
                <p style="font-size: 15pt; text-align:justify;">
                All our quantitative surveys are conducted using Computer Assisted Personal Interviews (CAPI). Within our organisation are highly skilled CAPI programmers proficient in popular digital data collection platforms including ODK, SurveyCTO, KoboToolbox, CSPro, Survey Solutions, and CommCare.
                </p>
              </div>
              <div class="entry-bio entry-bio-2">
                <h3 class="heading-title" style="color: #054950;">Recruiting and Training of Data Collection Staff</h3>
                <div class="row">
                    <div class="col-12 col-lg-12"> <img class="entry-chart" src="{{('assets/images/training.jpg')}}" alt="Training of data collection staff"/></div>
                  <div class="col-12 col-lg-12">
                    <p style="font-size: 15pt; text-align:justify;"> M31 Research maintains a vast network of Supervisors and Enumerators from all parts of the countries we operate in allowing us to quickly mobilise large teams of experienced survey staff. Given the challenges imposed by a culturally divers population in Africa, our Enumerators are carefully selected based on age, gender, education, and experience to suit each assignment. The Enumerators tend to be multilingual allowing for a versatile team that can traverse many parts of the country we are working in.</p>
                    <p style="font-size: 15pt; text-align:justify;">
                       We develop Enumerator Training Manuals that ensure standardised instruction during the training workshop and reliable reference in the field. The Enumerators receive training on all aspects of the data collection including a review of each survey question in a classroom setting.</p>
                   
                  </div>
                  
                </div>
              </div>
              <div class="entry-why">
                <div class="entry-bio">
                    <h3 class="heading-title" style="color: #054950;">Logistics for Data Collection</h3>
                    <p style="font-size: 15pt; text-align:justify;">Logistics are the backbone of successful data collection. We use our experience to navigate Government requirements and obtain permissions including IRB clearance quickly. M31 maintains the latets tablet computers, powerbanks, and smartphones for use in data collection.</p>
                </div>
                </div>
              <div class="entry-why">
                <div class="entry-bio">
                    <h3 class="heading-title" style="color: #054950;">Data Collection and Quality Assurance</h3>
                  <p style="font-size: 15pt; text-align:justify;">Our comprehensive and holistic quality assurance (QA) system produces and ensures quality data through six (6) components.</p>
                </div>
                <div class="row"> 
                  <div class="col-12 col-lg-6">
                    <div class="entry-bio entry-topic"> <i class="fas fa-check"></i>
                      <div class="entry-topic-body">
                        <h5>Effective Training of Staff</h5>
                        <p>Quality data can only come from well trained survey staff. Before data collection can start the staff are trained on survey best practices.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="entry-bio entry-topic"> <i class="fas fa-check"></i>
                      <div class="entry-topic-body">
                        <h5>Automated Data Quality Checks</h5>
                        <p>High Frequency Checks are critical to data quality especially when the survey is conducted by many teams that can not be observed at once.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="entry-bio entry-topic"> <i class="fas fa-check"></i>
                      <div class="entry-topic-body">
                        <h5>Backchecking</h5>
                        <p>Backcheckers re-interview a randomly selected sample of respondents to check for differences in key variables with the main interviewers.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="entry-bio entry-topic"> <i class="fas fa-check"></i>
                      <div class="entry-topic-body">
                        <h5>Respondent Tracking</h5>
                        <p>In panel studies data quality is affected by attrition. We use our local knowledge to find respondents even if they have moved.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="entry-bio entry-topic"> <i class="fas fa-check"></i>
                      <div class="entry-topic-body">
                        <h5>Geographical Information Systems</h5>
                        <p>We use modern technology such as GPS data to verify respondent locations and plan future visits.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="entry-bio entry-topic"> <i class="fas fa-check"></i>
                      <div class="entry-topic-body">
                        <h5>Frequent Reporting</h5>
                        <p>As an output of our QA system, daily, weekly, and monthly progress reports keep stakeholders informed about data quality and field challenges.</p>
                      </div>
                    </div>
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