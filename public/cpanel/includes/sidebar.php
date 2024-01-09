<?php
$current_page = basename($_SERVER['REQUEST_URI']);
$current_page = strstr($current_page, '?', true) ?: $current_page;
$current_page = str_replace(['add-', 'edit-', '-details', '-stall'], '', $current_page);


?>

<div id="mySidenav" class="sidenav">
    <div class="logo-image">
        <div class="logo h-100 w-100">
            <a href="/" target="_blank"><img src="/images/NPELOGO@300x.png" alt="" style="object-fit: cover;" class="blend"></a>
        </div>
    </div>

    <div class="sidenav-wrapper">
        <div class="sidenav-item">
            <div class="side-dropdown">
                <div class="dropdown-link">
                    <div class="section-icon">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.25 10.25L12 5L18.75 10.25V18.5C18.75 18.8978 18.592 19.2794 18.3107 19.5607C18.0294 19.842 17.6478 20 17.25 20H6.75C6.35218 20 5.97064 19.842 5.68934 19.5607C5.40804 19.2794 5.25 18.8978 5.25 18.5V10.25Z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.75 20V12.5H14.25V20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <a class="<?php if ($current_page == 'dashboard') echo 'active'; ?>" href="/cpanel/dashboard">Dashboard</a>
                </div>
            </div>
            <div class="section-head">Pages</div>

            <div class="side-dropdown">
                <div class="dropdown-link">
                    <a class="<?php if ($current_page == 'exhibitor') echo 'active'; ?>" href="/cpanel/exhibitor">Exhibitors</a>
                </div>
            </div>
            <div class="side-dropdown">
                <div class="dropdown-link">
                    <a class="<?php if ($current_page == 'stall') echo 'active'; ?>" href="/cpanel/stall">Stalls</a>
                </div>
            </div>
            <div class="side-dropdown">
                <div class="dropdown-link">
                    <a class="<?php if ($current_page == 'leads') echo 'active'; ?>" href="/cpanel/leads">Leads</a>
                </div>
            </div>

        </div>

        <div class="section-head">Settings</div>
        <div class="side-dropdown">
            <div class="dropdown-link">
                <!-- <div class="section-icon">
                    <img src="/assets/cms/image/category-icon.svg" alt="icon">
                </div> -->
                <!-- <a class="<?php if ($current_page == 'admin') echo 'active'; ?>" href="/cpanel/admin">Admin</a> -->
            </div>
        </div>





    </div>

</div>
</div>