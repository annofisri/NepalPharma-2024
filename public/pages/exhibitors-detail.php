<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Exhibitor's details</title>
  <?php include_once './includes/head.php'; ?>
</head>

<body>
  <?php include_once __DIR__ . '/tags/head-logo.php'; ?>
  <?php include_once __DIR__ . '/tags/navbar.php'; ?>

  <section class="page-info">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="about-us-title">Exhibitors Details</div>
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
          <div class="route-name">Exhibitors Profile</div>
        </div>
      </div>
    </div>
  </section>

  <section class="exhibitors-detail">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="exhibitors-detail-box">
            <img src="images/exhibitors-detail.png" alt="exhibitors-detail" class="w-100 h-100 object-fit-cover" />
          </div>
        </div>
        <div class="col-md-6 exhibitors-detail-desc">
          <div>
            <div class="exhibitor-profile ps-2">Exhibitor’s Profile</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="317" height="20" viewBox="0 0 317 20" fill="none">
              <path d="M0 0H317L89.434 14.0476L5.77677 20L0 0Z" fill="url(#paint0_linear_865_3788)" />
              <defs>
                <linearGradient id="paint0_linear_865_3788" x1="317" y1="10" x2="-7.81424e-07" y2="9.99998" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#5C2E91" />
                  <stop offset="1" stop-color="#93268F" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <ul class="profile-description">
            <li>
              Pharmaceutical Herbal processing plants & Equipments Laboratory
              and Analytical Techniques / Instruments / Technologies /
              Services Chemical and Reagents.
            </li>
            <li>
              Biochemical Education Lab Instruments, Electrical Meters &
              Measurement Metrology, Calibration.
            </li>
            <li>
              Facility for Analysis & Experiment Healthcare and Safety
              Facility.
            </li>
            <li>Nanotechnology Laboratory Services.</li>
            <li>Association, Magazines etc</li>
            <li>
              Environmental and Pollution Control Systems, Measuring and
              Testing Equipment, Quality Control Service Analytical and
              Environment Equipments Research and Innovation.
            </li>

            <li>
              Microscopes Biotechnology, Life Sciences, Medical Science
              General Laboratory & Laboratory Furnishing / Interior.
            </li>

            <li>Pharma Packaging Machinery & Materials.</li>

            <li>Environmental control equipments (AHU/HVAC).</li>

          </ul>
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