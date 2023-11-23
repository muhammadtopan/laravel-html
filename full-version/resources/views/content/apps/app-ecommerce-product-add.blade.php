@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product Add - Apps')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ecommerce-product-add.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce /</span><span> Add Product</span>
</h4>

<div class="app-ecommerce">

  <!-- Add Product -->
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1 mt-3">Add a new Product</h4>
      <p>Orders placed across your store</p>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-3">
      <button class="btn btn-outline-secondary">Discard</button>
      <button class="btn btn-outline-primary">Save draft</button>
      <button type="submit" class="btn btn-primary">Publish product</button>
    </div>
  </div>

  <div class="row">

    <!-- First column-->
    <div class="col-12 col-lg-8">
      <!-- Product Information -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-tile mb-0">Product information</h5>
        </div>
        <div class="card-body">
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Product title" name="productTitle" aria-label="Product title">
            <label for="ecommerce-product-name">Name</label>
          </div>


          <div class="row mb-3">
            <div class="col">
              <div class="form-floating form-floating-outline">
                <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="00000" name="productSku" aria-label="Product SKU">
                <label for="ecommerce-product-sku">SKU</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control" id="ecommerce-product-barcode" placeholder="0123-4567" name="productBarcode" aria-label="Product barcode">
                <label for="ecommerce-product-name">Barcode</label>
              </div>
            </div>
          </div>
          <!-- Comment -->
          <div>
            <label class="form-label">Comment <span class="text-muted">(Optional)</span></label>
            <div class="form-control p-0 pt-1">
              <div class="comment-toolbar border-0 border-bottom">
                <div class="d-flex justify-content-start">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
              <div class="comment-editor border-0 pb-1" id="ecommerce-category-description">
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /Product Information -->
      <!-- Media -->
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0 card-title">Media</h5>
          <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
        </div>
        <div class="card-body">
          <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
            <div class="dz-message needsclick my-5">
              Drag and drop your image here
              <small class="text-muted d-block fs-6 my-2">or</small>
              <span class="needsclick btn btn-outline-primary d-inline" id="btnBrowse">Browse image</span>
            </div>
            <div class="fallback">
              <input name="file" type="file" />
            </div>
          </form>
        </div>
      </div>
      <!-- /Media -->
      <!-- Variants -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Variants</h5>
        </div>
        <div class="card-body">
          <form class="form-repeater">
            <div data-repeater-list="group-a">
              <div data-repeater-item>
                <div class="row mb-3 mb-sm-0">
                  <div class="mb-3 col-sm-4">
                    <div class="form-floating form-floating-outline">
                      <select id="select2Basic" class="select2 form-select" data-placeholder="Option" data-allow-clear="true">
                        <option value="">Option</option>
                        <option value="size">Size</option>
                        <option value="color">Color</option>
                        <option value="weight">Weight</option>
                        <option value="smell">Smell</option>
                      </select>
                      <label for="select2Basic">Option</label>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-8">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="form-repeater-1-2" class="form-control" placeholder="Enter size">
                      <label for="form-repeater-1-2">Value</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <button class="btn btn-primary" data-repeater-create>
                Add another option
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Variants -->
      <!-- Inventory -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Inventory</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <!-- Navigation -->
            <div class="col-12 col-md-4 mx-auto card-separator">
              <div class="d-flex justify-content-between flex-column mb-3 mb-md-0 pe-md-3">
                <ul class="nav nav-align-left nav-pills flex-column">
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock">
                      <i class="mdi mdi-cube-outline me-2"></i>
                      <span class="align-middle">Restock</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping">
                      <i class="mdi mdi-car-estate me-2"></i>
                      <span class="align-middle">Shipping</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery">
                      <i class="mdi mdi-web me-2"></i>
                      <span class="align-middle">Global Delivery</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes">
                      <i class="mdi mdi-link-variant me-2"></i>
                      <span class="align-middle">Attributes</span>
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced">
                      <i class="mdi mdi-lock me-2"></i>
                      <span class="align-middle">Advanced</span>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /Navigation -->
            <!-- Options -->
            <div class="col-12 col-md-8 pt-4 pt-md-0">
              <div class="tab-content p-0 pe-xl-0 ps-md-3">
                <!-- Restock Tab -->
                <div class="tab-pane fade show active" id="restock" role="tabpanel">
                  <h6 class="text-body">Options</h6>
                  <div class="row mb-3 g-3">
                    <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">
                      <div class="form-floating form-floating-outline">
                        <input type="number" class="form-control" id="ecommerce-product-stock" placeholder="Quantity" name="quantity" aria-label="Quantity">
                        <label for="ecommerce-product-stock">Add to Stock</label>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 d-grid col-lg-6 col-xxl-4">
                      <button class="btn btn-primary btn-lg"><i class='mdi mdi-check me-2'></i>Confirm</button>
                    </div>
                  </div>
                  <div>
                    <p class="text-heading mb-2">Product in stock now: <span class="ps-1">54</span></p>
                    <p class="text-heading mb-2">Product in transit: <span class="ps-1">390</span></p>
                    <p class="text-heading mb-2">Last time restocked: <span class="ps-1">24th June, 2023</span></p>
                    <p class="text-heading mb-2">Total stock over lifetime: <span class="ps-1">2430</span></p>
                  </div>
                </div>
                <!-- Shipping Tab -->
                <div class="tab-pane fade" id="shipping" role="tabpanel">
                  <h6 class="text-body">Shipping Type</h6>
                  <div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="radio" name="shippingType" id="seller">
                      <label class="form-check-label" for="seller">
                        <span class="h6 d-block mb-1">Fulfilled by Seller</span>
                        <small class="text-muted">You'll be responsible for product delivery.<br>
                          Any damage or delay during shipping may cost you a Damage fee.</small>
                      </label>
                    </div>
                    <div class="form-check mb-5">
                      <input class="form-check-input" type="radio" name="shippingType" id="companyName" checked>
                      <label class="form-check-label" for="companyName">
                        <span class="h6 d-block mb-1">Fulfilled by Company name &nbsp;<span class="badge rounded-pill rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span>
                        <small class="text-muted">Your product, Our responsibility.<br>
                          For a measly fee, we will handle the delivery process for you.</small>
                      </label>
                    </div>
                    <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details</p>
                  </div>
                </div>
                <!-- Global Delivery Tab -->
                <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                  <h6 class="text-body">Global Delivery</h6>
                  <!-- Worldwide delivery -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="globalDel" id="worldwide">
                    <label class="form-check-label" for="worldwide">
                      <span class="h6 d-block mb-1">Worldwide delivery</span>
                      <small class="text-muted">Only available with Shipping method:
                        <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                    </label>
                  </div>
                  <!-- Global delivery -->
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="globalDel" checked>
                    <label class="form-check-label w-75 pe-5 mb-2" for="country-selected">
                      <span class="h6">Selected Countries</span>
                    </label>
                    <div class="form-floating form-floating-outline">
                      <input type="text" class="form-control" placeholder="Type Country name" id="country-selected">
                      <label for="ecommerce-product-name">Countries</label>
                    </div>
                  </div>
                  <!-- Local delivery -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="globalDel" id="local">
                    <label class="form-check-label" for="local">
                      <span class="h6 d-block mb-1">Local delivery</span>
                      <small class="text-muted">Deliver to your country of residence :
                        <a href="javascript:void(0);">Change profile address</a></small>
                    </label>
                  </div>
                </div>
                <!-- Attributes Tab -->
                <div class="tab-pane fade" id="attributes" role="tabpanel">
                  <h6 class="text-body">Attributes</h6>
                  <div>
                    <!-- Fragile Product -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="fragile" id="fragile">
                      <label class="form-check-label" for="fragile">
                        <span class="h6">Fragile Product</span>
                      </label>
                    </div>
                    <!-- Biodegradable -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="biodegradable" id="biodegradable">
                      <label class="form-check-label" for="biodegradable">
                        <span class="h6">Biodegradable</span>
                      </label>
                    </div>
                    <!-- Frozen Product -->
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" id="frozen" value="frozen" checked>
                      <label class="form-check-label w-75 pe-5 mb-2" for="frozen">
                        <span class="h6">Frozen Product</span>
                      </label>
                      <div class="form-floating form-floating-outline">
                        <input type="number" class="form-control" placeholder="In Celsius" id="temp">
                        <label for="temp">Max. allowed Temperature</label>
                      </div>
                    </div>
                    <!-- Exp Date -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="expDate" id="expDate" checked>
                      <label class="form-check-label w-75 pe-5 mb-2" for="expDate">
                        <span class="h6">Expiry Date of Product</span>
                      </label>
                      <div class="form-floating form-floating-outline">
                        <input type="date" class="product-date form-control" id="flatpickr-date" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Attributes Tab -->
                <!-- Advanced Tab -->
                <div class="tab-pane fade" id="advanced" role="tabpanel">
                  <h6 class="text-body">Advanced</h6>
                  <div class="row">
                    <!-- Product Id Type -->
                    <div class="col">
                      <h6 class="mb-2">Product ID Type</h6>
                      <div class="form-floating form-floating-outline">
                        <select id="product-id" class="select2 form-select" data-placeholder="ISBN" data-allow-clear="true">
                          <option value="">ISBN</option>
                          <option value="ISBN">ISBN</option>
                          <option value="UPC">UPC</option>
                          <option value="EAN">EAN</option>
                          <option value="JAN">JAN</option>
                        </select>
                        <label for="product-id">Id</label>
                      </div>
                    </div>
                    <!-- Product Id -->
                    <div class="col">
                      <h6 class="mb-2">Product ID</h6>
                      <div class="form-floating form-floating-outline">
                        <input type="number" id="product-id-1" class="form-control" placeholder="ISBN Number" />
                        <label for="product-id-1">Id Number</label>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- /Advanced Tab -->

              </div>
            </div>
            <!-- /Options-->
          </div>
        </div>
      </div>
      <!-- /Inventory -->
    </div>
    <!-- /Second column -->

    <!-- Second column -->
    <div class="col-12 col-lg-4">
      <!-- Pricing Card -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Pricing</h5>
        </div>
        <div class="card-body">
          <!-- Base Price -->
          <div class="form-floating form-floating-outline mb-4">
            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price">
            <label for="ecommerce-product-price">Best Price</label>
          </div>

          <!-- Discounted Price -->
          <div class="form-floating form-floating-outline mb-4">
            <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price">
            <label for="ecommerce-product-discount-price">Discounted Price</label>
          </div>
          <!-- Charge tax check box -->
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked>
            <label class="form-check-label" for="price-charge-tax">
              Charge tax on this product
            </label>
          </div>
          <!-- Instock switch -->
          <div class="d-flex justify-content-between align-items-center border-top pt-3">
            <p class="mb-0">In stock</p>
            <div class="w-25 d-flex justify-content-end">
              <label class="switch switch-primary  me-4 pe-2">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <span class="switch-off"></span>
                  </span>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <!-- /Pricing Card -->
      <!-- Organize Card -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Organize</h5>
        </div>
        <div class="card-body">
          <!-- Vendor -->
          <div class="mb-3 col ecommerce-select2-dropdown">
            <div class="form-floating form-floating-outline">
              <select id="vendor" class="select2 form-select" data-placeholder="Select Vendor">
                <option value="">Select Vendor</option>
                <option value="men-clothing">Men's Clothing</option>
                <option value="women-clothing">Women's-clothing</option>
                <option value="kid-clothing">Kid's-clothing</option>
              </select>
              <label for="vendor">Vendor</label>
            </div>
          </div>
          <!-- Category -->
          <div class="mb-4 col ecommerce-select2-dropdown d-flex justify-content-between">
            <div class="form-floating form-floating-outline w-100 me-3">
              <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
                <option value="">Select Category</option>
                <option value="Household">Household</option>
                <option value="Management">Management</option>
                <option value="Electronics">Electronics</option>
                <option value="Office">Office</option>
                <option value="Automotive">Automotive</option>
              </select>
              <label for="category-org">Category</label>
            </div>
            <div>
              <button class="btn btn-outline-primary btn-icon btn-lg h-px-50">
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </div>
          <!-- Collection -->
          <div class="mb-4 col ecommerce-select2-dropdown">
            <div class="form-floating form-floating-outline">
              <select id="collection" class="select2 form-select" data-placeholder="Collection">
                <option value="">Collection</option>
                <option value="men-clothing">Men's Clothing</option>
                <option value="women-clothing">Women's-clothing</option>
                <option value="kid-clothing">Kid's-clothing</option>
              </select>
              <label for="collection">Collection</label>
            </div>
          </div>
          <!-- Status -->
          <div class="mb-4 col ecommerce-select2-dropdown">
            <div class="form-floating form-floating-outline">
              <select id="status-org" class="select2 form-select" data-placeholder="Select Status">
                <option value="">Select Status</option>
                <option value="Published">Published</option>
                <option value="Scheduled">Scheduled</option>
                <option value="Inactive">Inactive</option>
              </select>
              <label for="status-org">Status</label>
            </div>
          </div>
          <!-- Tags -->
          <div class="mb-3">
            <div class="form-floating form-floating-outline">
              <input id="ecommerce-product-tags" class="form-control h-auto" name="ecommerce-product-tags" value="Normal,Standard,Premium" aria-label="Product Tags" />
              <label for="ecommerce-product-tags">Tags</label>
            </div>
          </div>
        </div>
      </div>
      <!-- /Organize Card -->
    </div>
    <!-- /Second column -->
  </div>
</div>

@endsection
