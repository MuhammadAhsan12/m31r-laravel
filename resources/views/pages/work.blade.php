@extends('pages.master')
@section('pagetitle','Our Work')

@section('pagecontent')
   <!-- Start #page-title-->
   <section class="page-title page-title-2 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/m31/images/background/m31_projects_team.jpg')}}" alt="Background"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
          <div class="title text-center">
            <div class="title-heading">
              <h1>Selected Projects</h1>
            </div>
            <div class="clearfix"></div>
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Our Work</li>
            </ol>
          </div>
          <!-- End .title -->
        </div>
        <!-- End .col-lg-8 -->
      </div>
      <!-- End .row-->
    </div>
    <!-- End .container-->
  </section>
  <!-- End #page-title-->
  <!--
  ============================
  Cases Standard Section
  ============================
  -->
  <section class="cases-standard" id="workStandard">
    <div class="container">
      <div class="row">
        <!-- .cases-filter-->
      
      </div>
      <div class="row display-flex" id="all-cases">
        @foreach ($articles as $article)
        <div class="case-item col-sm-6 col-md-6 col-lg-4 ">
          <div class="case-item-warp ">
            <div class="case-img">
              <img src="{{$article->picture}}" alt="Article Image - {{$article->title}}"/>
            </div>
            <!-- End .work-img-->
            <div class="case-content"> 
              <div class="case-title">
                <h4><a href="{{route('work.show', $article->slug)}}">{{$article->title}}</a></h4>
              </div>
              <div class="case-desc">
               
              </div>
              <div class="case-more"><a href="{{route('work.show', $article->slug)}}"><i class="icon-arrow-right"></i> Explore Project</a></div>
            </div>
            <!-- End .work-content-->
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- End .container-->
  </section>

@stop