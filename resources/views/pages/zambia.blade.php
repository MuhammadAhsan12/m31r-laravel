@extends('pages.master')
@section('pagetitle','Data Collection Firm in Zambia')
@section('header2')
     <div class="header-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3 class="header-title mb-20" data-aos="fade-up" data-aos-delay="500">Your Research Partner in Zambia</h3>
                        <p class="header-desc" data-aos="fade-up" data-aos-delay="600">M31 Research is a Zambian Research Consultancy firm whose services include evaluation study design, data collection and survey logistics, managing language and local context barriers, ethical clearance, and compliance with government requirements. 

                        </p>
                         <a href="{{route('caps')}}" class="btn btn-white text-secondary btn-lg " data-aos="fade-up" data-aos-delay="700">Download Company Profile<ion-icon name="arrow-forward"></ion-icon></a>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-img">
                            <img src="{{asset('assets/m31/images/bg/data_collection_in_zambia.png')}}" alt="M31 Research Data Collection in Zambia">

                        </div>
                    </div>

                </div>
            </div>
        </div>
@stop
@section('pagecontent')
    <!-- =========================== section feautures-->
    <section class="section is-sm section-feautures2">
        <!-- =========================== section companies-->
        <div class="container">
            <div class="section-head d-flex justify-content-between align-items-center">
                <h2 class="section-title  mr-5">Our Data Collection Methods</h2>
                <h2 class=" max-30">We are a Research Consultancy Company in Zambia</h2>
            </div>
            <div class="boxes">
                <div class="row min-30 flex center">
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-shadow">
                            <div class="box-particles">
                                <img src="{{asset('assets/m31/images/others/box-particles.svg')}}" alt="">
                            </div>
                            <div class="box-num">CATI</div>
                            <h3 class="box-title">Computer Assisted Telephone Interviews</h3>
                            <p class="box-desc">Telephone interviews are a cost effective alternative to in person interviews among respondents who have phone access. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-shadow">
                            <div class="box-particles">
                                <img src="{{asset('assets/m31/images/others/box-particles.svg')}}" alt="">
                            </div>
                            <div class="box-num">CAPI</div>
                            <h3 class="box-title">Computer Assisted Personal Interviews</h3>
                            <p class="box-desc">In person interviews allow for complex questionnaires because they can be explained by the interviewer.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">

                        <div class="box has-shadow">
                            <div class="box-particles">
                                <img src="{{asset('assets/m31/images/others/box-particles.svg')}}" alt="">
                            </div>
                            <div class="box-num">CAWI</div>
                            <h3 class="box-title">Computer Assisted Web Interviews</h3>
                            <p class="box-desc">Web interviews are the fastest and most cost effective type of data collection among literate respondents. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        
    </section>
    <!-- =========================== section About -->
    <section class="section is-sm section-about">
        <div class="container">
            <div class="row flex vcenter">
                <div class="col-lg-6">
                    <div class="section-head mb-lg-0">
                        <h5 class="section-subtitle ">Computer Assisted Telephone Interviews (CATI)</h5>
                        <h2 class="section-title ">Telephone Survey Company in Zambia</h2>
                        <p class="section-desc lead">M31 Research has experience in delivering CATI surveys in Zambia including nationally representative samples. </p>
                        <p class="section-desc lead">During telephone surveys, calls can be made to randomly generated numbers and also to specially selected respondents provided by the client. Whether by Random Digit Dialling (RDD) or previous study data, our sample management procedures ensure a high response rate and quality data.</p>
                        <p class="section-desc lead">
                        We pride ourselve on our responsiveness to client needs and ensure a project’s success by assigning experienced Project Managers for each assigment.
                        </p>
                        <a href="{{route('contact')}}" class="btn btn-primary ">Get In Touch With Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="about-img" src="{{asset('assets/m31/images/bg/call_center.png')}}" alt="">

                </div>

            </div>
        </div>
    </section>

  <section class="section is-sm is-dark-green bg-pattern ">
        <div class="container">
            <div class="plan-single">
                    <h1 class="text-center mb-0">Our Quality Assurance System</h1>
                    <p class="section-desc text-center font-weight-bold lead">Our comprehensive and holistic quality assurance (QA) system produces and ensures quality data.</p>
                <div class="row">
                <div class="col-md-12">
                   
                    <div class="boxes">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box  has-shadow has-left-icon">
                                    <div class="box-particles2">
                                        <img src="{{asset('assets/m31/images/others/box-particle-2.svg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="box-icon">
                                                <ion-icon name="pie-chart-outline"></ion-icon>                                      </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="box-title">Effective Training of Staff</h3>
                                            <p class="box-desc">Quality data can only come from well trained survey staff. Before data collection can start the staff are trained on survey best practices.
                                            </p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box  has-shadow has-left-icon">
                                    <div class="box-particles2">
                                        <img src="{{asset('assets/m31/images/others/box-particle-2.svg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="box-icon">
                                                <ion-icon name="analytics-outline"></ion-icon>                                    </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="box-title">Automated Data Quality Checks</h3>
                                            <p class="box-desc">High Frequency Checks are critical to data quality especially when the survey is conducted by many teams that can not be observed at once.
    
    
                                            </p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="box  has-shadow has-left-icon">
                                    <div class="box-particles2">
                                        <img src="{{asset('assets/m31/images/others/box-particle-2.svg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="box-icon">
                                                <ion-icon name="people-circle-outline"></ion-icon>                                      </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="box-title">Backchecking</h3>
                                            <p class="box-desc">Backcheckers re-interview a randomly selected sample of respondents to check for differences in key variables with the main interviewers.</p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box  has-shadow has-left-icon">
                                    <div class="box-particles2">
                                        <img src="{{asset('assets/m31/images/others/box-particle-2.svg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="box-icon">
                                                <ion-icon name="navigate-outline"></ion-icon>                                      </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="box-title">Respondent Tracking Protocols</h3>
                                            <p class="box-desc">In panel studies data quality is affected by attrition. We use our local knowledge to find respondents even if they have moved.</p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box  has-shadow has-left-icon">
                                    <div class="box-particles2">
                                        <img src="{{asset('assets/m31/images/others/box-particle-2.svg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="box-icon">
                                                <ion-icon name="map-outline"></ion-icon>                                      </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="box-title">Geographical Information Systems</h3>
                                            <p class="box-desc">We use modern technology such as Digital Data Collection, GPS data, and GIS tools to verify respondent locations and plan future visits.</p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="box  has-shadow has-left-icon">
                                    <div class="box-particles2">
                                        <img src="{{asset('assets/m31/images/others/box-particle-2.svg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="box-icon">
                                                <ion-icon name="document-text-outline"></ion-icon>                                      </div>
                                        </div>
                                        <div class="col">
                                            <h3 class="box-title">Frequent Reporting</h3>
                                            <p class="box-desc">As an output of our QA system, daily, weekly, and monthly progress reports keep stakeholders informed about data quality and field challenges.</p>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
                    <!-- .row -->
              
            </div>
        </div>
    </section>
  
    <!-- =========================== section Works-->
    <section class="section is-sm section-works">
        <img class="section-particle" src="assets/images/others/particle.svg" alt="">

        <div class="container">
            <div class="section-head flex between vcenter">
                <div>
                    <h5 class="section-subtitle"> Our Work </h5>
                    <h2 class="section-title"> Featured Projects<span class="text-primary">. </span></h2>

                </div>
                <a href="{{route('about')}}" class="btn btn-primary mt-sm-30 btn-round"> see more </a>
            </div>
            <div class="work-boxes work-boxes-slick">
                <div class="">
                    <div class="work-box">
                        <img class="work-img" src="assets/images/bg/sciz.png" alt="Evaluation of the EMPOWER Project">
                        <div class="work-head">
                            <h5 class="title"> <a href="#">Training of Implementing Partners for the CSO Sida Project in Evidence and Documentation</a> </h5>
                            <span class="sub-title"> Capacity Building </span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="work-box">
                        <img class="work-img" src="assets/images/bg/kids.png" alt="Baseline Evaluation for the Strong Bodies, Strong Minds Project">
                        <div class="work-head">
                            <h5 class="title"> <a href="#">Baseline Evaluation for the Strong Bodies, Strong Minds Project - The aims for this study is to enable the evaluation of the sport based SRHR and
                                MH support programme for YLWHIV in improving ART-adherence and other key MH and SRHR outcomes.</a> </h5>
                            <span class="sub-title"> CAPI </span>

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="work-box">
                        <img class="work-img" src="assets/images/bg/insured.png" alt="Development and Implementation of Index Insurance linked to PayGo Services in Zambia Data collection using Computer Assisted Telephone Interviewing">
                        <div class="work-head">
                            <h5 class="title"> <a href="#"> Data Collection for the Insurance for Rural Resilience and Economic Development (INSURED) Project. M31 Research conducted the Quantitative and Qualitative baseline data collection using CATI of 600 and 30 respondents respectively.</a> </h5>
                            <span class="sub-title"> CATI </span>

                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
  
    <!-- =========================== section Blog-->
    <section class="section is-sm section-blog">
        <div class="container">
            <div class="section-head  ">
                <h2 class="section-title is-center ">Latest Publications<span class="text-primary">. </span>
                </h2>
                <p class="section-desc is-center  ml-auto mr-auto mt-20">
                    Read our news articles to stay up to date with data collection issues in Zambia.
                </p>
            </div>

            <div class="work-boxes blog-boxes-slick">
                @foreach($articles as $article)
                <div class="">
                    <div class="post-wrap mt-0">
                        <a href="{{route('blog.show', $article->slug)}}">
                            <div class="post-img">
                                @if($article->photo)
                            <img src="/{{$article->photo->first()->filename}}" alt="{{$article->title}}"/ class="img-blog">
                            @else
                            <img src="{{asset('assets/m31/images/bg/post3.png')}}" alt="" class="img-blog">
                            @endif
                            </div>
                        </a>
                        <div class="post-content mb-0">
                            
                            <h3 class="post-title"><a href="{{route('blog.show', $article->slug)}}"> {{$article->title}} </a>
                            </h3>

                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop