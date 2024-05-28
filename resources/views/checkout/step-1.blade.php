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

    <main class="container">
      <h1 class="fw-bold"> How to Install Bootstrap 5 in Laravel 10 - ItSolutionstuiff.com</h1>


      <div class="row d-flex justify-content-around">
        <div class="col-12 col-lg-8">
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
                <option>5</option>
                <option>15</option>
                <option>7</option>
              </select>
            </div>
            <div class="col-8">
              <label for="address" class="form-label text-black fw-bold">Delivery Address*</label>
              <input type="text" class="form-control border-dark border-2 border-opacity-50" id="inputAddress" placeholder="Start Typing Address or Postcode">
            </div>
            <div class="d-flex">
              <span class="me-3 d-block"><a href="#">Enter Address Manually</a></span>
              <span class="d-block">Billing Address is Selected at the Review stage</span>
            </div>
            <div class="col-md-6">
              <label for="contactNumber" class="form-label text-black fw-bold">Contact Number*</label>
              <input type="tel" class="form-control border-dark border-2 border-opacity-50" placeholder="Enter Contact Number" aria-label="Contact number">
            </div>

            <div>
              <span class="text-black fw-bold me-1">Email:</span>
              <span></span><a href="#">nathan@football.co.uk</a></span>

            </div>



            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  <span>Yes, send me <a href="">FREE email </span></a>updates
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>

        <div class="col-12 col-lg-4 mt-5">
          <h3>Phones product</h3>
          <p id="product_id">123456</p>

          <hr />

          <div class="rating-outer">
            <div class="rating-inner">ratings</div>
          </div>
          <span id="no_of_reviews">5</span>

          <hr />

          <p id="product_price">$5.0</p>
          <div class="stockCounter d-inline">
            <span class="btn btn-danger minus" onClick={decreaseQty}>
              -
            </span>

            <input type="number" class="form-control count d-inline" value={quantity} readOnly />

            <span class="btn btn-primary plus" onClick={increaseQty}>
              +
            </span>
          </div>
          <button type="button" id="cart_btn" class="btn btn-primary d-inline ml-4">
            Add to Cart
          </button>

          <hr />

          <p>
            Status:{' '}
            <span id="stock_status" class='text-danger'>
              In Stock' : 'Out of Stock'
            </span>
          </p>

          <hr />

          <h4 class="mt-2">Description:</h4>
          <p>Lorem, ipsum./p>
            <hr />
          <p id="product_seller mb-3">
            Sold by: <strong>Agbasa</strong>
          </p>


          <button id="review_btn" type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#ratingModal" onClick={setUserRatings}>
            Submit Your Review
          </button>

          <div class="alert alert-danger mt-5" type="alert">
            Login to post your review.
          </div>


          <div class="row mt-2 mb-5">
            <div class="rating w-50">
              <div class="modal fade" id="ratingModal" tabIndex="-1" role="dialog" aria-labelledby="ratingModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ratingModalLabel">
                        Submit Review
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <ul class="stars">
                        <li class="star">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="star">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="star">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="star">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="star">
                          <i class="fa fa-star"></i>
                        </li>
                      </ul>

                      <textarea name="review" id="review" class="form-control mt-3" value={comment}></textarea>

                      <button class="btn my-3 float-right review-btn px-4 text-white" onClick={reviewHandler} data-dismiss="modal" aria-label="Close">
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>







    </main>
  </div>
</body>

</html>