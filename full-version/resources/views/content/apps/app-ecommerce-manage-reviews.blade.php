@extends('layouts/layoutMaster')

@section('title', 'eCommerce Manage Review - Apps')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/rateyo/rateyo.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/rateyo/rateyo.js')}}"></script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-ecommerce.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ecommerce-reviews.js')}}"></script>
<script src="{{asset('assets/js/extended-ui-star-ratings.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce / </span>Manage reviews
</h4>

<div class="row mb-4 g-4">
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row widget-separator">
        <div class="col-sm-5 border-shift border-end">
          <div class="d-flex align-items-center mb-3">
            <span class="text-primary display-5 fw-normal">4.89</span>
            <span class='mdi mdi-star mdi-24px ms-1 text-primary'></span>
          </div>
          <h6>Total 187 reviews</h6>
          <p>All reviews are from genuine customers</p>
          <span class="badge bg-label-primary rounded-pill p-2 mb-3 mb-sm-0">+5 This week</span>
          <hr class="d-sm-none">
        </div>

        <div class="col-sm-7 g-2 text-nowrap d-flex flex-column justify-content-between px-4 gap-3">
          <div class="d-flex align-items-center gap-3">
            <small>5 Star</small>
            <div class="progress w-100 rounded" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 61.50%" aria-valuenow="61.50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">124</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>4 Star</small>
            <div class="progress w-100 rounded" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">40</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>3 Star</small>
            <div class="progress w-100 rounded" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">12</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>2 Star</small>
            <div class="progress w-100 rounded" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">7</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>1 Star</small>
            <div class="progress w-100 rounded" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">2</small>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row">
        <div class="col-sm-5">
          <div class="mb-5">
            <h4 class="mb-2 text-nowrap">Reviews statistics</h4>
            <p class="mb-0"> <span class="me-2">12 New reviews</span> <span class="badge bg-label-success rounded-pill">+8.4%</span></p>
          </div>

          <div>
            <h6 class="mb-2">
              <span class="text-success fw-normal me-1">87%</span>Positive reviews
            </h6>
            <p class="mb-0">Weekly Report</p>
          </div>
        </div>
        <div class="col-sm-7 d-flex justify-content-end align-items-end">
          <div id="reviewsChart"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- review List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-review table">
      <thead class="table-light">
        <tr>
          <th></th>
          <th></th>
          <th>Product</th>
          <th class="text-nowrap">Reviewer</th>
          <th>Review</th>
          <th>Date</th>
          <th class="text-nowrap">Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection
