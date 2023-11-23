@extends('layouts/layoutMaster')

@section('title', 'eCommerce Referrals - Apps')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ecommerce-referral.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce / </span> Referrals
</h4>

<div class="row mb-4 g-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">$24,983</h5>
            <small>Total Earning</small>
          </div>
          <span class="badge bg-label-primary rounded-circle p-2">
            <i class="mdi mdi-currency-usd mdi-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">$8,647</h5>
            <small>Unpaid Earning</small>
          </div>
          <span class="badge bg-label-success rounded-circle p-2">
            <i class="mdi mdi-wallet-giftcard mdi-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">2,367</h5>
            <small>Signups</small>
          </div>
          <span class="badge bg-label-danger rounded-circle p-2">
            <i class="mdi mdi-account-outline mdi-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">4.5%</h5>
            <small>Conversion Rate</small>
          </div>
          <span class="badge bg-label-info rounded-circle p-2">
            <i class="mdi mdi-refresh mdi-24px"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mb-4 g-4">
  <div class="col-lg-7">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="mb-1">How to use</h5>
        <p class="mb-4">Integrate your referral code in 3 easy steps.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-3">
          <div class="d-flex flex-column align-items-center">
            <span class="p-3 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><i class='mdi mdi-rocket-outline text-primary mdi-36px'></i></span>
            <p class="my-2 w-75">Create & validate your referral link and get</p>
            <h5 class="text-primary mb-0">$50</h5>
          </div>
          <div class="d-flex flex-column align-items-center">
            <span class="p-3 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><i class='mdi mdi-badge-account text-primary mdi-36px'></i></span>
            <p class="my-2 w-75">For every new signup you get</p>
            <h5 class="text-primary mb-0">10%</h5>
          </div>
          <div class="d-flex flex-column align-items-center">
            <span class="p-3 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75"><i class='mdi mdi-send text-primary mdi-36px'></i></span>
            <p class="my-2 w-75">Get other friends to generate link and get</p>
            <h5 class="text-primary mb-0">$100</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-5">
    <div class="card h-100">
      <div class="card-body">
        <form class="referral-form" onsubmit="return false">
          <div class="mb-4 mt-1">
            <h5>Invite your friends</h5>
            <div class="row g-2">
              <div class="col-sm-9 col-lg-8">
                <div class="form-floating form-floating-outline me-3">
                  <input type="text" id="referralEmail" name="referralEmail" class="form-control" placeholder="Invite Them">
                  <label class="mb-0" for="referralEmail">Enter friend’s email address</label>
                </div>
              </div>
              <div class="col-sm-3 col-lg-4 ps-1 ps-sm-0">
                <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">Submit</button>
              </div>
            </div>
          </div>
          <div class="pt-3">
            <h5>Share the referral link</h5>
            <div class="row g-2">
              <div class="col-sm-9 col-lg-8">
                <div class="form-floating form-floating-outline me-3">
                  <input type="text" id="referralLink" name="referralLink" class="form-control" placeholder="pixinvent.com/?ref=6479" />
                  <label class="mb-0" for="referralLink">Share referral link in social media</label>
                </div>
              </div>
              <div class="col-sm-3 col-lg-4 ps-1 ps-sm-0">
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-facebook btn-lg btn-icon"><i class='mdi mdi-facebook text-white mdi-24px'></i></button>
                  <button type="button" class="btn btn-twitter btn-lg btn-icon"><i class='mdi mdi-twitter text-white mdi-24px'></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Referral List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-referral table">
      <thead class="table-light">
        <tr>
          <th></th>
          <th></th>
          <th>Users</th>
          <th class="text-nowrap">Referred ID</th>
          <th>Status</th>
          <th>Value</th>
          <th class="text-nowrap">Earnings</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection
