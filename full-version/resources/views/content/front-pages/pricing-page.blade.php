@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Pricing - Front Pages')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page-pricing.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/front-page-pricing.js')}}"></script>
@endsection


@section('content')
<!-- Pricing Plans -->
<section class="section-py first-section-pt">
  <div class="container">
    <h2 class="text-center mb-2">Pricing Plans</h2>
    <p class="text-center px-sm-5"> <span>All plans include 40+ advanced tools and features to boost your
        product.</span><br>Choose the best plan to fit your needs.</p>
    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 py-5 mb-0 mb-md-4">
      <label class="switch switch-primary ms-sm-5 ps-sm-5 me-0">
        <span class="switch-label">Monthly</span>
        <input type="checkbox" class="switch-input price-duration-toggler" />
        <span class="switch-toggle-slider">
          <span class="switch-on"></span>
          <span class="switch-off"></span>
        </span>
        <span class="switch-label">Annually</span>
      </label>
      <div class="mt-n5 ms-n5 ml-2 mb-2 d-none d-sm-flex align-items-center gap-2">
        <i class="mdi mdi-arrow-down-left mdi-24px text-secondary scaleX-n1-rtl"></i>
        <span class="badge badge-sm bg-label-primary rounded-pill mb-2 ">Get 2 months free</span>
      </div>
    </div>

    <div class="pricing-plans row mx-0 gap-4">
      <!-- Basic -->
      <div class="col-lg mb-md-0 mb-4 px-0">
        <div class="card border rounded shadow-none">
          <div class="card-body">
            <div class="my-3 pt-2 text-center">
              <img src="{{asset('assets/img/illustrations/pricing-basic.png')}}" alt="Basic Image" height="100">
            </div>
            <h3 class="card-title text-center text-capitalize mb-1">Basic</h3>
            <p class="text-center pb-2">A simple start for everyone</p>
            <div class="text-center">
              <div class="d-flex justify-content-center">
                <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-body fw-normal">$</sup>
                <h1 class="display-3 mb-0 text-primary">0</h1>
                <sub class="h6 pricing-duration mt-auto mb-2 text-body fw-normal">/month</sub>
              </div>
            </div>

            <ul class="list-group ms-4 my-4 pt-2">
              <li class="mb-1">100 responses a month</li>
              <li class="mb-1">Unlimited forms and surveys</li>
              <li class="mb-1">Unlimited fields</li>
              <li class="mb-1">Basic form creation tools</li>
              <li class="mb-0">Up to 2 subdomains</li>
            </ul>
            <a href="{{url('front-pages/payment')}}" class="btn btn-outline-success d-grid w-100">Your Current Plan</a>
          </div>
        </div>
      </div>

      <!-- Standard -->
      <div class="col-lg mb-md-0 mb-4 px-0">
        <div class="card border-primary border shadow-none">
          <div class="card-body position-relative">
            <div class="position-absolute end-0 me-4 top-0 mt-4">
              <span class="badge bg-label-primary rounded-pill">Popular</span>
            </div>
            <div class="my-3 pt-2 text-center">
              <img src="{{asset('assets/img/illustrations/pricing-standard.png')}}" alt="Standard Image" height="100">
            </div>
            <h3 class="card-title text-center text-capitalize mb-1">Standard</h3>
            <p class="text-center">For small to medium businesses</p>
            <div class="text-center">
              <div class="d-flex justify-content-center">
                <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-body fw-normal">$</sup>
                <h1 class="price-toggle price-yearly display-3 text-primary mb-0">7</h1>
                <h1 class="price-toggle price-monthly display-3 text-primary mb-0 d-none">9</h1>
                <sub class="h6 text-body pricing-duration mt-auto mb-2 fw-normal">/month</sub>
              </div>
              <small class="price-yearly price-yearly-toggle text-body">$ 90 / year</small>
            </div>

            <ul class="list-group ms-4 my-4 pt-3">
              <li class="mb-1">Unlimited responses</li>
              <li class="mb-1">Unlimited forms and surveys</li>
              <li class="mb-1">Instagram profile page</li>
              <li class="mb-1">Google Docs integration</li>
              <li class="mb-0">Custom “Thank you” page</li>
            </ul>
            <a href="{{url('front-pages/payment')}}" class="btn btn-primary d-grid w-100">Upgrade</a>
          </div>
        </div>
      </div>

      <!-- Enterprise -->
      <div class="col-lg px-0">
        <div class="card border rounded shadow-none">
          <div class="card-body">

            <div class="my-3 pt-2 text-center">
              <img src="{{asset('assets/img/illustrations/pricing-enterprise.png')}}" alt="Enterprise Image" height="100">
            </div>
            <h3 class="card-title text-center text-capitalize mb-1">Enterprise</h3>
            <p class="text-center">Solution for big organizations</p>

            <div class="text-center">
              <div class="d-flex justify-content-center">
                <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-body fw-normal">$</sup>
                <h1 class="price-toggle price-yearly display-3 text-primary mb-0">16</h1>
                <h1 class="price-toggle price-monthly display-3 text-primary mb-0 d-none">19</h1>
                <sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-body">/month</sub>
              </div>
              <small class="price-yearly price-yearly-toggle text-body">$ 190 / year</small>
            </div>

            <ul class="list-group ms-4 my-4 pt-3">
              <li class="mb-1">PayPal payments</li>
              <li class="mb-1">Logic Jumps</li>
              <li class="mb-1">File upload with 5GB storage</li>
              <li class="mb-1">Custom domain support</li>
              <li class="mb-0">Stripe integration</li>
            </ul>
            <a href="{{url('front-pages/payment')}}" class="btn btn-outline-primary d-grid w-100">Upgrade</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Pricing Plans -->
