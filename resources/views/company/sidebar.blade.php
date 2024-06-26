<ul class="list-group list-group-flush">
  <li class="list-group-item active">
    <a href="company-dashboard.html">Dashboard</a>
  </li>
  {{-- <li class="list-group-item">
    <a href="company-payment.html">Make Payment</a>
  </li>
  <li class="list-group-item">
    <a href="company-orders.html">Orders</a>
  </li> --}}
  <li class="list-group-item">
    <a href="company-job-add.html">Create Job</a>
  </li>
  <li class="list-group-item">
    <a href="company-jobs.html">All Jobs</a>
  </li>
  <li class="list-group-item">
    <a href="company-photos.html">Photos</a>
  </li>
  <li class="list-group-item">
    <a href="company-videos.html">Videos</a>
  </li>
  <li class="list-group-item">
    <a href="company-applications.html">Candidate Applications</a>
  </li>
  <li class="list-group-item {{ Request::is('company/edit_profile')? 'active' : '' }}">
    <a href="{{ Route('company_edit_profile') }}">Edit Profile</a>
  </li>
  <li class="list-group-item">
    <a href="login.html">Logout</a>
  </li>
</ul>