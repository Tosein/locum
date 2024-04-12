@extends('front.layout.app')

@section('main-content')
<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Skills</h2>
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
                  href="candidate-skill-add.html"
                  class="btn btn-primary btn-sm mb-2"
                  ><i class="fas fa-plus"></i> Add Item</a
              >
              <div class="table-responsive">
                  <table class="table table-bordered">
                      <tbody>
                          <tr>
                              <th>SL</th>
                              <th>Skill Name</th>
                              <th>Percentage</th>
                              <th>Action</th>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Photoshop</td>
                              <td>70</td>
                              <td>
                                  <a
                                      href="candidate-skill-edit.html"
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
                              <td>PHP</td>
                              <td>88</td>
                              <td>
                                  <a
                                      href="candidate-skill-edit.html"
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
                              <td>Laravel</td>
                              <td>95</td>
                              <td>
                                  <a
                                      href="candidate-skill-edit.html"
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
                          <td>4</td>
                          <td>Javascript</td>
                          <td>80</td>
                          <td>
                              <a
                                  href="candidate-skill-edit.html"
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
                      </tbody>
                  </table>
              </div>
          </div>

            </div>
        </div>
    </div>
</div>

@endsection