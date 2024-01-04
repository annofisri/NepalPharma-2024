<?php
$tableStall = new TableManager('stall');

$stalls = $tableStall->getAll();

$stallsMap = [];

foreach ($stalls as $stall) {
  $hall_no = str_replace(' ', '_', $stall['hall_no']);
  $stallsMap[$stall['type']][$hall_no][] = $stall;
}

?>
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
          <form class="row g-3" id="step-1">
            <div class="col-12">
              <label for="companyname" class="form-label">
                Name of Company / Organization<span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" id="companyname" name="companyname" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="chiefexecutive" class="form-label">Name of Chief Executive</label>
              <input type="text" class="form-control" id="chiefexecutive" name="chiefexecutive" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="designation1" class="form-label">Designation</label>
              <input type="text" class="form-control" id="designation1" name="designation1" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="contactperson" class="form-label">
                Name of the Contact Person<span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" id="contactperson" name="contactperson" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="designation2" class="form-label">Designation<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="designation2" name="designation2" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="address" class="form-label">Address<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="address" name="address" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" />
            </div>

            <div class="col-md-4 d-flex flex-column align-items-start">
              <label for="pin" class="form-label">Pin/Zip</label>
              <input type="number" class="form-control" id="pin" name="pin" />
            </div>
            <div class="col-md-4">
              <label for="country" class="form-label">Country<span class="text-danger">*</span></label>
              <select id="country" name="country" class="form-select" required>
              </select>
            </div>
            <div class="col-md-4">
              <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
              <input type="tel" class="form-control" id="phone" name="phone" required />
            </div>

            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="website" class="form-label">Website</label>
              <input type="text" class="form-control" id="website" name="website" />
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
                      6 x 10
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
                      6 x 7.5
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
                      6 x 5
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
                      6 x 3
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


        <form id="step-2">
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
              <tbody id="estimated-list">
              </tbody>
              <tfoot>
                <tr>
                  <th>Total</th>
                  <td></td>
                  <td id="grand-total"></td>
                </tr>
              </tfoot>
            </table>
            <div class="col-md-12 product-title">
              Enter Product Name
            </div>
            <div class="product-desc">
              The products of business line of the company which will be put on display at the exhibition through samples or display panel
            </div>
            <div class="col-md-6 product-input d-flex">
              <div class="serial-number">1</div>
              <input type="text" class="form-control" id="productname1" placeholder="Enter Product Name Here*" required autocomplete="off" name="productname1" />
            </div>
            <div class="col-md-6 product-input d-flex">
              <div class="serial-number">2</div>
              <input type="text" class="form-control" id="productname2" placeholder="Enter Product Name Here" autocomplete="off" name="productname2" />
            </div>
            <div class="col-md-6 product-input d-flex">
              <div class="serial-number">3 </div>
              <input type="text" class="form-control" id="productname3" placeholder="Enter Product Name Here" autocomplete="off" name="productname3" />
            </div>
            <div class="col-md-6 product-input d-flex">
              <div class="serial-number">4</div>
              <input type="text" class="form-control" id="productname4" placeholder="Enter Product Name Here" autocomplete="off" name="productname4" />
            </div>
            <div class="col-md-12 buttons">
              <button class="prev-btn">Previous</button>
              <button type="submit" class="next-btn">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
    <div id="organizers"></div>
  </section>



  <!-- Modals -->
  <div class="modal fade" id="dialogModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <div class="alert alert-danger">
            Please select atleast one stall from stall category.
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="stallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <div class="modal-body" style="padding-left: 150px;">
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
                <div class="modal-hall-name">
                  Hall A
                </div>
                <?php
                $div = '';
                foreach ($stallsMap['platinum']['Hall_A'] as $stall) {
                  $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
                }
                echo $div;
                ?>
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
          <h5 class="modal-title stall-title-head">6*10 sqm Diamond</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="modal-hall-name">
                  Hall B
                </div>
                <?php
                $div = '';
                foreach ($stallsMap['diamond']['Hall_B'] as $stall) {
                  $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
                }
                echo $div;
                ?>
              </div>
              <div class="col-md-6">
                <div class="modal-hall-name">
                  Hall C
                </div>
                <?php
                $div = '';
                foreach ($stallsMap['diamond']['Hall_C'] as $stall) {
                  $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
                }
                echo $div;
                ?>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="goldStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title stall-title-head">6*7.5 sqm Gold</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="modal-hall-name">
                Hall A
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['gold']['Hall_A'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
            <div class="col-md-6">
              <div class="modal-hall-name">
                Hall B
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['gold']['Hall_B'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="silverStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title stall-title-head">6*5 sqm Silver</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="modal-hall-name">
                Hall B
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['silver']['Hall_B'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
            <div class="col-md-6">
              <div class="modal-hall-name">
                Hall C
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['silver']['Hall_C'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="internationalStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title stall-title-head">6*3 sqm International Exhibitor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="modal-hall-name">
                Hall A
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['international_exhibitor']['Hall_A'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
            <div class="col-md-4">
              <div class="modal-hall-name">
                Hall B
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['international_exhibitor']['Hall_B'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
            <div class="col-md-4">
              <div class="modal-hall-name">
                Hall C
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['international_exhibitor']['Hall_C'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="vendorStallModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title stall-title-head">3*3 sqm Vendor Registered</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="modal-hall-name">
                Hall A
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['vendor_registered']['Hall_A'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
            <div class="col-md-4">
              <div class="modal-hall-name">
                Hall B
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['vendor_registered']['Hall_B'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
            <div class="col-md-4">
              <div class="modal-hall-name">
                Hall C
              </div>
              <?php
              $div = '';
              foreach ($stallsMap['vendor_registered']['Hall_C'] as $stall) {
                $div .= '<div class="form-check">
                    <input class="form-check-input" type="checkbox" data-stall-type="' . $stall['type'] . '" id="' . $stall['name'] . '" name="stall[]" value="' . $stall['name'] . '" ' . ($stall['status'] == 'booked' ? 'disabled' : '') . '>
                    <label class="stall-label" for="' . $stall['name'] . '" data-stall-name="' . $stall['name'] . '">' . $stall['name'] . '</label>
                    ' . ($stall['status'] == 'booked' ? '<div class="booked">(Booked)</div>' : '') . '
                  </div>';
              }
              echo $div;
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade modal-success" id="khaltiModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
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
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script> -->

  <script>
    $(document).ready(function() {

      var stallCategory = <?php echo json_encode(STALL_TYPES); ?>;
      var bookedStalls = [];

      function getBookedStalls() {
        $.ajax({
          url: '/api/getBookedStalls.php',
          method: 'GET',
          success: function(response) {
            if (response.success) {
              bookedStalls = response.data;
              $('.stall').removeClass('booked');
              bookedStalls.forEach(function(stall) {
                $('[data-stall-name="' + stall + '"]').closest('.stall').addClass('booked');
              });

            }
          }
        });
      }

      function populateCountry() {
        const $selectCountry = $('#country');
        $selectCountry.append(`<option value="" selected>Choose a Country</option>`);
        $.getJSON('/api/countries.json', function(response) {
          response.forEach(function(country) {
            $selectCountry.append(`<option value="${country.name}">${country.name}</option>`);
          });
        });
      }

      populateCountry();

      $('input[type="checkbox"]').change(function() {
        renderEstimatedAmount();
      });

      renderEstimatedAmount();
      var selectedStalls = [];

      function renderEstimatedAmount() {
        selectedStalls = [];
        let content = '';
        let grandTotal = 0;

        $('input[type="checkbox"]:checked').each((index, elem) => {
          selectedStalls.push($(elem).val());
          content += `<tr><td>${$(elem).val()}</td><td>${stallCategory[$(elem).data('stall-type')].size}</td><td>${parseFloat(stallCategory[$(elem).data('stall-type')].price).toFixed(2)} INR</td></tr>`;
          const amount = stallCategory[$(elem).data('stall-type')].price;
          grandTotal += parseFloat(amount);
        });

        $('#estimated-list').html(content);
        $('#grand-total').text(`${grandTotal.toFixed(2)}` + ' INR');

      }

      getBookedStalls();

      $('.reg-next-btn').click(function(e) {
        e.preventDefault();

        const $form1 = $('#step-1');

        if ($form1[0].checkValidity()) {
          $('.stall-selection-section').removeClass('d-none');
          $('.reg-box').addClass('d-none');
          const scrollTop = $('.exhibitor-reg-form').offset().top;

          window.scrollTo({
            top: scrollTop - 100,
            behavior: 'smooth' // Optional: Use smooth scrolling animation
          });
        } else {
          $form1[0].reportValidity();
        }

      });

      $('.next-btn').click(function(e) {
        e.preventDefault();

        if (selectedStalls.length == 0) {
          $('#dialogModal').modal('show');
          return;
        }

        const $form2 = $('#step-2');

        if ($form2[0].checkValidity()) {

          var formData1 = $('#step-1').serializeArray();
          var formData2 = $('#step-2').serializeArray();

          var combinedData = {};
          $.each(formData1.concat(formData2), function(index, field) {
            combinedData[field.name] = field.value;
          });

          combinedData.selectedStalls = selectedStalls;
          combinedData.btnCreateExhibitor = true;

          $.ajax({
            type: 'POST',
            url: '/api/exhibitor.php',
            data: combinedData,
            success: function(response) {
              // TODO: Show Khalti Modal and TimeOut after 10 seconds

              if (response.success == true) {
                $('.stall-selection-section').addClass('d-none');
                $('#khaltiModal').modal('show');
              } else {
                alert(response.message);
              }
            },
            error: function(error) {
              console.error('Error:', error);
            }
          });

        } else {
          $form2[0].reportValidity();
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