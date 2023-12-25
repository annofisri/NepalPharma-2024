<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include_once('./includes/links.php'); ?>
    <title>Exhibitors</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">


        <div class="main-list">
            <div class="head d-flex px-4 py-3 justify-content-between" style="background: #F5FFFA;height: 69px;">
                <div class="title">Nepal Pharma Expo 2024 - Exhibitors</div>
                <div class="total">Total:100</div>
                <div class="">

                    <div class="search-block">

                        <form class="w-100" role="search" method="get">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="" id="search-input">

                        </form>
                    </div>
                </div>
            </div>

            <!-- New Table Design -->
            <div class="common-list">
                <div class="table-list">
                    <table class="table table-hover table-resposive">
                        <thead class="border border-buttom">
                            <tr>
                                <th scope="col" class="">S.No.</th>
                                <th scope="col">Date</th>
                                <th scope="col">Reg ID</th>
                                <th scope="col">Contact Person</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Country</th>
                                <th scope="col">Stalls</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr scope="row">
                                <td class="">
                                    1
                                </td>
                                <td>
                                    2021-09-01
                                </td>
                                <td>
                                    1

                                </td>
                                <td>
                                    Niraj Shrestha
                                </td>
                                <td>
                                    Annofi
                                </td>
                                <td>
                                    Nepal
                                </td>
                                <td>
                                    A1
                                </td>
                                <td>
                                    <div class="status reject">Booked</div>
                                </td>
                                <td>
                                    <div class="action">
                                        <button type="button" class="black-btn-outlined view-details-btn" data-id="<?php echo 1; ?>">
                                            More Details
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- New Table Design ends -->

        <div class="detail-and-stall d-none">

            <div class="head d-flex px-4 py-3 justify-content-between" style="background: #F5FFFA;height: 69px;">
                <div class="d-flex gap-2">
                    <div id="detailAndStallBackBtn" class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="17" viewBox="0 0 11 17" fill="none">
                            <path d="M10.1978 2.69788L8 0.5L0 8.5L8 16.5L10.1978 14.3021L4.39563 8.5L10.1978 2.69788Z" fill="#121212" />
                        </svg>
                    </div>
                    <div class="title">Details Exhibitor</div>
                </div>

                <div class="black-btn edit-btn">
                    Edit
                </div>
            </div>

            <div class="container px-4 exhibitor-details">
                <div class="row details p-3">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="d-flex key-value">
                                    <div class="key"> Company Name:</div>
                                    <div class="value ms-auto" data-key="name">Annofi</div>
                                </div>
                                <div class="d-flex key-value">
                                    <div class="key"> Date:</div>
                                    <div class="value ms-auto" data-key="created_at">2021-09-01</div>
                                </div>

                                <div class="d-flex key-value">
                                    <div class="key"> Chief Executive:</div>
                                    <div class="value ms-auto" data-key="chief_name">Niraj Shrestha</div>
                                </div>
                                <div class="d-flex key-value">
                                    <div class="key"> Contact Person:</div>
                                    <div class="value ms-auto" data-key="contact_person">Niraj Shrestha</div>
                                </div>


                                <div class="d-flex key-value">
                                    <div class="key"> City:</div>
                                    <div class="value ms-auto" data-key="city">Kathmandu</div>
                                </div>


                                <div class="d-flex key-value">
                                    <div class="key"> Address:</div>
                                    <div class="value ms-auto" data-key="address">Kathmandu</div>
                                </div>



                                <div class="d-flex key-value">
                                    <div class="key"> Phone:</div>
                                    <div class="value ms-auto" data-key="phone_number">+977-9841234567</div>
                                </div>



                                <div class="d-flex key-value">
                                    <div class="key"> Email:</div>
                                    <div class="value ms-auto" data-key="email">
                                        nirajshrestha539@gmail.com
                                    </div>
                                </div>


                                <!-- <div class="d-flex key-value">
                                    <div class="key"> Fax:</div>
                                    <div class="value ms-auto" data-key="fax">+977-9841234567</div>
                                </div> -->


                                <div class="d-flex key-value">
                                    <div class="key"> Website:</div>
                                    <div class="value ms-auto" data-key="website">www.annofi.com</div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="d-flex key-value border-0">
                                    <div class="key"></div>
                                    <div class="value ms-auto"></div>
                                </div>
                                <div class="d-flex key-value">
                                    <div class="key"> Registration ID:</div>
                                    <div class="value ms-auto" data-key="id">1</div>
                                </div>

                                <div class="d-flex key-value">
                                    <div class="key"> Designation:</div>
                                    <div class="value ms-auto" data-key="designation">CEO</div>
                                </div>
                                <div class="d-flex key-value">
                                    <div class="key"> Designation:</div>
                                    <div class="value ms-auto" data-key="contact_person_designation">CEO</div>
                                </div>


                                <div class="d-flex key-value">
                                    <div class="key"> Zip Code:</div>
                                    <div class="value ms-auto" data-key="pin">44600</div>
                                </div>


                                <div class="d-flex key-value">
                                    <div class="key"> Country:</div>
                                    <div class="value ms-auto" data-key="country">Nepal</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row prefered-stalls p-3">

                    <div class="stall-title">
                        <h6>Preferred Stalls</h6>
                    </div>

                    <div class="allStalls">
                        <div class="col-md-3 stall-card">
                            <div class="title">
                                Stall A1
                            </div>
                            <div class="type">
                                Type: 6 x 10

                            </div>

                            <div class="size">
                                Size: 9
                            </div>

                            <div class="price">
                                Price: INR 1,00,000/-
                            </div>
                            <div class="status">
                                Status: Pending
                            </div>
                            <div class="action row mt-2">
                                <div class=" col-md-6 ">
                                    <button type="button" class="black-btn w-100">
                                        Approve
                                    </button>
                                </div>
                                <div class=" col-md-6">
                                    <button type="button" class="black-btn-outlined w-100">
                                        Reject
                                    </button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edit-form d-none">
            <div class="head d-flex px-4 py-3 justify-content-between" style="background: #F5FFFA;height: 69px;">
                <div class="d-flex gap-2">
                    <div id="editFormBackBtn" class="d-flex align-items-center editFormBackBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="17" viewBox="0 0 11 17" fill="none">
                            <path d="M10.1978 2.69788L8 0.5L0 8.5L8 16.5L10.1978 14.3021L4.39563 8.5L10.1978 2.69788Z" fill="#121212" />
                        </svg>
                    </div>
                    <div class="title">Details Exhibitor</div>
                </div>

            </div>
            <div class="container edit-exhibitor">
                <form class="row g-3 form-box" id="editExhibitorForm">
                    <div class="col-md-6">
                        <label for="company-name" class="form-label">Company Name*</label>
                        <input type="text" class="form-control" id="company-name" name="name">
                    </div>
                    <div class="col-md-6">

                        <label for="contact-person" class="form-label">Contact Person</label>
                        <input type="text" class="form-control" id="contact-person" name="contact_person">
                    </div>


                    <div class="col-md-6">
                        <label for="contact-person-designation" class="form-label">Contact Person Designation</label>
                        <input type="text" class="form-control" id="contact-person-designation" name="contact_person_designation">
                    </div>

                    <div class="col-md-6">
                        <label for="chief-executive" class="form-label">Chief Executive</label>
                        <input type="text" class="form-control" id="chief-executive" name="chief_name">
                    </div>


                    <div class="col-md-6">
                        <label for="chief-executive-designation" class="form-label">Chief Executive Designation</label>
                        <input type="text" class="form-control" id="chief-executive-designation" name="designation">
                    </div>


                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>


                    <div class="col-md-6">
                        <label for="phone-no" class="form-label">Phone No.</label>
                        <input type="text" class="form-control" id="phone-no" name="phone_number">
                    </div>


                    <div class="col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>


                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>



                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>



                    <div class="col-md-6">
                        <label for="zip-code" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip-code" name="pin">

                    </div>


                    <div class="col-md-6">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control" id="website" name="website">
                    </div>

                    <input type="hidden" class="form-control" id="id" name="id">


                    <div class="col-12 d-flex gap-2">
                        <button type="submit" class="btn btn-outline-primary black-btn-outlined editFormBackBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary black-btn" id="updateExhibitor">Update</button>
                    </div>
                </form>


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
                    // console.log(response);
                    if (response.success) {
                        $('.table-body').html('');
                        response.data.forEach((item, index) => {
                            $('.table-body').append(`
                                <tr scope="row">
                                    <td class="">
                                        ${index + 1}
                                    </td>
                                    <td>
                                        ${item.created_at}
                                    </td>
                                    <td>
                                        ${item.id}
                                    </td>
                                    <td>
                                        ${item.contact_person}
                                    </td>
                                    <td>
                                        ${item.name}
                                    </td>
                                    <td>
                                        ${item.country}
                                    </td>
                                    <td>
                                        ${item.stall}
                                    </td>
                                    <td>
                                        <div class="status reject">Booked</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <button type="button" class="black-btn-outlined view-details-btn" data-id="${item.id}">
                                                More Details
                                            </button>
                                        </div>
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


        var exhibitor = [];

        function patchExhibitorDetails(data) {
            exhibitor = data;
            $('.value').text('');
            $('.value').each(function(index, item) {
                var key = $(item).data('key');
                $(item).text(data[key]);
            });
        }

        $(document).ready(function() {
            getAllExhibitors();

            $(document).on('click', '.view-details-btn', function() {

                var id = $(this).data('id');


                $.ajax({
                    url: '/api/getExhibitorDetail.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response.success) {

                            patchExhibitorDetails(response.data);



                            $('.main-list').addClass('d-none');
                            $('.detail-and-stall').removeClass('d-none');
                            $('.edit-form').addClass('d-none');

                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })

                // $('.main-list').addClass('d-none');
                // $('.detail-and-stall').removeClass('d-none');
                // $('.edit-form').addClass('d-none');
            })
            $('#detailAndStallBackBtn').click(function() {
                $('.main-list').removeClass('d-none');
                $('.detail-and-stall').addClass('d-none');
                $('.edit-form').addClass('d-none');
            })
            $('.editFormBackBtn').click(function() {
                $('.main-list').addClass('d-none');
                $('.detail-and-stall').removeClass('d-none');
                $('.edit-form').addClass('d-none');
            })
            $('.edit-btn').click(function() {

                $('.edit-exhibitor #company-name').val(exhibitor.name);
                $('.edit-exhibitor #contact-person').val(exhibitor.contact_person);
                $('.edit-exhibitor #contact-person-designation').val(exhibitor.contact_person_designation);
                $('.edit-exhibitor #chief-executive').val(exhibitor.chief_name);
                $('.edit-exhibitor #chief-executive-designation').val(exhibitor.designation);
                $('.edit-exhibitor #email').val(exhibitor.email);
                $('.edit-exhibitor #phone-no').val(exhibitor.phone_number);
                $('.edit-exhibitor #country').val(exhibitor.country);
                $('.edit-exhibitor #city').val(exhibitor.city);
                $('.edit-exhibitor #address').val(exhibitor.address);
                $('.edit-exhibitor #zip-code').val(exhibitor.pin);
                $('.edit-exhibitor #website').val(exhibitor.website);
                $('.edit-exhibitor #id').val(exhibitor.id);



                $('.main-list').addClass('d-none');
                $('.detail-and-stall').addClass('d-none');
                $('.edit-form').removeClass('d-none');
            })

            $('#editExhibitorForm').submit(function(e) {
                e.preventDefault();
                const formData = $(this).serialize() + '&updateExhibitor';
                console.log(formData);
                $.ajax({
                    url: '/api/updateExhibitor.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            getAllExhibitors();
                            $('.main-list').removeClass('d-none');
                            $('.detail-and-stall').addClass('d-none');
                            $('.edit-form').addClass('d-none');
                        } else {
                            console.log(response.error);
                            alert(response.message + ' ' + response.error);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

        })
    </script>


</body>

</html>