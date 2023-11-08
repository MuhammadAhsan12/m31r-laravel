@extends('pages.master')
@section('pagetitle','Publications')
@section('header2')
 <div align="center" class="header-wrap bg-pattern">
        <div class="container">
                <h5 class="header-title" data-aos="fade-up" data-aos-delay="500">Zambian Research Insights</h5>
            </div>
        </div>
@stop
@section('pagecontent')
<section class="section is-sm section-blog2 pt-20 top-bg-secondary">
        <div class="container">

            <div class="row">
                @foreach($articles as $article)
                <!--  blog item -->
                <div class="col-lg-4">
                    <div class="card-blog">
                        <a href="{{route('blog.show', $article->slug)}}">
                             @if($article->photo)
                            <img src="/{{$article->photo->first()->filename}}" alt="{{$article->title}}"/ class="img-blog">
                            @else
                            <img src="{{asset('assets/m31/images/bg/post3.png')}}" alt="" class="img-blog">
                            @endif
                        </a>
                        <div class="card-blog-wrap">
                            <a href="{{route('blog.show', $article->slug)}}">
                                <h5> {{$article->title}}</h5>
                            </a>
                         
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
            <div class="flex center">
                <div class="load-more">
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </section>
@stop