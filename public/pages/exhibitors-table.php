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
          <div class="route-name">Exhibitors List</div>
        </div>
      </div>
    </div>
  </section>

  <section class="exhibitors-table">
    <div class="container">
      <div class="row">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
              Exhibitors List of 2024
            </button>
          </li>
          <!-- <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
              Exhibitors List of 2022
            </button>
          </li> -->
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="search-bar">
              <div>EXHIBITORS LIST</div>




              <div class="position-relative">
                <input type="text" name="search" class="icon" placeholder="" />
                <svg class="position-absolute top-50 end-0 translate-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                  <path d="M19.6 19.0363L13.3 13.4113C12.8 13.7684 12.225 14.0512 11.575 14.2595C10.925 14.4678 10.2333 14.572 9.5 14.572C7.68333 14.572 6.146 14.0101 4.888 12.8863C3.63 11.7625 3.00067 10.3898 3 8.76841C3 7.14639 3.62933 5.77377 4.888 4.65056C6.14667 3.52734 7.684 2.96544 9.5 2.96484C11.3167 2.96484 12.854 3.52675 14.112 4.65056C15.37 5.77437 15.9993 7.14699 16 8.76841C16 9.42318 15.8833 10.0407 15.65 10.6211C15.4167 11.2015 15.1 11.7148 14.7 12.1613L21 17.7863L19.6 19.0363ZM9.5 12.7863C10.75 12.7863 11.8127 12.3955 12.688 11.614C13.5633 10.8324 14.0007 9.88389 14 8.76841C14 7.65234 13.5623 6.70353 12.687 5.92199C11.8117 5.14044 10.7493 4.74996 9.5 4.75056C8.25 4.75056 7.18733 5.14133 6.312 5.92288C5.43667 6.70443 4.99933 7.65294 5 8.76841C5 9.88449 5.43767 10.8333 6.313 11.6148C7.18833 12.3964 8.25067 12.7869 9.5 12.7863Z" fill="#2E2E2E" />
                </svg>
              </div>
            </div>
            <div class="table-container">
              <table class="table table-borderless">
                <thead class="table-head">
                  <tr>
                    <th scope="col-md-5">COMPANY NAME</th>
                    <th scope="col-md-4">COUNTRY</th>
                    <th scope="col-md-3">STALL NO</th>
                  </tr>
                </thead>
                <tbody class="table-body">
                  <tr>
                    <td>ONLINE PRINT AND PACK PVT LTD</td>
                    <td>NEPAL</td>
                    <td>C48</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="search-bar">
              <div>EXHIBITORS LIST</div>
            </div>
            <div class="table-container">
              <table class="table table-borderless">
                <thead class="table-head">
                  <tr>
                    <th scope="col-md-8">COMPANY NAME</th>
                    <th scope="col-md-4">COUNTRY</th>
                  </tr>
                </thead>
                <tbody class="table-body">
                  <tr>
                    <td>NEPAL PHARMACEUTICALS LAB. PVT. LTD</td>
                    <td>NEPAL</td>
                  </tr>
                  <tr>
                    <td>ONLINE PRINT AND PACK PVT LTD</td>
                    <td>NEPAL</td>
                  </tr>
                  <tr>
                    <td>NEPAL PHARMACEUTICALS LAB. PVT. LTD</td>
                    <td>NEPAL</td>
                  </tr>
                  <tr>
                    <td>NEPAL PHARMACEUTICALS LAB. PVT. LTD</td>
                    <td>NEPAL</td>
                  </tr>
                  <tr>
                    <td>NEPAL PHARMACEUTICALS LAB. PVT. LTD</td>
                    <td>NEPAL</td>
                  </tr>
                  <tr>
                    <td>NEPAL PHARMACEUTICALS LAB. PVT. LTD</td>
                    <td>NEPAL</td>
                  </tr>
                  <tr>
                    <td>NEPAL PHARMACEUTICALS LAB. PVT. LTD</td>
                    <td>NEPAL</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="organizers"></div>
  </section>

  <?php include_once __DIR__ . '/tags/organizors-sponsors.php'; ?>

  <?php include_once __DIR__ . '/tags/contact-us.php'; ?>

  <?php include_once __DIR__ . '/tags/footer.php'; ?>

  <?php include_once './includes/scripts.php'; ?>

  <script>
    $(document).ready(function() {

      var exhibitorList = [];

      function renderTableData() {
        exhibitorList.forEach(function(exhibitor) {
          var html = `
                    <tr>
                        <td>${exhibitor.name}</td>
                        <td>${exhibitor.country}</td>
                        <td>${exhibitor.stall_no}</td>
                    </tr>
                `;
          $('.table-body').append(html);
        });
      }

      function fetchAndSetExhibitors() {
        $('.table-body').html('');
        $.ajax({
          url: '/api/getAllExhibitors.php',
          type: 'POST',
          data: '&status=approved',

          success: function(response) {
            if (response.success) {
              // console.log(response.data);
              exhibitorList = response.data;
              renderTableData();
            } else {
              alert(response.message);
            }
          },
          error: function(error) {
            console.log(error);
          }
        });
      }
      fetchAndSetExhibitors();
    });
  </script>
</body>

</html>