<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <?php include_once './includes/head.php'; ?>
</head>

<body>
  <?php include_once __DIR__ . '/tags/head-logo.php'; ?>
  <?php include_once __DIR__ . '/tags/navbar.php'; ?>

  <section class="page-info">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="about-us-title">Our Contact</div>
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
          <div class="route-name">Contact Us</div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us-section" id="contact-us">
    <div class="container">
      <form id="contact-form">
        <div class="row">
          <div class="col-md-8 contact-form">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="first_name" class="form-label">First name*</label>
                <input type="text" name="first_name" class="form-control" aria-label="First name" id="first_name" required />
              </div>
              <div class="col-md-6">
                <label for="last_name" class="form-label">Last name*</label>
                <input type="text" name="last_name" class="form-control" aria-label="Last name" id="last_name" required />
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email*</label>
                <input type="email" name="email" class="form-control" aria-label="Email" id="email" required />
              </div>
              <div class="col-md-6">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" aria-label="Phone Number" id="phone_number" />
              </div>

              <div class="col-md-12 text-area">
                <textarea name="message" class="form-control" aria-label="Message" placeholder="Type your message here..." rows="6" id="message" required></textarea>
              </div>
              <div class="col-12 submit-btn">
                <button type="submit" class="">
                  Send Message
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4 contact-us">
            <div>
              <div class="contact-us-title ps-2">Contact Us</div>
              <svg class="underline-svg" xmlns="http://www.w3.org/2000/svg" width="295" height="20" viewBox="0 0 295 20" fill="none">
                <path d="M0 0H295L83.2272 14.0476L5.37585 20L0 0Z" fill="url(#paint0_linear_851_468)" />
                <defs>
                  <linearGradient id="paint0_linear_851_468" x1="295" y1="10" x2="-7.27193e-07" y2="9.99998" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5C2E91" />
                    <stop offset="1" stop-color="#93268F" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="contact-us-desc">
              <div>Block/Room No: 401, 4th Floor,</div>
              <div>Bagmati Chamber, Teku, Kathmandu,</div>
              Nepal
              <div>G.P.O. Box No. 23528</div>
            </div>
            <div class="contact-us-desc wesite">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                <path d="M15.0418 13.3335C15.1252 12.646 15.1877 11.9585 15.1877 11.2502C15.1877 10.5418 15.1252 9.8543 15.0418 9.1668H18.5627C18.7293 9.8335 18.8335 10.5314 18.8335 11.2502C18.8335 11.9689 18.7293 12.6668 18.5627 13.3335H15.0418ZM13.1981 19.1252C13.8231 17.9689 14.3022 16.7189 14.6356 15.4168H17.7085C16.6993 17.1546 15.0982 18.471 13.1981 19.1252ZM12.9377 13.3335H8.0627C7.9585 12.646 7.896 11.9585 7.896 11.2502C7.896 10.5418 7.9585 9.8439 8.0627 9.1668H12.9377C13.0314 9.8439 13.1043 10.5418 13.1043 11.2502C13.1043 11.9585 13.0314 12.646 12.9377 13.3335ZM10.5002 19.5418C9.6356 18.2918 8.9377 16.9064 8.5106 15.4168H12.4897C12.0627 16.9064 11.3647 18.2918 10.5002 19.5418ZM6.3335 7.0835H3.29183C4.29064 5.34101 5.89057 4.02254 7.79183 3.37516C7.16683 4.53141 6.69808 5.78141 6.3335 7.0835ZM3.29183 15.4168H6.3335C6.69808 16.7189 7.16683 17.9689 7.79183 19.1252C5.89456 18.4706 4.29688 17.154 3.29183 15.4168ZM2.43766 13.3335C2.271 12.6668 2.16683 11.9689 2.16683 11.2502C2.16683 10.5314 2.271 9.8335 2.43766 9.1668H5.9585C5.87516 9.8543 5.81266 10.5418 5.81266 11.2502C5.81266 11.9585 5.87516 12.646 5.9585 13.3335H2.43766ZM10.5002 2.94808C11.3647 4.19808 12.0627 5.59391 12.4897 7.0835H8.5106C8.9377 5.59391 9.6356 4.19808 10.5002 2.94808ZM17.7085 7.0835H14.6356C14.3096 5.79335 13.8268 4.54797 13.1981 3.37516C15.1147 4.03141 16.7085 5.35433 17.7085 7.0835ZM10.5002 0.833496C4.73975 0.833496 0.0834961 5.521 0.0834961 11.2502C0.0834961 14.0128 1.18096 16.6624 3.13447 18.6159C4.10174 19.5831 5.25007 20.3504 6.51388 20.8739C7.77768 21.3974 9.1322 21.6668 10.5002 21.6668C13.2628 21.6668 15.9124 20.5694 17.8659 18.6159C19.8194 16.6624 20.9168 14.0128 20.9168 11.2502C20.9168 9.8822 20.6474 8.5277 20.1239 7.26388C19.6004 6.00007 18.8331 4.85174 17.8659 3.88447C16.8986 2.91719 15.7503 2.1499 14.4864 1.62642C13.2226 1.10293 11.8681 0.833496 10.5002 0.833496Z" fill="#121212" />
              </svg>
              <a href="https://appon.org.np/">www.appon.org.np</a>
            </div>
            <div class="contact-person">
              <h5 class="contact-person-name">Arvind Sunuwar</h5>
              <div class="contact-person-phone contact-us-desc">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24" fill="none">
                  <path d="M11.146 0.861572H2.81266C2.12199 0.861572 1.45961 1.13593 0.971236 1.62431C0.482856 2.11268 0.208496 2.77506 0.208496 3.46573V21.174C0.208496 21.8647 0.482856 22.5271 0.971236 23.0154C1.45961 23.5038 2.12199 23.7782 2.81266 23.7782H11.146C11.8367 23.7782 12.499 23.5038 12.9874 23.0154C13.4758 22.5271 13.7502 21.8647 13.7502 21.174V3.46573C13.7502 2.77506 13.4758 2.11268 12.9874 1.62431C12.499 1.13593 11.8367 0.861572 11.146 0.861572ZM6.9793 22.7365C6.1147 22.7365 5.4168 22.0386 5.4168 21.174C5.4168 20.3094 6.1147 19.6115 6.9793 19.6115C7.8439 19.6115 8.5418 20.3094 8.5418 21.174C8.5418 22.0386 7.8439 22.7365 6.9793 22.7365ZM11.6668 18.5699H2.29183V3.98657H11.6668V18.5699Z" fill="black" />
                </svg>
                <a href="tel:+977-9801588862">+977-9801588862</a>
              </div>
              <div class="contact-person-email contact-us-desc">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                  <path d="M3.25 0.757324C2.4212 0.757324 1.62634 1.08656 1.04029 1.67261C0.45424 2.25866 0.125 3.05352 0.125 3.88232V4.19638L9.5 9.24482L18.875 4.19795V3.88232C18.875 3.05352 18.5458 2.25866 17.9597 1.67261C17.3737 1.08656 16.5788 0.757324 15.75 0.757324H3.25Z" fill="black" />
                  <path d="M18.875 5.97119L9.8703 10.8196C9.7565 10.8809 9.6293 10.9129 9.5 10.9129C9.3707 10.9129 9.2435 10.8809 9.1297 10.8196L0.125 5.97119V13.2571C0.125 14.0859 0.45424 14.8808 1.04029 15.4668C1.62634 16.0529 2.4212 16.3821 3.25 16.3821H15.75C16.5788 16.3821 17.3737 16.0529 17.9597 15.4668C18.5458 14.8808 18.875 14.0859 18.875 13.2571V5.97119Z" fill="black" />
                </svg>
                <a href="mailto:nepalpharmaexpo@gmail.com">nepalpharmaexpo@gmail.com</a>
              </div>
            </div>
            <div class="contact-person">
              <h5 class="contact-person-name">Usha Sunuwar</h5>
              <div class="contact-person-phone contact-us-desc">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24" fill="none">
                  <path d="M11.146 0.861572H2.81266C2.12199 0.861572 1.45961 1.13593 0.971236 1.62431C0.482856 2.11268 0.208496 2.77506 0.208496 3.46573V21.174C0.208496 21.8647 0.482856 22.5271 0.971236 23.0154C1.45961 23.5038 2.12199 23.7782 2.81266 23.7782H11.146C11.8367 23.7782 12.499 23.5038 12.9874 23.0154C13.4758 22.5271 13.7502 21.8647 13.7502 21.174V3.46573C13.7502 2.77506 13.4758 2.11268 12.9874 1.62431C12.499 1.13593 11.8367 0.861572 11.146 0.861572ZM6.9793 22.7365C6.1147 22.7365 5.4168 22.0386 5.4168 21.174C5.4168 20.3094 6.1147 19.6115 6.9793 19.6115C7.8439 19.6115 8.5418 20.3094 8.5418 21.174C8.5418 22.0386 7.8439 22.7365 6.9793 22.7365ZM11.6668 18.5699H2.29183V3.98657H11.6668V18.5699Z" fill="black" />
                </svg>
                <a href="tel:+977-9843711459">+977-9843711459</a>
              </div>
              <div class="contact-person-email contact-us-desc">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                  <path d="M3.25 0.757324C2.4212 0.757324 1.62634 1.08656 1.04029 1.67261C0.45424 2.25866 0.125 3.05352 0.125 3.88232V4.19638L9.5 9.24482L18.875 4.19795V3.88232C18.875 3.05352 18.5458 2.25866 17.9597 1.67261C17.3737 1.08656 16.5788 0.757324 15.75 0.757324H3.25Z" fill="black" />
                  <path d="M18.875 5.97119L9.8703 10.8196C9.7565 10.8809 9.6293 10.9129 9.5 10.9129C9.3707 10.9129 9.2435 10.8809 9.1297 10.8196L0.125 5.97119V13.2571C0.125 14.0859 0.45424 14.8808 1.04029 15.4668C1.62634 16.0529 2.4212 16.3821 3.25 16.3821H15.75C16.5788 16.3821 17.3737 16.0529 17.9597 15.4668C18.5458 14.8808 18.875 14.0859 18.875 13.2571V5.97119Z" fill="black" />
                </svg>
                <a href="mailto:nepalpharmaexpo@gmail.com">nepalpharmaexpo@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div id="organizers"></div>
  </section>


  <?php include_once __DIR__ . '/tags/organizors-sponsors.php'; ?>
  <?php include_once __DIR__ . '/tags/footer.php'; ?>

  <?php include_once './includes/scripts.php'; ?>

  <script>
    $(document).ready(function() {
      $("#contact-form").submit(function(e) {
        e.preventDefault();
        const form = $(this);

        const formData = form.serialize() + "&btnSubmit";

        $.ajax({
          type: "post",
          url: "/api/addLead.php",
          data: formData,
          success: function(response) {
            if (response.success == true) {
              alert(response.message);
              $("#contact-form")[0].reset();
            } else {
              alert(response.message);
            }
          },
          error: function(error) {
            console.error(error);
          }
        });
      });
    });
  </script>
</body>

</html>