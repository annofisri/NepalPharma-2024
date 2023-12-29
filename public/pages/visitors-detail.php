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
          <div class="about-us-title">Visitors Details</div>
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
          <div class="route-name">Visitors Profile</div>
        </div>
      </div>
    </div>
  </section>

  <section class="exhibitors-detail visitors-detail-section">
    <!-- <div class="visitors-detail">
      <img src="images/visitors-detail-bg.png" alt="" class="w-100 h-100" />
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-12 exhibitors-detail-desc">
          <div>
            <div>
              <div class="exhibitor-profile ps-2">Visitor's Profile</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="273" height="20" viewBox="0 0 273 20" fill="none">
                <path d="M0 0H273L77.0204 14.0476L4.97494 20L0 0Z" fill="url(#paint0_linear_865_4239)" />
                <defs>
                  <linearGradient id="paint0_linear_865_4239" x1="273" y1="10" x2="-6.72962e-07" y2="9.99998" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5C2E91" />
                    <stop offset="1" stop-color="#93268F" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="profile-description-text pt-3">
              We welcome visitors from all kinds of fields. From Doctors,
              Health Professionals to Business Development managers and
              professionals. Visitors from following sectors are encouraged to
              come:
            </div>
          </div>
          <ul class="profile-description">
            <li>Doctors/Health Professionals and Pharmacists</li>
            <li>
              Technicians Control/Assurance, R&D Officers and Executives
            </li>
            <li>
              Business development managers of API, Drug Intermediates,
              Excipients, Natural Extracts
            </li>
            <li>Chemists & Bio Chemists, Microbiologists & Pathologists</li>
            <li>
              Pharmaceutical Formulations companies, Packaging
              Equipment/Materials
            </li>
            <li>Purchase Managers, Research Scholars, Scientific Officers</li>
            <li>
              Management/Marketing Consulting, Product Development Services,
              Semi-Finished Products, Vaccines, and antiviral drugs
            </li>
            <li>
              Financial Investment Opportunities & Publications /Journals/
              Books
            </li>
            <li>
              Laboratory/Analytical Equipment, Processing Equipment Contract
              Research, contract
            </li>
          </ul>
        </div>
      </div>

    </div>
    

  </section>

  <?php include_once __DIR__ . '/tags/organizors-sponsors.php'; ?>

  <?php include_once __DIR__ . '/tags/contact-us.php'; ?>

  <?php include_once __DIR__ . '/tags/footer.php'; ?>

  <?php include_once './includes/scripts.php'; ?>
</body>

</html>