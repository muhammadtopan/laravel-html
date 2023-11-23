@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Locations - Apps')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ecommerce-settings.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce /</span> Settings
</h4>

<div class="row g-4">

  <!-- Navigation -->
  <div class="col-12 col-lg-4">
    <div class="d-flex justify-content-between flex-column mb-3 mb-md-0">
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/details')}}">
            <i class="mdi mdi-storefront-outline me-2"></i>
            <span class="align-middle">Store details</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/payments')}}">
            <i class="mdi mdi-credit-card-outline me-2"></i>
            <span class="align-middle">Payments</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/checkout')}}">
            <i class="mdi mdi-cart-outline me-2 me-2"></i>
            <span class="align-middle">Checkout</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/shipping')}}">
            <i class="mdi mdi-package-variant-closed me-2"></i>
            <span class="align-middle">Shipping & delivery</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link active" href="javascript:void(0);">
            <i class="mdi mdi-map-marker-outline me-2"></i>
            <span class="align-middle">Locations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/notifications')}}">
            <i class="mdi mdi-bell-outline me-2"></i>
            <span class="align-middle">Notifications</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Navigation -->

  <!-- Options -->
  <div class="col-12 col-lg-8 pt-4 pt-lg-0">
    <div class="tab-content p-0">
      <!-- Locations Tab -->
      <div class="tab-pane fade show active" id="locations" role="tabpanel">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title m-0">Location Name</h5>
          </div>
          <div class="card-body">
            <div class="col-12 mb-3">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" name="locationName" id="locationName" placeholder="Shop location">
                <label for="locationName">Location Name</label>
              </div>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="" id="def_location" checked disabled>
              <label class="form-check-label" for="def_location">
                Fulfill online orders from this location
              </label>
            </div>
            <div class="alert d-flex align-items-center bg-label-info mb-0" role="alert">
              <i class="mdi mdi-information-outline me-2"></i>
              This is your default location. To change whether you fulfill online orders from this location, select another default location first.
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title m-0">Address</h5>
          </div>
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12">
                <div class="form-floating form-floating-outline">
                  <select id="country_region" class="select2 form-select" data-placeholder="United States">
                    <option value="">United States</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea, Republic of</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Russia">Russian Federation</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                  </select>
                  <label for="country_region">Country/region</label>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_address" class="form-control" placeholder="Address" />
                  <label for="loc_address">Address</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_apa_suite" class="form-control" placeholder="Apartment, suite, etc." />
                  <label for="loc_apa_suite">Apartment, suite, etc.</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="tel" class="form-control phone-mask" id="loc_phone" placeholder="Phone" name="loc_phone" aria-label="loc_phone">
                  <label for="loc_phone">Phone</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_city" class="form-control" placeholder="City" />
                  <label for="loc_city">City</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="loc_state" class="form-control" placeholder="State" />
                  <label for="loc_state">State</label>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="form-floating form-floating-outline">
                  <input type="number" id="loc_pincode" class="form-control" placeholder="PIN Code" min="0" max="999999" />
                  <label for="loc_pincode">PIN Code</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end gap-3">
          <button type="reset" class="btn btn-outline-secondary">Discard</button>
          <a class="btn btn-primary" href="{{url('/app/ecommerce/settings/notifications')}}">Save</a>
        </div>
      </div>
    </div>
    <!-- /Options-->
  </div>
</div>
@endsection
