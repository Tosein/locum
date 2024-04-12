@extends('front.layout.app')

@section('main-content')
<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Profile</h2>
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Existing Photo</label>
                            <div class="form-group">
                                @if(Auth::guard('dentist')->user()->photo == '')
                                <img src="{{ asset('uploads/default_candidate_photo.png') }}" alt="Dentist Photo"
                                    class="user-photo" />
                                @else
                                <img src="{{ asset('upload/'.Auth::guard('dentist')->user()->photo) }}" alt=""
                                    class="user-photo" />
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Change Photo</label>
                            <div class="form-group">
                                <input type="file" name="" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Name *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Designation *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Biography *</label>
                            <textarea name="" class="form-control editor" cols="30" rows="10">
His cu nobis populo, eum laoreet evertitur te. In tollit audire adolescens vix. Ad veri admodum quo. Ea pri cetero timeam probatus, dicunt principes vel ut.</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Country *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="Canada" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Address *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="34, MKC Street" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">State *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="CA" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">City *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="NYC" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Zip Code *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="32432" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Gender *</label>
                            <div class="form-group">
                                <select name="" class="form-control select2">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Marital Status *</label>
                            <div class="form-group">
                                <select name="" class="form-control select2">
                                    <option value="">Married</option>
                                    <option value="">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Date of Birth *</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control datepicker" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Website</label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection