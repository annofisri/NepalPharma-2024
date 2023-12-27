<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include_once('./includes/links.php'); ?>
    <title>Dashboard</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">

        <div class="head d-flex px-4 py-3 justify-content-between" style="background: #F5FFFA;height: 69px;">
            <div class="title">Dashboard</div>

        </div>

        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    Exhibitors
                </div>
                <div class="card-body row">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><span id="exhibitor-registered-count">10</span></h5>
                                    <p class="card-text">Total Registered</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><span id="exhibitor-active-count">10</span></h5>
                                    <p class="card-text">Total Active</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><span id="exhibitor-inactive-count">10</span></h5>
                                    <p class="card-text">Total Inactive</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    Stalls
                </div>
                <div class="card-body row">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><span id="stall-count">10</span></h5>
                                    <p class="card-text">Total Stall</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><span id="stall-booked-count">10</span></h5>
                                    <p class="card-text">Total Booked</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><span id="stall-vacant-count">10</span></h5>
                                    <p class="card-text">Total Vacant</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once('./includes/scripts.php'); ?>

    <script>
        function getAllExhibitors() {
            $.ajax({
                url: '/api/getAllExhibitors.php',
                type: 'GET',
                success: function(response) {
                    const data = response.data;
                    const totalCount = data.length;
                    const totalActive = data.filter(item => item.status === 'active').length;
                    const totalInactive = data.filter(item => item.status === 'inactive').length;
                    $('#exhibitor-registered-count').text(totalCount);
                    $('#exhibitor-active-count').text(totalActive);
                    $('#exhibitor-inactive-count').text(totalInactive);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
        function getAllStalls() {
            $.ajax({
                url: '/api/getAllStalls.php',
                type: 'GET',
                success: function(response) {
                    const data = response.data;
                    const totalCount = data.length;
                    const totalBooked = data.filter(item => item.status === 'booked').length;
                    const totalVacant = data.filter(item => item.status === 'vacant').length;
                    $('#stall-count').text(totalCount);
                    $('#stall-booked-count').text(totalBooked);
                    $('#stall-vacant-count').text(totalVacant);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $(document).ready(function() {
            getAllExhibitors();
            getAllStalls();
        });
    </script>

</body>

</html>