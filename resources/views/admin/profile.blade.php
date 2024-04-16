<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('admin.layout.styles')

    @include('admin.layout.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        @include('admin.layout.nav')


        @include('admin.layout.sidebar')
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Edit Profile</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin_edit_profile_submit') }}" method="POST">
                                      @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('uploads/'.Auth::guard('admin')->user()->photo) }}" alt="{{ Auth::guard('admin')->user()->name }}" class="profile-photo w_100_p">
                                                <input type="file" class="form-control mt_10" name="photo">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Email *</label>
                                                    <input type="text" class="form-control" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="new_password">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Retype Password</label>
                                                    <input type="password" class="form-control" name="retype_password">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

@include('admin.layout.scripts_footer')

</body>
</html>