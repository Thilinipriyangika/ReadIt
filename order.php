<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>OrderPage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="assets/css/styles-order.css" />
    

  </head>
  <body style="background: url('assets/img/12.jpg'); background-size: cover">
    <div class="row register-form">
      <div class="col-md-8 offset-md-2">
        <form class="custom-form">
          <h1>Order Form</h1>
          <div class="row form-group">
            <div class="col-sm-4 col-xxl-4 label-column">
              <label class="col-form-label" for="dropdown-input-field"
                >Book Name</label
              >
            </div>
            <div class="col-sm-4 input-column">
              <div class="dropdown">
                <button
                  class="btn btn-light dropdown-toggle"
                  aria-expanded="false"
                  data-bs-toggle="dropdown"
                  type="button"
                >
                  Select Book&nbsp;
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">First Item</a
                  ><a class="dropdown-item" href="#">Second Item</a
                  ><a class="dropdown-item" href="#">Third Item</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-4 label-column cl-quantity">
              <label class="col-form-label" for="name-input-field"
                >Quantity</label
              >
            </div>
            <div class="col-sm-6 input-column">
              <input class="form-control" type="text" />
            </div>
          </div>
          <div class="row form-group">
            <div class="col-sm-4 label-column cl-price">
              <label class="col-form-label" for="email-input-field"
                >Price</label
              >
            </div>
            <div class="col-sm-6 input-column">
              <input class="form-control" type="email" />
            </div>
          </div>
          <button class="btn btn-light submit-button" type="button">
            Order Now
          </button>
        </form>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
