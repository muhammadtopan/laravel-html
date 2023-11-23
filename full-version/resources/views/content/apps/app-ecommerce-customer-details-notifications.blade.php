@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'eCommerce Customer Details Notifications - Apps')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/app-ecommerce-customer-detail.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce / Customer Details /</span> Notifications
</h4>

<div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2">
  <div class="mb-2 mb-sm-0">
    <h4 class="mb-1">
      Customer ID #634759
    </h4>
    <p class="mb-0">
      Aug 17, 2020, 5:48 (ET)
    </p>
  </div>
  <button type="button" class="btn btn-outline-danger delete-customer">Delete Customer</button>
</div>


<div class="row">
  <!-- Customer-detail Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- Customer-detail Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="customer-avatar-section">
          <div class="d-flex align-items-center flex-column">
            <img class="img-fluid rounded mb-3 mt-4" src="{{ asset('assets/img/avatars/12.png')}}" height="120" width="120" alt="User avatar" />
            <div class="customer-info text-center mb-4">
              <h5 class="mb-1">Lorine Hischke</h5>
              <span>Customer ID #634759</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap mb-4">
          <div class="d-flex align-items-center gap-2">
            <div class="avatar me-1">
              <div class="avatar-initial rounded bg-label-primary"><i class='mdi mdi mdi-cart-plus mdi-20px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">184</h5>
              <span>Orders</span>
            </div>
          </div>
          <div class="d-flex align-items-center gap-2">
            <div class="avatar me-1">
              <div class="avatar-initial rounded bg-label-primary"><i class='mdi mdi-currency-usd mdi-20px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">$12,378</h5>
              <span>Spent</span>
            </div>
          </div>
        </div>

        <div class="info-container">
          <h5 class="border-bottom text-uppercase pb-3">DETAILS</h5>
          <ul class="list-unstyled mb-4">
            <li class="mb-2">
              <span class="h6 me-1">Username:</span>
              <span>lorine.hischke</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Email:</span>
              <span>vafgot@vultukir.org</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Status:</span>
              <span class="badge bg-label-success rounded-pill">Active</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Contact:</span>
              <span>(123) 456-7890</span>
            </li>

            <li>
              <span class="h6 me-1">Country:</span>
              <span>USA</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit Details</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Customer-detail Card -->
    <!-- Plan Card -->

    <div class="card mb-4 bg-gradient-primary">
      <div class="card-body">
        <div class="row justify-content-between mb-3">
          <div class="col-md-12 col-lg-7 col-xl-12 col-xxl-7 text-center text-lg-start text-xl-center text-xxl-start order-1  order-lg-0 order-xl-1 order-xxl-0">
            <h4 class="card-title text-white text-nowrap">Upgrade to premium</h4>
            <p class="card-text text-white">Upgrade customer to premium membership to access pro features.</p>
          </div>
          <span class="col-md-12 col-lg-5 col-xl-12 col-xxl-5 text-center mx-auto mx-md-0 mb-2"><img src="{{asset('assets/img/illustrations/rocket.png')}}" class="w-px-75 m-2" alt="3dRocket"></span>
        </div>
        <button class="btn btn-white text-primary w-100 fw-medium shadow-sm" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade to premium</button>
      </div>
    </div>

    <!-- /Plan Card -->
  </div>
  <!--/ Customer Sidebar -->


  <!-- Customer Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- Customer Pills -->
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/overview')}}"><i class="mdi mdi-account-outline mdi-20px me-1"></i>Overview</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/security')}}"><i class="mdi mdi-lock-open-outline mdi-20px me-1"></i>Security</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/ecommerce/customer/details/billing')}}"><i class="mdi mdi-bookmark-outline mdi-20px me-1"></i>Address & Billing</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="mdi mdi-bell-outline mdi-20px me-1"></i>Notifications</a></li>
    </ul>
    <!--/ Customer Pills -->
    <!-- Project table -->
    <div class="card mb-4">
      <!-- Notifications -->
      <div class="card-header">
        <h5 class="card-title mb-1">Recent Devices</h5>
        <span>Change to notification settings, the user will get the update</span>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th class="text-nowrap">Type</th>
              <th class="text-nowrap text-center">✉️ Email</th>
              <th class="text-nowrap text-center">🖥 Browser</th>
              <th class="text-nowrap text-center">👩🏻‍💻 App</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-nowrap text-heading">Order status</td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap text-heading">Upcoming sale</td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap text-heading">Special offers</td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap text-heading">New item arrival</td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                </div>
              </td>
              <td>
                <div class="form-check mb-0 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <button type="submit" class="btn btn-primary me-2">Save changes</button>
        <button type="reset" class="btn btn-outline-secondary">Discard</button>
      </div>
      <!-- /Notifications -->
    </div>
    <!-- /Project table -->
  </div>
  <!--/ Customer Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
@endsection
