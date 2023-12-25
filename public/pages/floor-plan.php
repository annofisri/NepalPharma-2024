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
            <?php include __DIR__ . '/../api/layout.html'; ?>
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
    </script>
</body>

</html>