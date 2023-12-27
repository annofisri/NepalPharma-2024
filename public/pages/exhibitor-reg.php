<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Exhibitors Registration Form</title>
  <?php include_once './includes/head.php'; ?>
</head>

<body>
  <?php include_once __DIR__ . '/tags/head-logo.php'; ?>
  <?php include_once __DIR__ . '/tags/navbar.php'; ?>


  <section class="page-info">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="about-us-title">Exhibitors Registration Form</div>
          <div class="about-us-desc">Nepal Pharma Expo 2024</div>
        </div>
      </div>
    </div>
  </section>

  <section class="route">
    <div class="container">
      <div class="row">
        <div class="col d-flex gap-2">
          <a class="route-home route-name" href="/">Home</a>
          <div class="route-name">/</div>
          <div class="route-name">Exhibitors Registration Form</div>
        </div>
      </div>
    </div>
  </section>

  <section class="exhibitor-reg-form">
    <div class="container">
      <div class="reg-box">
        <div class="reg-form">
          <div class="reg-text-fill text-center">
            Please fill out the form to book your stall in Nepal Expo 2024
          </div>
          <div class="reg-title">Exhibitor's Details</div>
          <form class="row g-3" id="exhibitorForm">
            <div class="col-12">
              <label for="company-name" class="form-label">Name of Company / Organization
                <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="company-name" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="chief-executive" class="form-label">Name of Chief Executive</label>
              <input type="text" class="form-control" id="chief-executive" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="Designation1" class="form-label">Designation</label>
              <input type="text" class="form-control" id="Designation1" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="contact-person" class="form-label">Name of the Contact Person
                <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" id="contact-person" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="Designation2" class="form-label">Designation<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="Designation2" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="inputAddress" class="form-label">Address<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="inputAddress" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" />
            </div>

            <div class="col-md-4 d-flex flex-column align-items-start">
              <label for="pin" class="form-label">Pin/Zip</label>
              <input type="number" class="form-control" id="pin" />
            </div>
            <div class="col-md-4">
              <label for="country" class="form-label">Country<span class="text-danger">*</span></label>
              <select id="country" class="form-select" required>
                <option selected>Nepal</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputPhone" class="form-label">Phone<span class="text-danger">*</span></label>
              <input type="tel" class="form-control" id="inputPhone" required />
            </div>

            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="website" class="form-label">Website</label>
              <input type="password" class="form-control" id="website" />
            </div>
            <div class="col-12 reg-submit">
              <button type="submit" class="reg-next-btn">Next</button>
            </div>
          </form>



        </div>
      </div>




      <div class="stall-selection-section d-none">
        <div class="row floor-section">
          <div class="col-md-6 floor-selection">
            <div class="selection-head d-flex justify-content-between">
              <div class="title">
                Please select your type of stall*
              </div>


              <!-- Button trigger modal -->
              <button type="button" class="view-floor-btn" data-bs-toggle="modal" data-bs-target="#stallModal">
                View Floor Plan
              </button>



            </div>

            <div class="row px-4 justify-content-center">
              <div class="col-md-4 category-box">
                <button type="button" class=" w-100 h-100" data-bs-toggle="modal" data-bs-target="#platinumStallModal" style="border:none;background:none; padding:0px; margin:0px;">
                  <div class="platinum w-100 h-100">


                    <p class="title">
                      Platinum
                    </p>
                    <p class="desc">
                      6 x 15
                    </p>

                  </div>
                </button>
              </div>
              <div class="col-md-4 category-box">
                <button type="button" class=" w-100 h-100" data-bs-toggle="modal" data-bs-target="#diamondStallModal" style="border:none;background:none; padding:0px; margin:0px;">
                  <div class="diamond w-100 h-100">
                    <p class="title">
                      Diamond
                    </p>
                    <p class="desc">
                      6 x 12
                    </p>
                  </div>
                </button>
              </div>
              <div class="col-md-4 category-box">
                <button type="button" class=" w-100 h-100" data-bs-toggle="modal" data-bs-target="#goldStallModal" style="border:none;background:none; padding:0px; margin:0px;">
                  <div class="gold w-100 h-100">
                    <p class="title">
                      Gold
                    </p>
                    <p class="desc">
                      6 x 10
                    </p>
                  </div>
                </button>
              </div>
              <div class="col-md-4 category-box">
                <button type="button" class=" w-100 h-100" data-bs-toggle="modal" data-bs-target="#silverStallModal" style="border:none;background:none; padding:0px; margin:0px;">
                  <div class="silver w-100 h-100">
                    <p class="title">
                      Silver
                    </p>
                    <p class="desc">
                      6 x 10
                    </p>
                  </div>
                </button>
              </div>
              <div class="col-md-4 category-box">
                <button type="button" class=" w-100 h-100" data-bs-toggle="modal" data-bs-target="#internationalStallModal" style="border:none;background:none; padding:0px; margin:0px;">
                  <div class="adjust international w-100 h-100">
                    <p class="title ">
                      International Exhibitor
                    </p>
                    <p class="desc">
                      3 x 3
                    </p>
                  </div>
                </button>
              </div>
              <div class="col-md-4 category-box">
                <button type="button" class=" w-100 h-100" data-bs-toggle="modal" data-bs-target="#vendorStallModal" style="border:none;background:none; padding:0px; margin:0px;">
                  <div class="adjust vendor w-100 h-100">
                    <p class="title">
                      Vendor Registered
                    </p>
                    <p class="desc">
                      3 x 3
                    </p>
                  </div>
                </button>
              </div>

            </div>
          </div>
          <div class="col-md-6 floor-charges">

            <div class="box">
              <div class="head">
                <div class="title ps-2">
                  Exhibition Stall Charges
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="486" height="20" viewBox="0 0 486 20" fill="none">
                  <path d="M0 0H486L137.113 14.0476L8.85649 20L0 0Z" fill="url(#paint0_linear_900_5271)" />
                  <defs>
                    <linearGradient id="paint0_linear_900_5271" x1="486" y1="10" x2="-1.19802e-06" y2="9.99994" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#5C2E91" />
                      <stop offset="1" stop-color="#93268F" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>

              <?php

              $result = '';

              foreach (STALL_TYPES as $key => $value) {

                $result .= '
                <div class="row category-list-item">
                  <div class="col-md-6">
                    ' . $value['name'] . '
                  </div>
                  <div class="col-md-3">
                    ' . $value['quantity'] . '
                  </div>
                  <div class="col-md-3">
                    ' . $value['price'] . ' INR
                  </div>
                </div>
                ';
              }

              echo $result;
              ?>



            </div>


          </div>
        </div>


        <div class="row estimated-amount ">
          <div class="col-md-12 title">
            Estimated Amount
          </div>
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Stall No.</th>
                <th scope="col">Area (sq. meter)</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>A51</th>
                <td>6 x 15</td>
                <td>16,00,000 INR</td>
              </tr>
              <tr>
                <th>B50</th>
                <td>6 x 12</td>
                <td>11,00,000 INR</td>
              </tr>
              <tr>
                <th>Total</th>
                <td></td>
                <td>27,00,000 INR</td>
              </tr>

            </tbody>
          </table>

          <div class="col-md-12 product-title">
            Enter Product Name
          </div>

          <div class="product-desc">
            The products of business line of the company which will be put on display at the exhibition through samples or display panel
          </div>

          <div class="col-md-6 product-input d-flex">
            <div class="serial-number">1</div>
            <input type="text" class="form-control" id="product-name1" placeholder="Enter Product Name Here*" required name="product-name1" />
          </div>
          <div class="col-md-6 product-input d-flex">
            <div class="serial-number">2</div>
            <input type="text" class="form-control" id="product-name2" placeholder="Enter Product Name Here" name="product-name2" />
          </div>
          <div class="col-md-6 product-input d-flex">
            <div class="serial-number">3 </div>
            <input type="text" class="form-control" id="product-name3" placeholder="Enter Product Name Here" name="product-name3" />
          </div>
          <div class="col-md-6 product-input d-flex">
            <div class="serial-number">4</div>
            <input type="text" class="form-control" id="product-name4" placeholder="Enter Product Name Here" name="product-name4" />
          </div>



          <div class="col-md-12 buttons">

            <button class="prev-btn">Previous</button>
            <button type="button" class=" w-100 h-100 next-btn" data-bs-toggle="modal" data-bs-target="#successModal" style="border:none;padding:0px; margin:0px;">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="organizers"></div>
  </section>



  <!-- Modals -->
  <div class="modal fade" id="stallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <div class="modal-body">
          <?php include __DIR__ . '/../api/layout.html'; ?>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="platinumStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title stall-title-head">6*15 sqm Platinum</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="a51" name="a51">
                  <label class="stall-label" for="a51" data-stall-name="A51">A51</label>
                  <div class="booked">(Booked)</div>
                </div>


              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="diamondStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title stall-title-head">6*12 sqm Diamond</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="container">
            <div class="row">
              <div class="col-md-6">

                <div class="modal-hall-name">
                  Hall A
                </div>


                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="a49" name="a49">
                  <label class="stall-label" for="a49" data-stall-name="A49">A49</label>
                  <div class="booked">(Booked)</div>
                </div>


              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="goldStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="silverStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="internationalStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="vendorStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
  <div class="modal fade modal-success" id="successModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content" style="overflow: hidden;">

        <div class=" modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="success-title">
                  Thank you !!!
                </div>
                <div class="success-desc">
                  <img src="images/khalti.png" alt="khalti logo" />
                  <p>
                    Please Download Khalti App
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>





  <?php include_once __DIR__ . '/tags/organizors-sponsors.php'; ?>

  <?php include_once __DIR__ . '/tags/contact-us.php'; ?>

  <?php include_once __DIR__ . '/tags/footer.php'; ?>

  <?php include_once './includes/scripts.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

  <script>
    $(document).ready(function() {

      // $('#exhibitorForm').validate({
      //   rules: {
      //     'company-name': {
      //       required: true,
      //     },
      //     'contact-person': {
      //       required: true,
      //     },
      //     'Designation2': {
      //       required: true,
      //     },
      //     'inputAddress': {
      //       required: true,
      //     },
      //     'country': {
      //       required: true,
      //     },
      //     'inputPhone': {
      //       required: true,
      //     },
      //     'email': {
      //       required: true,
      //     },
      //   },
      //   messages: {
      //     'company-name': {
      //       required: 'Please enter company name',
      //     },
      //     'contact-person': {
      //       required: 'Please enter contact person name',
      //     },
      //     'Designation1': {
      //       required: 'Please enter designation',
      //     },
      //     'Designation2': {
      //       required: 'Please enter designation',
      //     },
      //     'inputAddress': {
      //       required: 'Please enter address',
      //     },
      //     'city': {
      //       required: 'Please enter city',
      //     },
      //     'pin': {
      //       required: 'Please enter pin',
      //     },
      //     'country': {
      //       required: 'Please enter country',
      //     },
      //     'inputPhone': {
      //       required: 'Please enter phone number',
      //     },
      //     'email': {
      //       required: 'Please enter email',
      //     },
      //   },

      // })
      var bookedStalls = [];

      function getBookedStalls() {
        $.ajax({
          url: '/api/getBookedStalls.php',
          method: 'GET',
          success: function(response) {
            if (response.success) {
              bookedStalls = response.data;
              console.log(bookedStalls);
              $('.stall').removeClass('booked');
              bookedStalls.forEach(function(stall) {
                // console.log(stall);
                // console.log($('[data-stall-name="' + stall + '"]'));
                $('[data-stall-name="' + stall + '"]').closest('.stall').addClass('booked');
              });

            }
          }
        });
      }

      getBookedStalls();

      $('.reg-next-btn').click(function(e) {


        e.preventDefault();
        if ($('#exhibitorForm').validate()) {
          console.log('valid');
          $('.stall-selection-section').removeClass('d-none');
          $('.reg-box').addClass('d-none');
        } else {
          // prevent each input block
          // alert('Please fill all the required fields');
        }
      });

      $('.prev-btn').click(function() {
        $('.stall-selection-section').addClass('d-none');
        $('.reg-box').removeClass('d-none');
      });
    });
  </script>
</body>

</html>