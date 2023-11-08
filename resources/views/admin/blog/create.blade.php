@extends('admin.master')

@section('pagecontent')
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
      <form method="POST" action="{{route('adminblog.store')}}">
      @csrf
      <div class="row grid-margin">
            <div class="col-lg-12">
        	<div class="card">
            <div class="card-body">
				<h4 class="card-title">Enter the article title</h4>
				{{Form::text('title',null,[
            		'class'=>'form-control',
            		'id'=>'title',
            		'placeholder'=>'Type the title here...',
                'required'=>'true'

            	])}}
            </div>
       	 	</div>
       	 </div>
       	</div>
         <div class="row grid-margin">
        	<div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Cover Image (Full URL)</h4>
                  

                  {{Form::text('cover',null,[
            		'class'=>'form-control',
            		'id'=>'picture',
            		'placeholder'=>'https://www.picture/url/file.png',
                'required'=>'true',

            	])}}
                </div>
              </div>
            </div>
       	</div>
         <div class="row grid-margin">
        	<div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Article Image (Full URL)</h4>
                  

                  {{Form::text('picture',null,[
            		'class'=>'form-control',
            		'id'=>'picture',
            		'placeholder'=>'https://www.picture/url/file.png',
                'required'=>'true',

            	])}}
                </div>
              </div>
            </div>
       	</div>
       
          <div class="row grid-margin">
            <div class="col-lg-12">
       	 
              <div class="card" >
                <div class="card-body">                	
                  <h4 class="card-title ">Type the article body below</h4>
                  {{Form::textarea('body',null,[
                  	'id'=>'tinyMceExample',
                  	'placeholder'=>'Type your text here...',
                  ])}}
                </div>
              </div>
            </div>
          </div>
          <div class="ro">
            <button class="btn btn-block btn-primary btn-lg" type="submit">Save Article</button>
          </div>
        
       {{Form::close()}}
        </div>
     
      </div>
      <!-- main-panel ends -->
    </div>
@stop

@section('javascript')
<script src="{{asset('adminfiles/assets/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('adminfiles/assets/vendors/tinymce/themes/modern/theme.js')}}"></script>
<script src="{{asset('adminfiles/assets/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<script src="{{asset('adminfiles/assets/js/editorDemo.js')}}"></script>


@stop