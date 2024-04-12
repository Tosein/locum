<div class="col-lg-3 col-md-12">
  <div class="card">
      <ul class="list-group list-group-flush">
          <li class="list-group-item {{ Request::is('dentist/dashboard')? 'active' : '' }}">
              <a href="{{ route('dentist_dashboard') }}"
                  >Dashboard</a
              >
          </li>
          <li class="list-group-item {{ Request::is('dentist/edit_profile')? 'active' : '' }}">
            <a href="{{ Route('dentist_edit_profile') }}"
                >Edit Profile</a
            >
        </li>
          <li class="list-group-item">
              <a href="candidate-applied-jobs.html"
                  >Applied Jobs</a
              >
          </li>
          <li class="list-group-item">
              <a href="candidate-bookmarked-jobs.html"
                  >Bookings</a
              >
          </li>
          <li class="list-group-item {{ Request::is('dentist/education/view')? 'active' : '' }}">
              <a href="{{ Route('dentist_education') }}"
                  >Education</a
              >
          </li>
          <li class="list-group-item {{ Request::is('dentist/skill/view')? 'active' : '' }}">
              <a href="{{ Route('dentist_skill') }}">Skills</a>
          </li>
          <li class="list-group-item {{ Request::is('dentist/experience/view')? 'active' : '' }}">
              <a href="{{ Route('dentist_experience') }}"
                  >Work Experience</a
              >
          </li>
          <li class="list-group-item">
              <a href="candidate-award.html">Certificates</a>
          </li>
          <li class="list-group-item">
            <a href="candidate-award.html">Licenses</a>
        </li>
         
          <li class="list-group-item {{ Request::is('dentist/resume/view')? 'active' : '' }}">
              <a href="{{ Route('dentist_resume') }}"
                  >Documents Upload</a
              >
          </li>
          <li class="list-group-item">
              <a href="{{ route('dentist_logout') }}">Logout</a>
          </li>
      </ul>
  </div>
</div>