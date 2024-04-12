@extends('front.layout.app')

@section('main-content')

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
  <div class="bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Dashboard</h2>
      </div>
    </div>
  </div>
</div>

<div class="page-content user-panel">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12">
        <div class="card">
          @include('company.sidebar')
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <h3>Hello, {{ Auth::guard('company')->user()->username }}</h3>
        <p>See all the statistics at a glance:</p>

        <div class="row box-items">
          <div class="col-md-4">
            <div class="box1">
              <h4>12</h4>
              <p>Open Jobs</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box2">
              <h4>3</h4>
              <p>Pending Jobs</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box3">
              <h4>5</h4>
              <p>Featured Jobs</p>
            </div>
          </div>
        </div>

        <h3 class="mt-5">Recent Jobs</h3>
        <div class="table-responsive">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>SL</th>
                <th>Job Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
             
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection