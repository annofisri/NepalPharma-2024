<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include_once('./includes/links.php'); ?>
    <title>Leads</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">


        <div class="head d-flex mx-4 my-3 justify-content-between">
            <div class="title">Nepal Pharma Expo 2024 - Exhibitors</div>
            <!-- <div class="total">Total:100</div> -->
            <div class="">

                <div class="search-block">

                    <form class="w-100" role="search" method="get">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="" id="search-input" data-control-filter="#listLeads">

                    </form>
                </div>
            </div>
        </div>

        <!-- New Table Design -->
        <div class="common-list">

            <div class="table-list">
                <table class="table table-hover table-resposive" id="listLeads">
                    <thead class="border border-buttom">
                        <tr>
                            <th scope="col" class="">S.No.</th>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr scope="row">
                            <td class="">
                                1
                            </td>
                            <td>
                                2001-01-01 00:00:00
                            </td>
                            <td>
                                Niraj
                            </td>
                            <td>
                                nirajshrestha539@gmail.com
                            </td>
                            <td>
                                9841234567
                            </td>
                            <td>
                                Hello
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- paginations -->

            <!-- <ul class="pagination justify-content-center align-items-center">
                
                <?php


                if (isset($_GET["search"]) && $_GET["search"] != "") {
                    echo '
                  <li class="page-item disabled">
                    <a class="page-link left-arrow" href="/cpanel/activity?' . ((isset($_GET["limit"])) ? ('limit=' . $limit . '&') : '') . '&p=' .  (($page > 1) ? ($page - 1) : $page) . '&search=' . $search_text . '">
                      <div class="prev">Previous</div>
                    </a>
                  </li>
                 ';
                    for ($i = 1; $i <= $pagination_count; $i++) {
                        echo '              
                   <li class="page-item pagi-number"><a class="page-link" href="/cpanel/activity?' . ((isset($_GET["limit"])) ? ('limit=' . $limit . '&') : '') . '&p=' . $i . '&search=' .   $search_text . '">' . $i . '</a></li>
                  ';
                    }

                    echo '
                  <li class="page-item disabled">
                      <a class="page-link right-arrow" href="/cpanel/activity?' . ((isset($_GET["limit"])) ? ('limit=' . $limit . '&') : '') . '&p=' . (($page < $pagination_count) ? ($page + 1) : $page) . '&search=' . $search_text . '">
                      <div class="next">Next</div>
                      </a>
                    </li>
                 ';
                } else {

                    echo '
                  <li class="page-item disabled">
                    <a class="page-link left-arrow" href="/cpanel/activity?' . ((isset($_GET["limit"])) ? ('limit=' . $limit . '&') : '') . 'p=' . (($page > 1) ? ($page - 1) : $page) . '">
                      <div class="prev">Previous</div>
                    </a>
                  </li>';
                    for ($i = 1; $i <= $pagination_count; $i++) {
                        echo '
                    <li class="page-item pagi-number"><a class="page-link" href="/cpanel/activity?' . ((isset($_GET["limit"])) ? ('limit=' . $limit . '&') : '') . 'p=' . $i . '">' . $i . '</a></li>

                ';
                    }

                    echo '
                <li class="page-item disabled">
                    <a class="page-link right-arrow" href="/cpanel/activity?' . ((isset($_GET["limit"])) ? ('limit=' . $limit . '&') : '') . 'p=' . (($page < $pagination_count) ? ($page + 1) : $page) . '">
                    <div class="next">Next</div>
                    </a>
                  </li>
                ';
                }


                ?>
            </ul> -->

            <!-- paginations ends -->

        </div>
        <!-- New Table Design ends -->




    </main>

    <?php include_once('./includes/scripts.php'); ?>


    <script>
        function getAllLeads() {
            $.ajax({
                url: '/api/getAllLeads.php',
                type: 'GET',
                success: function(response) {
                    // 
                    if (response.success) {
                        $('.table-body').html('');
                        response.data.forEach((item, index) => {
                            $('.table-body').append(`
                            <tr scope="row">
                                <td class="">
                                    ${index+1}
                                </td>
                                <td>
                                    ${item.created_at}
                                </td>
                                <td>
                                    ${item.first_name + ' ' + item.last_name}
                                </td>
                                <td>
                                    ${item.email}
                                </td>
                                <td>
                                    ${item.phone_number}
                                </td>
                                <td>
                                    ${item.message}
                                </td>
                            `)
                        })
                    }
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }

        $(document).ready(function() {
            getAllLeads();
        })
    </script>



</body>

</html>