@extends('front.layout.app')

@section('main-content')
<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Account</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-form">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                PATIENT
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dentist-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-dentist" type="button" role="tab" aria-controls="pills-dentist"
                                aria-selected="false">
                                DENTIST
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">

                                COMPANY
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="" class="form-label">Patient Name *</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Username *</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address *</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password *</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm Password *</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">
                                    Create Account
                                </button>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-dentist" role="tabpanel"
                            aria-labelledby="pills-dentist-tab" tabindex="0">
                            <form action="{{ route('dentist_signup_submit') }}" method="post">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label @error('dentist_name') is-invalid @enderror">Dentist Name *</label>
                                <input type="text" class="form-control" name="dentist_name" value="{{ old('dentist_name') }}"/>
                            </div>
                            @error('dentist_name')
                            <div class="text-danger">{{ $message }}</div>
                                
                            @enderror
                            <div class="mb-3">
                                <label for="" class="form-label">Username *</label>
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}"/>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address *</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}"/>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password *</label>
                                <input type="password" class="form-control" name="password" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm Password *</label>
                                <input type="password" class="form-control" name="retype_password" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">
                                    Create Account
                                </button>
                            </div>
                        </form>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <form action="{{ route('company_signup_submit') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Company Name *</label>
                                    <input type="text" class="form-control" name="company_name" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Contact Person Name *</label>
                                    <input type="text" class="form-control" name="contact_name"/>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Username *</label>
                                    <input type="text" class="form-control" name="username"/>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email Address *</label>
                                    <input type="text" class="form-control" name="email"/>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password *</label>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Confirm Password *</label>
                                    <input type="password" class="form-control" name="retype_password"/>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">
                                        Create Account
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3">
                        <a href="{{ route('home_login') }}" class="primary-color">Existing User? Login Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection