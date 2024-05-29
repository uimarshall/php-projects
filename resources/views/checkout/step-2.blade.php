<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style type="text/css">
    i {
      font-size: 50px;
    }
  </style>
</head>

<body>
  <div id="app">

    <main class="container" id="checkout-guest-details">
      <!-- <h1 class="fw-bold"> How to Install Bootstrap 5 in Laravel 10 - ItSolutionstuiff.com</h1> -->


      <div class="row d-flex justify-content-around g-5">
        <div class="col-12 col-lg-8">

          <h5 class="text-muted fw-bold text-uppercase">guest checkout</h5>
          <div class="d-flex justify-content-between">
            <h1 class="fw-bold text-uppercase heading-font">details</h1>
            <p class="align-self-center"><a href="" class="fw-bold text-capitalize">back</a></p>
          </div>
          <hr />
          <form class="row g-3">
            <div class="col-md-6">
              <label for="firstName" class="form-label text-black fw-bold">First Name*</label>
              <input type="text" class="form-control border-dark border-2 border-opacity-50" placeholder="Enter First Name" aria-label="First name">
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label text-black fw-bold">Last Name*</label>
              <input type="text" class="form-control border-dark border-2 border-opacity-50" placeholder="Enter Last Name" aria-label="Last name">
            </div>
            <div class="col-md-6">
              <label for="clubName" class="form-label text-black fw-bold">Club Name*</label>
              <input type="text" class="form-control border-dark border-2 border-opacity-50" placeholder="Enter Club Name" aria-label="Club name">
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label text-black fw-bold">Number of Teams in Club*</label>

              <select id="teams" class="form-select border-dark border-2 border-opacity-50">
                <option selected>Please select...</option>
                <option value="5">5</option>
                <option value="2">15</option>
                <option value="6">7</option>
              </select>
            </div>
            <div class="col-md-8 col-lg-8">
              <label for="address" class="form-label text-black fw-bold">Delivery Address*</label>
              <input type="text" class="form-control border-dark border-2 border-opacity-50" id="inputAddress" placeholder="Start Typing Address or Postcode">
            </div>
            <div class="d-flex flex-column flex-md-row">
              <span class="me-3 d-block"><a href="#">Enter Address Manually</a></span>
              <span class="d-block">Billing Address is Selected at the Review stage.</span>
            </div>
            <div class="col-md-6">
              <label for="contactNumber" class="form-label text-black fw-bold">Contact Number*</label>
              <input type="tel" class="form-control border-dark border-2 border-opacity-50" placeholder="Enter Contact Number" aria-label="Contact number">
            </div>

            <div class="d-flex justify-content-between">
              <div class="align-self-center"><span class="text-black fw-bold me-1">Email:</span>
                <span class="email"><a href="mailto:nathan@football.co.uk">nathan@football.co.uk</a></span>
              </div>
              <p class="align-self-center"><a href="#" class="text-capitalize">Change</a></p>
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input border-dark border-2 border-opacity-50" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  <span>Yes, send me <a href="mailto:nathan@football.co.uk">FREE email updates</a></span> from Pendle Sportwear about products, services, offers &amp; more.
                </label>
              </div>
            </div>

          </form>
          <hr />
          <div class="col-12">
            <h1 class="fw-bold text-uppercase heading-font">delivery options</h1>
            <p class="text-capitalize small text-black">Please Select a Delivery Option *</p>
          </div>
          @include('checkout.partials.delivery-options',['options' => 'royal mail first class'])

          @include('checkout.partials.delivery-options',['options' => 'DPD (Tracked)'])
          <div class="col-12">
            <p class="text-capitalize small text-primary fw-bold mb-4">Estimated Latest Delivery Date: <span class="text-muted smaller-font">Wed 9th June, 9am - 9pm</span></p>
          </div>
          <div class="col-12 mb-4">
            <button class="btn btn-primary text-uppercase w-100 h-100" type="button">proceed<i class="bi bi-chevron-right icon-100"></i></button>
          </div>

        </div>
        <!-- Order Summary -->
        <div class="col-12 col-lg-4 mt-5">
          <div class="d-flex justify-content-start">
            <p><i class="bi bi-lock-fill icon-200 me-3"></i>
            </p>
            <p class="fw-bold">Safe & Secure Checkout. Your personal
              details are protected at all times.</p>
          </div>
          <hr />
          <h6 class="fw-bold">Order Summary</h6>
          <section class="">

            <div class="card card-stepper">
              <div class="card-body px-4">
                <div class="d-flex flex-row mb-1 pb-2">
                  <div class="flex-fill">
                    <img class="align-self-start img-fluid" src="{{ asset('assets/pendle-shirt.png') }}" alt="product" width="84">
                  </div>
                  <div class="">
                    <div class="d-flex align-self-start">
                      <h5 class="small text-capitalize pe-3 fw-bold">Genoa football shirt</h5>
                      <h5 class="small fw-bold">$85.95</h5>
                    </div>
                    <p class="text-muted text-capitalize small">Red/Black</p>
                    <p class="text-muted small">Size: XL</p>
                    <p class="text-muted text-uppercase small"> Qty: 5</p>

                    <!-- <p class="text-muted">Tracking Status on: <span class="text-body">11:30pm, Today</span></p> -->
                  </div>

                </div>

              </div>
              <hr />
              <div class="d-flex justify-content-between px-4 bg-secondary-subtle py-2">
                <h5 class="fs-6 text-uppercase fw-bold">total:</h5>
                <h5 class="fs-6 fw-bold">$85.95</h5>
              </div>
              <div class="px-4 py-1">
                <div class="d-flex justify-content-between">
                  <h5 class="fw-normal mb-0 text-capitalize fs-6"><a href="#!">change</a></h5>
                  <h5 class="fw-normal mb-0 text-capitalize fs-6"><a href="#!">continue shopping</a></h5>
                </div>
                <hr />
              </div>
            </div>
          </section>
          <div class="alert bg-yellow mt-2" type="alert">
            <span class="text-black fw-bold">Please note:</span> this order contains customisation.
            Payment <span class="text-black fw-bold">WILL NOT</span> be taken at this stage.
            Once the order has been placed, please ensure to
            confirm & pay when we email you.
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>