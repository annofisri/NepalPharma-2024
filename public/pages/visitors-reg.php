<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Visitors details</title>
  <?php include_once './includes/head.php'; ?>
</head>

<body>
  <?php include_once __DIR__ . '/tags/head-logo.php'; ?>
  <?php include_once __DIR__ . '/tags/navbar.php'; ?>

  <section class="page-info">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="about-us-title">Visitors Registration Form</div>
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
          <div class="route-name">Visitors Registration Form</div>
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
          <div class="reg-title">Visitor Form</div>
          <form class="row g-3">
            <div class="col-12">
              <label for="company-name" class="form-label">Name of Company
              </label>
              <input type="text" class="form-control" id="company-name" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="name" class="form-label">Visitor Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="name" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="Designation1" class="form-label">Designation</label>
              <input type="text" class="form-control" id="Designation1" />
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>

              <input type="text" class="form-control" id="email" required />
            </div>

            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="country" class="form-label">Country<span class="text-danger">*</span></label>
              <select id="country" class="form-select" required>
                <option selected>Nepal</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" />
            </div>
            <div class="col-md-6">
              <label for="address" class="form-label">Adddress<span class="text-danger">*</span></label>
              <input type="tel" class="form-control" id="address" required />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start">
              <label for="pin" class="form-label">Pin/Zip</label>
              <input type="number" class="form-control" id="pin" />
            </div>

            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="phone" class="form-label">Phone</label>
              <input type="email" class="form-control" id="phone" />
            </div>
            <div class="col-md-6 d-flex flex-column align-items-start px-2">
              <label for="about-business" class="form-label">About Your Business<span class="text-danger">*</span></label>
              <select id="about-business" class="form-select">
                <option>Select</option>
                <option>Government Agency/Organization</option>
                <option>Regular</option>
                <option>NGO/ UN Body</option>
                <option>Manufacturer</option>
                <option>Trader/Distributor</option>
                <option>Importer</option>
                <option>Agent/Representative</option>
                <option>Association</option>
                <option>Others</option>
              </select>
            </div>
            <div class="col-6 d-flex flex-column">
              <div class="pb-3">Your key reason for visiting the show</div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check1" />
                <label class="form-check-label" for="check1">To evaluate products & services</label>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check2" />
                <label class="form-check-label" for="check2">To seek agencies</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check3" />
                <label class="form-check-label" for="check3">To buy products & services</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check4" />
                <label class="form-check-label" for="check4">To seek joint ventures & collaborations</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check5" />
                <label class="form-check-label" for="check5">Others</label>
              </div>
            </div>
            <div class="col-6 d-flex flex-column">
              <div class="pb-3">Area of Interest</div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check6" />
                <label class="form-check-label" for="check6">Area</label>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check7" />
                <label class="form-check-label" for="check7">of</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check8" />
                <label class="form-check-label" for="check8">Interest</label>
              </div>
            </div>
            <div class="col-6 d-flex flex-column pe-5">
              <div class="pb-3">
                Do you purchase or recommend any of the products listed below?
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check9" />
                <label class="form-check-label" for="check9">Area</label>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check10" />
                <label class="form-check-label" for="check10">of</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check11" />
                <label class="form-check-label" for="check11">Interest</label>
              </div>
            </div>
            <div class="col-6 d-flex flex-column">
              <div class="pb-3">How did you hear about us?</div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check12" />
                <label class="form-check-label" for="check12">Newspaper</label>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check13" />
                <label class="form-check-label" for="check13">Social Media</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border border-dark border-2" id="check14" />
                <label class="form-check-label" for="check14">Website</label>
              </div>
            </div>

            <div class="col-12 reg-submit">
              <button type="submit" class="reg-next-btn">Next</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="organizers"></div>

  </section>

  <?php include_once __DIR__ . '/tags/organizors-sponsors.php'; ?>

  <?php include_once __DIR__ . '/tags/contact-us.php'; ?>

  <?php include_once __DIR__ . '/tags/footer.php'; ?>

  <?php include_once './includes/scripts.php'; ?>
</body>

</html>