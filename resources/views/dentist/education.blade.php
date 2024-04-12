@extends('front.layout.app')

@section('main-content')
<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Education</h2>
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
              <div class="col-lg-9 col-md-12">
                <a
                    href="candidate-education-add.html"
                    class="btn btn-primary btn-sm mb-2"
                    ><i class="fas fa-plus"></i> Add Item</a
                >
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Education Level</th>
                                <th>Institute</th>
                                <th>Degree</th>
                                <th>Passing Year</th>
                                <th class="w-100">Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Graduation</td>
                                <td>Khulna University</td>
                                <td>B. Sc. in CSE</td>
                                <td>2008</td>
                                <td>
                                    <a
                                        href="candidate-education-edit.html"
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
                                <td>Higher Secondary</td>
                                <td>Cant. Public College, Khulna</td>
                                <td>H.S.C.</td>
                                <td>2002</td>
                                <td>
                                    <a
                                        href="candidate-education-edit.html"
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
                                <td>Secondary</td>
                                <td>Cant. Public College, Khulna</td>
                                <td>S.S.C.</td>
                                <td>2000</td>
                                <td>
                                    <a
                                        href="candidate-education-edit.html"
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