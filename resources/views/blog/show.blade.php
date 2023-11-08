@extends('pages.master')
@section('pagetitle',$article->title)
@section('header2')
<div align="center" class="header-wrap bg-pattern">
        <div class="container">
                <h2 class="header-title" data-aos="fade-up" data-aos-delay="400">{{$article->title}}</h2>
            </div>
        </div>
@stop

@section('pagecontent')
  <section class="section sm section-blog2 mt-6">
        <div class="container">
            @if($article->photo)
            <img class="img-post" src="/{{$article->photo->first()->filename}}" alt="{{$article->title}}"/>
            @else
            <img class="img-post" src="{{asset('assets/m31/images/bg/article.jpg')}}" alt="{{$article->title}}">
            @endif
            <div class="content-post lead">
            	<h1>{{$article->title}}</h1>
            {!!$article->body!!}
            </div>
        </div>
    </section>
     <section class="section is-sm bg-secondary  ">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title is-center">Looking for a Data Collection Firm in Zambia?</h2>
                   
            </div>
            <div align="center" class="text-center text-info">
            	 <h4 class="is-center">Contact M31 Research</h4>
                    <h1>info@m31r.com</h1>
                    <h3>+260 978 937 745</h3>
            </div>
        </div>
    </section>
@stop