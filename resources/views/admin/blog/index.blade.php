@extends('admin.master')

@section('pagecontent')
 <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">View all blog articles</h4>
                    <a href="{{route('adminblog.create')}}" class="btn btn-info d-none d-md-block">New Article</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>
                              <a href="{{route('adminblog.edit', $article->slug)}}" class="btn btn-outline-primary">Edit</a>
                            </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
@stop

@section('javascript')
  <script src="{{asset('adminfiles/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('adminfiles/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('adminfiles/assets/js/template.js')}}"></script>
  <script src="{{asset('adminfiles/assets/js/settings.js')}}"></script>
  <script src="{{asset('adminfiles/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('adminfiles/assets/js/data-table.js')}}"></script>
  <!-- End custom js for this page-->
@stop