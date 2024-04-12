@extends('front.layout.app')

@section('main-content')
<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Work Experience</h2>
            </div>
        </div>
    </div>
</div>
<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            {{-- Sidebar Menu --}}
            @include('dentist.sidebar')
            {{-- End sidebar Menu --}}
            <div class="col-lg-9 col-md-12">
              <a
                  href="candidate-experience-add.html"
                  class="btn btn-primary btn-sm mb-2"
                  ><i class="fas fa-plus"></i> Add Item</a
              >
              <div class="table-responsive">
                  <table class="table table-bordered">
                      <tbody>
                          <tr>
                              <th>SL</th>
                              <th>Company</th>
                              <th>Designation</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Action</th>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Google</td>
                              <td>System Analyst</td>
                              <td>Jan 2021</td>
                              <td>Present</td>
                              <td>
                                  <a
                                      href="candidate-experience-edit.html"
                                      class="btn btn-warning btn-sm text-white"
                                      ><i class="fas fa-edit"></i
                                  ></a>
                                  <a
                                      href=""
                                      class="btn btn-danger btn-sm"
                                      onClick="return confirm('Are you sure?');"
                                      ><i class="fas fa-trash-alt"></i
                                  ></a>
                              </td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Facebook</td>
                              <td>Senior Web Developer</td>
                              <td>Aug 2017</td>
                              <td>Dec 2020</td>
                              <td>
                                  <a
                                      href="candidate-experience-edit.html"
                                      class="btn btn-warning btn-sm text-white"
                                      ><i class="fas fa-edit"></i
                                  ></a>
                                  <a
                                      href=""
                                      class="btn btn-danger btn-sm"
                                      onClick="return confirm('Are you sure?');"
                                      ><i class="fas fa-trash-alt"></i
                                  ></a>
                              </td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Pixel Media Ltd.</td>
                              <td>Web Developer</td>
                              <td>Apr 2015</td>
                              <td>Mar 2017</td>
                              <td>
                                  <a
                                      href="candidate-experience-edit.html"
                                      class="btn btn-warning btn-sm text-white"
                                      ><i class="fas fa-edit"></i
                                  ></a>
                                  <a
                                      href=""
                                      class="btn btn-danger btn-sm"
                                      onClick="return confirm('Are you sure?');"
                                      ><i class="fas fa-trash-alt"></i
                                  ></a>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>

            </div>
        </div>
    </div>
</div>

@endsection