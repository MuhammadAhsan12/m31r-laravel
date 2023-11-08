@extends('pages.master')

@section('pagecontent')
 <section class="section is-lg page-404 bg-pattern">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h4 class="title">
                        Sorry, page not found!
                    </h4>
                    <h2 class="fortyfor">
                        404
                    </h2>
                    <a class="fade-page btn btn-secondary btn-sm" href="{{route('home')}}">Back to Home Page</a>
                </div>
            </div>
        </div>
    </section>
@stop