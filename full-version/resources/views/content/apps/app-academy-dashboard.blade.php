@extends('layouts/layoutMaster')

@section('title', 'Academy - Dashboard - App')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-academy-dashboard.js')}}"></script>
@endsection

@section('content')
<!-- Hour chart  -->
<div class="card bg-transparent shadow-none border-0 my-4">
  <div class="card-body row p-0 pb-3">
    <div class="col-12 col-md-8 card-separator">
      <h3 class="display-6">Welcome back, <span class="fw-semibold">Felecia</span> 👋🏻 </h3>
      <div class="col-12 col-lg-7">
        <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
      </div>
      <div class="d-flex justify-content-between flex-wrap gap-3 me-5">
        <div class="d-flex align-items-center gap-3 me-4 me-sm-0">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-primary rounded">
              <i class='mdi mdi-laptop mdi-36px'></i>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Hours Spent</p>
            <span class="text-primary mb-0 display-6">34h</span>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-info rounded">
              <i class='mdi mdi-lightbulb-outline mdi-36px'></i>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Test Results</p>
            <span class="text-info mb-0 display-6">82%</span>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-warning rounded">
              <i class='mdi mdi-check-decagram-outline mdi-36px'></i>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Course Completed </p>
            <span class="text-warning mb-0 display-6">14</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 ps-md-3 ps-lg-5 pt-3 pt-md-0">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div>
            <h5 class="mb-2">Time Spendings</h5>
            <p class="mb-4">Weekly report</p>
          </div>
          <div class="time-spending-chart">
            <h3 class="mb-2">231<span class="text-body">h</span> 14<span class="text-body">m</span> </h3>
            <span class="badge bg-label-success rounded-pill">+18.4%</span>
          </div>
        </div>
        <div id="leadsReportChart"></div>
      </div>
    </div>
  </div>
</div>
<!-- Hour chart End  -->

<!-- Topic and Instructors -->
<div class="row mb-4 g-4">
  <div class="col-12 col-xl-8">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-dots-vertical mdi-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
            <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body row g-3">
        <div class="col-md-6">
          <div id="horizontalBarChart" class=""></div>
        </div>
        <div class="col-md-6 d-flex justify-content-around align-items-center">
          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-primary me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
              <div>
                <p class="mb-1">UI Design</p>
                <h5>35%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-3">
              <span class="text-success me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
              <div>
                <p class="mb-1">Music</p>
                <h5>14%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-danger me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
              <div>
                <p class="mb-1">React</p>
                <h5>10%</h5>
              </div>
            </div>
          </div>

          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-info me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
              <div>
                <p class="mb-1">UX Design</p>
                <h5>20%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-3">
              <span class="text-secondary me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
              <div>
                <p class="mb-1">Animation</p>
                <h5>12%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-warning me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
              <div>
                <p class="mb-1">SEO</p>
                <h5>9%</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Popular Instructors</h5>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="popularInstructors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-dots-vertical mdi-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularInstructors">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless border-top">
          <thead class="border-bottom">
            <tr>
              <th>Instructors</th>
              <th class="text-end">courses</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center mt-lg-4">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-truncate">Maven Analytics</h6>
                    <small class="text-truncate">Business Intelligence</small>
                  </div>
                </div>
              </td>
              <td class="text-end">
                <div class="user-progress mt-lg-4">
                  <h6 class="mb-0">33</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-truncate">Zsazsa McCleverty</h6>
                    <small class="text-truncate">Digital Marketing</small>
                  </div>
                </div>
              </td>
              <td class="text-end">
                <div class="user-progress">
                  <h6 class="mb-0">52</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-truncate">Nathan Wagner</h6>
                    <small class="text-truncate">UI/UX Design</small>
                  </div>
                </div>
              </td>
              <td class="text-end">
                <div class="user-progress">
                  <h6 class="mb-0">12</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-truncate">Emma Bowen</h6>
                    <small class="text-truncate">React Native</small>
                  </div>
                </div>
              </td>
              <td class="text-end">
                <div class="user-progress">
                  <h6 class="mb-0">8</h6>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Top Courses</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="topCourses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-dots-vertical mdi-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-video-outline mdi-24px"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0 lh-sm">Videography Basic Design Course</h6>
              </div>
              <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                <div class="badge bg-label-secondary rounded-pill fw-normal">1.2k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class="mdi mdi-code-tags mdi-24px"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0 lh-sm">Basic Front-end Development Course</h6>
              </div>
              <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                <div class="badge bg-label-secondary rounded-pill fw-normal">834 Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class="mdi mdi-camera-image mdi-24px"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0 lh-sm">Basic Fundamentals of Photography</h6>
              </div>
              <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                <div class="badge bg-label-secondary rounded-pill fw-normal">3.7k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-warning"><i class="mdi mdi-palette-outline mdi-24px"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0 lh-sm">Advance Dribble Base Visual Design</h6>
              </div>
              <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                <div class="badge bg-label-secondary rounded-pill fw-normal">2.5k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-danger"><i class="mdi mdi-microphone mdi-24px"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0 lh-sm">Your First Singing Lesson</h6>
              </div>
              <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                <div class="badge bg-label-secondary rounded-pill fw-normal">948 Views</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="bg-label-info text-center mb-3 pt-2 rounded-3">
          <img class="img-fluid" src="{{asset('assets/img/illustrations/card-ratings-illustration.png')}}" alt="Boy card image" width="130"/>
        </div>
        <h5 class="mb-2 pb-1">Upcoming Webinar</h5>
        <p>Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
        <div class="row mb-3 g-3">
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-2">
                <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-calendar-blank mdi-24px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                <small>Date</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-2">
                <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-timer-outline mdi-24px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">32 minutes</h6>
                <small>Duration</small>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:void(0);" class="btn btn-primary w-100">Join the event</a>
      </div>
    </div>
  </div>


  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Assignment Progress</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="assignProgress" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-dots-vertical mdi-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignProgress">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-3 pb-1">
            <div class="chart-progress me-3" data-color="primary" data-series="72" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">User experience Design</h6>
                  <p class="mb-0">120 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-lightest">
                  <i class="mdi mdi-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1">
            <div class="chart-progress me-3" data-color="success" data-series="48" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic fundamentals</h6>
                  <p class="mb-0">32 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-lightest">
                  <i class="mdi mdi-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1">
            <div class="chart-progress me-3" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">React native components</h6>
                  <p class="mb-0">182 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-lightest">
                  <i class="mdi mdi-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-3" data-color="info" data-series="24" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic of music theory</h6>
                  <p class="mb-0">56 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon bg-lightest">
                  <i class="mdi mdi-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>
<!--  Topic and Instructors  End-->

<!-- Course datatable -->
<div class="card mb-4">
  <div class="table-responsive mb-3">
    <table class="table datatables-academy-course">
      <thead class="table-light">
        <tr>
          <th></th>
          <th></th>
          <th>Course Name</th>
          <th>Time</th>
          <th class="w-25">Progress</th>
          <th class="w-25">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Course datatable End -->
@endsection