<!-- Pricing Free Trial -->
<section class="pricing-free-trial bg-label-primary">
  <div class="container">
    <div class="position-relative">
      <div class="d-flex justify-content-between flex-column-reverse flex-lg-row align-items-center py-5">
        <div class="text-center text-lg-start">
          <h3 class="text-primary mb-1">Still not convinced? Start with a 14-day FREE trial!</h3>
          <p class="text-body mb-1">You will get full access to with all the features for 14 days.</p>
          <a href="{{url('front-pages/payment')}}" class="btn btn-primary mt-4">Start 14-day free trial</a>
        </div>
        <!-- image -->
        <div class="text-center">
          <img src="{{asset('assets/img/illustrations/pricing-illustration.png')}}" alt="Pricing Illustration Image" class="img-fluid mb-3 mb-lg-0" >
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Pricing Free Trial -->
<!-- Plans Comparison -->
<section class="section-py pricing-plans-comparison">
  <div class="container">
    <div class="col-12 text-center mb-5">
      <h2 class="mb-2">Pick a plan that works best for you</h2>
      <p>Stay cool, we have a 48-hour money back guarantee!</p>
    </div>
    <div class="table-responsive border rounded">
      <table class="table table-striped text-center mb-0">
        <thead>
          <tr>
            <th scope="col">
              <p class="mb-1">Features</p>
              <p class="fw-normal text-capitalize text-body mb-0">Native front features</p>
            </th>
            <th scope="col">
              <p class="mb-1">Starter</p>
              <p class="fw-normal text-capitalize text-body mb-0">Free</p>
            </th>
            <th scope="col">
              <div class="d-flex d-flex justify-content-center align-items-center">
                <p class="mb-1 me-1">Pro</p>
                <i class="mdi mdi-star-circle text-primary"></i>
              </div>
              <p class="fw-normal text-capitalize text-body mb-0">$7.5/month</p>
            </th>
            <th scope="col">
              <p class="mb-1">Enterprise</p>
              <p class="fw-normal text-capitalize text-body mb-0">$16/month</p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>14-days free trial</td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>No user limit</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>Product Support</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>Email Support</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <span class="badge bg-label-primary badge-sm rounded-pill text-uppercase">Add-on Available</span>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>Integrations</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>Removal of Front branding</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <span class="badge bg-label-primary badge-sm rounded-pill text-uppercase">Add-on Available</span>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>Active maintenance & support</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td>Data storage for 365 days</td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-close-circle text-light"></i>
            </td>
            <td>
              <i class="mdi mdi-check-circle text-primary"></i>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <a href="{{url('front-pages/payment')}}" class="btn text-nowrap btn-outline-primary">Choose Plan</a>
            </td>
            <td>
              <a href="{{url('front-pages/payment')}}" class="btn text-nowrap btn-primary">Choose Plan</a>
            </td>
            <td>
              <a href="{{url('front-pages/payment')}}" class="btn text-nowrap btn-outline-primary">Choose Plan</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!--/ Plans Comparison -->
<!-- FAQS -->
<section class="section-py pricing-faqs rounded-bottom bg-body">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-2">FAQ's</h2>
      <p>Let us help answer the most common questions.</p>
    </div>
    <div id="faq" class="accordion">
      <div class="accordion-item active">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionPayment-1" aria-controls="accordionPayment-1">
            When is payment taken for my order?
          </button>
        </h2>

        <div id="accordionPayment-1" class="accordion-collapse collapse show">
          <div class="accordion-body">
            Payment is taken during the checkout process when you pay for
            your order. The order number that appears on the confirmation
            screen indicates payment has been successfully processed.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">
            How do I pay for my order?
          </button>
        </h2>
        <div id="accordionPayment-2" class="accordion-collapse collapse">
          <div class="accordion-body">
            We accept Visa®, MasterCard®, American Express®, and PayPal®.
            Our servers encrypt all information submitted to them, so you
            can be confident that your credit card information will be kept
            safe and secure.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-3" aria-controls="accordionPayment-3">
            What should I do if I'm having trouble placing an order?
          </button>
        </h2>
        <div id="accordionPayment-3" class="accordion-collapse collapse">
          <div class="accordion-body">
            For any technical difficulties you are experiencing with our
            website, please contact us at our
            <a href="javascript:void(0);">support portal</a>, or you can call us toll-free at
            <span class="fw-medium">1-000-000-000</span>, or email us at
            <a href="javascript:void(0);">order@companymail.com</a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-4" aria-controls="accordionPayment-4">
            Which license do I need for an end product that is only accessible to paying users?
          </button>
        </h2>
        <div id="accordionPayment-4" class="accordion-collapse collapse">
          <div class="accordion-body">
            If you have paying users or you are developing any SaaS products then you need an Extended License.
            For each products, you need a license. You can get free lifetime updates as well.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-5" aria-controls="accordionPayment-5">
            Does my subscription automatically renew?
          </button>
        </h2>
        <div id="accordionPayment-5" class="accordion-collapse collapse">
          <div class="accordion-body">No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer lollipop sesame snaps.</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ FAQS -->

@endsection
