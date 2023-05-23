<link rel="stylesheet" href="<?php echo base_url() ?>web_resources\dist\css\Newdsh.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div style="background-color: #ddd;" class="mycontainer main-content-wrap sidenav-open justify-content-center">
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/dashboard1.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Dashboard</div>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/front-office.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Front Office</div>
            <p>All front office</p>
        </div>
        <div class="mydropdown">
            <div class="dropbtn">
                <i id="mynav-menu-btn" class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <div class="mydropdown-content">
                <a href="<?= base_url(); ?>index.php/Reservation/create">Reservation</a>
                <a href="<?= base_url(); ?>index.php/RoomStatus/create">Room Status</a>
                <a href="<?= base_url(); ?>index.php/WakeupCall/create">Wakeup Call</a>
                <a href="<?= base_url(); ?>index.php/taskmgt/create">Task Management</a>
                <a href="<?= base_url(); ?>index.php/Customermsg/create">Staff/Customer Message</a>
                <a href="<?= base_url(); ?>index.php/dispatch/create">Postal Dispatch</a>
                <a href="<?= base_url(); ?>index.php/postalrecieve/create">Postal Recieve</a>
                <a href="<?= base_url(); ?>index.php/enquiry/create">Enquiry</a>
            </div>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/housekeeping.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Housekeeping</div>
            <p>All House Keeping</p>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/restaurant.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Restaurant</div>
            <p>All Restaurant
            </p>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/banquet.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Banquet</div>
            <p>All About Banquet</p>
        </div>
        <div class="mydropdown">
            <div class="dropbtn">
                <i id="mynav-menu-btn" class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <div class="mydropdown-content">
                <a href="<?= base_url(); ?>index.php/mainmenu/create">Main Menu Type</a>
                <a href="<?= base_url(); ?>index.php/menucreation/create">Menu Creation</a>
            </div>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/stock.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Inventory</div>
            <p>All About Inventory</p>
        </div>
        <div class="mydropdown">
            <div class="dropbtn">
                <i id="mynav-menu-btn" class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <div class="mydropdown-content">
                <a href="<?= base_url(); ?>index.php/InvPurOrder/create">Purchase Information</a>
                <a href="<?= base_url(); ?>index.php/grn/create">GRN Information</a>
                <a href="<?= base_url(); ?>index.php/salesreturn/create">Sales Return Information</a>
            </div>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/bar.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Bar Mgt</div>
            <p>All About Bar</p>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/HR.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">HR</div>
            <p>All About HR</p>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/payroll.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Payroll</div>
            <p>All About Payroll</p>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/guestmgt.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Guest Mgt</div>
            <p>All About Guests</p>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/health-club.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Health Club</div>
            <p>All Health Club</p>
        </div>
        <div class="mydropdown">
            <div class="dropbtn">
                <i id="mynav-menu-btn" class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <div class="mydropdown-content">
                <a href="<?= base_url(); ?>index.php/booking/create">Booking</a>
                <a href="<?= base_url(); ?>index.php/packagecreation/create">Pakage Information</a>
            </div>
        </div>
    </div>
    <div class="dash-card">
        <div class="img-container">
            <img src="<?php echo base_url() ?>Assets/images/asset.png" alt="">
        </div>
        <div class="content-container">
            <div class="myhead">Asset Mgt</div>
            <p>All About Asset Mgt</p>
        </div>
    </div>
</div>


<script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>
<script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/newdash.js"></script>

<!-- <script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/plugins/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/scripts/script.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/scripts/sidebar.large.script.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/plugins/echarts.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/scripts/echart.options.min.js"></script>
<script src="<?= base_url(); ?>Assets/js/scripts/dashboard.v1.script.min.js"></script>

<script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script> -->
<!-- ***** Added New Scripts*********** -->
<!--This page JavaScript -->

<!-- <script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script> -->

<!-- </body> -->


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 05:16:55 GMT -->

<!-- </html> -->