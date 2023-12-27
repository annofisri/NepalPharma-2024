<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once('./includes/links.php'); ?>
    <title>Stalls</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">


        <div class="main-list">
            <div class="head d-flex px-4 py-3 justify-content-between" style="background: #F5FFFA;height: 69px;">
                <div class="title">Nepal Pharma Expo 2024 - Stalls</div>
                <div class="total">Total: <span id="stall-count">0</span></div>
                <div class="">

                    <div class="search-block">

                        <form class="w-100" role="search" method="get">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="" id="search-input" data-control-filter="#stall-table">

                        </form>
                    </div>
                </div>
            </div>

            <!-- New Table Design -->
            <div class="common-list">
                <div class="table-list">
                    <table class="table table-hover table-resposive" id="stall-table">
                        <thead class="border border-buttom">
                            <tr>
                                <th scope="col" class="">S.No.</th>
                                <th scope="col">Stall Name</th>
                                <th scope="col">Stall Type</th>
                                <th scope="col">Hall No.</th>
                                <th scope="col">Booked To</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr scope="row"></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- New Table Design ends -->

    </main>

    <?php include_once('./includes/scripts.php'); ?>

    <script>
        function getAllStalls() {
            $.ajax({
                url: '/api/getAllStalls.php',
                type: 'GET',
                success: function(response) {
                    if (response.success) {
                        $('.table-body').html('');
                        $('#stall-count').text(response.data.length);
                        response.data.forEach((item, index) => {
                            $('.table-body').append(`
                                <tr scope="row">
                                    <td class="">
                                        ${index + 1}
                                    </td>
                                    <td>
                                        ${item.name}
                                    </td>
                                    <td>
                                        ${item.stall_type}
                                    </td>
                                    <td>
                                        ${item.hall_no}
                                    </td>
                                    <td>
                                        ${item.exhibitor_name}
                                    </td>
                                    <td>
                                        ${item.status}
                                    </td>
                                </tr>
                            `)
                        })
                    } else {
                        alert(response.message);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }


        $(document).ready(function() {
            getAllStalls();

        });
    </script>


</body>

</html>