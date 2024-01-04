<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Floor Plan</title>
    <?php include_once './includes/head.php'; ?>
</head>

<body>
    <?php include_once __DIR__ . '/tags/head-logo.php'; ?>
    <?php include_once __DIR__ . '/tags/navbar.php'; ?>

    <section class="page-info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-us-title">Floor Plans</div>
                    <div class="about-us-desc">Nepal Pharma Expo 2024</div>
                </div>
            </div>
        </div>
        <div id="organizers"></div>
    </section>

    <section class="floor-plan-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mb-5">
                    <div class="title ps-2">
                        Floor Plan For Exhibitors & Visitors
                    </div>
                    <svg class="underline-svg" xmlns="http://www.w3.org/2000/svg" width="582" height="20" viewBox="0 0 582 20" fill="none">
                        <path d="M0 0H582L164.197 14.0476L10.6059 20L0 0Z" fill="url(#paint0_linear_1104_2603)" />
                        <defs>
                            <linearGradient id="paint0_linear_1104_2603" x1="582" y1="10" x2="-1.43466e-06" y2="9.99992" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#5C2E91" />
                                <stop offset="1" stop-color="#93268F" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <?php include __DIR__ . '/../api/layout.html'; ?>
            </div>

        </div>
        <div id="organizers"></div>
    </section>

    <?php include_once __DIR__ . '/tags/organizors-sponsors.php'; ?>

    <?php include_once __DIR__ . '/tags/contact-us.php'; ?>

    <?php include_once __DIR__ . '/tags/footer.php'; ?>

    <?php include_once './includes/scripts.php'; ?>

    <script>
        function getBookedStalls() {
            $.ajax({
                url: '/api/getBookedStalls.php',
                method: 'GET',
                success: function(response) {
                    if (response.success) {
                        bookedStalls = response.data;
                        $('.stall').removeClass('booked').attr('title', 'Vacant');
                        bookedStalls.forEach(function(stall) {
                            $('[data-stall-name="' + stall + '"]').closest('.stall').addClass('booked').attr('title', 'Booked');
                        });

                    }
                }
            });
        }

        getBookedStalls();
    </script>
</body>

</html>