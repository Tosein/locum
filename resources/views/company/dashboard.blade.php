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

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="item">
          <h2 class="heading">For Candidates</h2>
          <ul class="useful-links">
            <li>
              <a href="">Browser Jobs</a>
            </li>
            <li>
              <a href="">Browse Candidates</a>
            </li>
            <li>
              <a href="">Candidate Dashboard</a>
            </li>
            <li>
              <a href="">Saved Jobs</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="item">
          <h2 class="heading">For Companies</h2>
          <ul class="useful-links">
            <li>
              <a href="">Post Job</a>
            </li>
            <li>
              <a href="">Browse Jobs</a>
            </li>
            <li>
              <a href="">Company Dashboard</a>
            </li>
            <li>
              <a href="">Applications</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="item">
          <h2 class="heading">Contact</h2>
          <div class="list-item">
            <div class="left">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="right">
              34 Antiger Lane, USA, 12937
            </div>
          </div>
          <div class="list-item">
            <div class="left">
              <i class="fas fa-phone"></i>
            </div>
            <div class="right">contact@arefindev.com</div>
          </div>
          <div class="list-item">
            <div class="left">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="right">122-222-1212</div>
          </div>
          <ul class="social">
            <li>
              <a href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-pinterest-p"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="item">
          <h2 class="heading">Newsletter</h2>
          <p>
            To get the latest news from our website, please
            subscribe us here:
          </p>
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="" class="form-control" />
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Subscribe Now" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection