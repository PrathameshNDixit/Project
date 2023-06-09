<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<style>
    .dform-group label {
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1273eb;
        background: #ffffff;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        top: -25px;
        left: 24px;
        padding: -1px 7px;
        z-index: 10;
        text-align: left;
    }

    #ref-date {
        top: -50px;
    }

    textarea {
        resize: none;
    }

    .form-group {
        margin-block: 40px;
    }

    .form-group label {
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1273eb;
        background: #ffffff;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 400;
        top: -25px;
        left: 7px;
        padding: -1px 7px;
        z-index: 10;
        text-align: left;
    }

    .select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
    .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 2px solid #0161b5;
    }

    .select2-container--classic .select2-selection--multiple:hover {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 1px solid #0161b5;
    }

    .select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple:hover {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 2px solid #0161b5;
    }

    .select2-container--default.select2-container--open.select2-container--below .select2-selection--single:hover {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 1px solid #0161b5;
    }

    .select2-container--default .select2-selection--single:hover {
        border: 1px solid #0161b5;
    }

    .select2-container--classic .select2-selection--multiple :hover {
        border: 1px solid #0161b5;
    }


    c {
        color: red;
        font-size: 14px;
        font-weight: 500;
    }

    .bord {

        border: 2px solid grey;
        border-radius: 10px;
        padding: 7px;
    }

    .bords {

        border: 2px solid grey;
        border-radius: 10px;
    }

    .heads {
        margin-left: 22px;
        margin-top: -15px;
        background: white;
        width: 204px;
        color: #0161b5;
        font-weight: 800;
        padding-left: 5px;
    }

    .head {
        margin-left: 22px;
        font-size: 25px;
        margin-top: -25px;
        background: white;
        width: 110px;
        color: #0161b5;
        font-weight: 800;
        padding-left: 5px;

    }


    .dt {
        margin-top: -40px;
        margin-bottom: -10px;
    }

    /* Button css */
    .btn-md {
        font-size: 17px;
    }

    .btn-edit {
        background: #FFBF00;
        background-size: 100% 100%;
        background-position: right bottom;
        transition: all .4s ease-out;
        border: none;
        margin-top: 20px;
    }

    .btn-save {
        background: linear-gradient(to right, #067e5c 50%, #1273eb 50%);
        background-size: 200% 100%;
        background-position: right bottom;
        transition: all .4s ease-out;
        border: none;
        margin-top: 20px;
        margin: 0 auto;
    }

    .btnright:not(:disabled):not(.disabled) {
        margin-right: -12px;
    }

    .text-right {
        text-align: right !important;
    }

    .header {
        margin-left: 22px;
        font-size: 15px;
        margin-top: 2px;
        width: 50px;
        color: #0161b5;
        font-weight: 800;

    }

    .special {
        font-weight: bold !important;
        color: #fff !important;
        background: #bc0000 !important;
        text-transform: uppercase;
    }

    .select2-container--default .select2-selection--single {
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 5px;
        cursor: text;
        margin-top: -15px;
        height: 32px;
        text-bottom: 20px;
    }

    .select2-container--classic .select2-selection--multiple {
        background-color: white;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: text;
        margin-top: -15px;
        outline: 0;
        min-height: 50px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -15px;
        position: absolute;
        top: 50%;
        width: 0;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        margin-top: 4px;
        /* line-height: 37px; */
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice {
        color: #1273EB;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 0px;
        margin-top: 11px;
        padding: 0 5px;
        font-size: 11px;
    }

    @media only screen and (max-width: 768px) {

        .form-group {
            height: 20vh;
            width: 80%;

            margin-top: 50%;
            z-index: 2;
        }

        .mdwn {
            margin-top: 15px;
            !important
        }

        .fdwn {
            margin-top: 35px;
            !important
        }

        .gap {
            margin-top: -30px;
            !important
        }
    }

    /* @media only screen and (max-width: 425px)
{
    .breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: 7px 0 1.25rem;

 }
} */

    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #eee;
        border-radius: 0.25rem;
    }

    .breadcrumb {
        background: transparent;
        justify-content: center;
        align-items: center;
        margin: 7px 0 1.25rem;

    }

    .breadcrumb img {
        margin-top: -70px;
        margin-bottom: -45px;

    }

    .breadcrumb h4 {
        margin-left: 2px;
        margin-top: -20px;
        position: absolute;
        color: var(--white);
        text-align: center;
        font-family: Frozen;
        font-weight: 600;
        font-size: 1.4rem;
        line-height: 1;
    }

    .btn1 {
        background-color: #1a8ae5;
        width: 90px;
        height: 40px;
        font-size: 15px;
        margin: -1px;
    }

    .btn1:before {
        height: 0%;
        width: 2px;
    }

    .btn1:hover {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
            -4px -4px 6px 0 rgba(116, 125, 136, .5),
            inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
    }

    .btn2 {
        background-color: #b284be;
        width: 90px;
        height: 40px;
        font-size: 15px;
    }

    .btn2 {
        background: rgb(96, 9, 240);
        background: linear-gradient(0deg, rgba(96, 9, 240, 1) 0%, rgba(129, 5, 240, 1) 100%);
        */ border: none;

    }

    .btn2:before {
        height: 0%;
        width: 2px;
    }

    .btn2:hover {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
            -4px -4px 6px 0 rgba(116, 125, 136, .5),
            inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
    }
</style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo base_url() ?>web_resources\dist\css\patti.css">

<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb p-3">
            <img height="50px" width="320px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
            <h4>Reservation Information</h4>
        </div>
        <div style="margin-top:-10px;" class=" border-top"></div>
        <div class="row card p-3">
            <div class="col-12">
                <div class=" p-2">
                    <div class="bord">
                        <h3></h3>
                        <form id="Form" action="" method="POST">
                            <div class="row p-3">

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Customer Number</label>
                                    <input type="text" class="form-control" id="branch_name" name="branch_name" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->branch_name; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                    <label for="">Customer Name</label>
                                    <select style="padding-inline:10px" name="RefType" id="RefType"
                                        data-control="select2" data-hide-search="true"
                                        class="js-states form-control nav selectpicker mi-2">
                                        <!-- <select class="form-control" name="RefType"> -->
                                        <option value="">Select</option>
                                        <option value="MLA">MLA</option>
                                        <option value="Chief Minister">Chief Minister</option>
                                        <option value="Prime Minister">Prime Minister</option>
                                        <option value="President">President</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Booking Type</label>
                                    <input type="text" class="form-control" id="branch_name" name="branch_name" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->branch_name; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Booking Source</label>
                                    <input type="text" class="form-control" id="branch_name" name="branch_name" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->branch_name; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Booking Source No</label>
                                    <input type="text" class="form-control" id="branch_name" name="branch_name" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->branch_name; ?>" />
                                </div>
                            </div>
                            <!-- ****************************** -->
                            <div class="mynav">
                                <li class="mynav-link" id="link-1">Reservation</li>
                                <li class="mynav-link" id="link-2">Room Details</li>
                                <li class="mynav-link" id="link-3">Rent Information</li>
                                <li class="mynav-link" id="link-4">Extra Facility</li>
                                <li class="mynav-link" id="link-5">Discount Detail</li>
                                <li class="mynav-link" id="link-6">Payment Detail</li>
                                <li class="mynav-link" id="link-7">Menu Detail</li>
                            </div>
                            <div id="div-1" class="mydiv row p-3">
                                <div class="row p-3">
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Reservation Date</label>
                                        <input type="date" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Arrival Time</label>
                                        <input type="time" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-0">
                                        <label>Is hourly Booking</label>
                                        <input type="checkbox" class="form-check-input form-control" id="branch_name"
                                            name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6  form-group  mt-0">
                                        <label>Purpose of visit</label>
                                        <textarea placeholder="enter purpose of visit" class="form-control"
                                            name="Subject" id="Subject" cols="4" rows="2" value="<?php if (!empty($data))
                                                echo $data[0]->Subject; ?>"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6  form-group  mt-0">
                                        <label>Description</label>
                                        <textarea placeholder="enter purpose of visit" class="form-control"
                                            name="Subject" id="Subject" cols="4" rows="2" value="<?php if (!empty($data))
                                                echo $data[0]->Subject; ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="div-2" class="mydiv">
                                <div class="row p-3">
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Childrens</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Children Amount</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Adults</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Adult Amount</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Bed</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Bed Amount</label>
                                        <input type="text" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-12 mt-4 mb-4">
                                        <div style="width:100px" class="mt-3 mb-3 badge bg-primary col-12">Advanced
                                        </div>
                                    </div>
                                    <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                        <label for="">Reference Type</label>
                                        <select style="padding-inline:10px" name="RefType" id="Room"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="A.C">A.C</option>
                                            <option value="Non-A.C">NoN A.C</option>
                                        </select>
                                    </div>
                                    <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                        <label for="">Reference Type</label>
                                        <select style="padding-inline:10px" name="RefType" id="RoomNo"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="90">90</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-md btn-success btnright text-white" type="button"
                                            name="btn_save" id="addToList"><i
                                                class="nav-icon fa-regular fa-circle-check "></i>
                                            Add to List</button>
                                    </div>

                                    <table class="table col-12 mt-3 p-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Room Type Id</th>
                                                <th scope="col">Room Name</th>
                                                <th scope="col">Room No</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="div-3" class="mydiv">
                                <div class="row p-3">
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Rent Start Time</label>
                                        <input type="date" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Rent Start Time</label>
                                        <input type="time" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Rent End Date</label>
                                        <input type="date" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Rent End Time</label>
                                        <input type="time" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Rent</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>GST</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-check  mt-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                include
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                exclude
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Total Rent Amount</label>
                                        <input type="number" class="form-control" id="branch_name" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div id="div-4" class="mydiv">
                                <div class="row p-3">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                        <label>Facility Name*</label>
                                        <input placeholder="Enter Name" type="text" class="form-control"
                                            id="FacilityName" name="FacilityName" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>
                                            Rate</label>
                                        <input placeholder="Enter Rate" type="number" class="form-control" id="Rate"
                                            name="Rate" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Quantity</label>
                                        <input placeholder="Enter Quantity" type="number" class="form-control"
                                            id="Quantity" name="Quantity" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-md btn-success btnright text-white" type="button"
                                            name="btn_save" id="addToList2"><i
                                                class="nav-icon fa-regular fa-circle-check "></i>
                                            Add to List</button>
                                    </div>

                                    <table class="table col-12 mt-3 p-3 mb-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Facility Name</th>
                                                <th scope="col">Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody2">
                                        </tbody>
                                    </table>
                                    <div class="input-group mb-3 col-2 ml-auto">
                                        <input type="text" id="output" placeholder="Total" class="input ms-auto" style="width:100px;
                                            padding:5px 7px;
                                            border-radius:10px;">
                                    </div>
                                </div>
                            </div>
                            <div id="div-5" class="mydiv">
                                <div class="row p-3">
                                    <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                        <label for="">Discount Type</label>
                                        <select style="padding-inline:10px" name="RefType" id="Room"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="Cash Discount">Cash Discount</option>
                                            <option value="Card Discount">Card Discount</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Discount Percentage</label>
                                        <input placeholder="Enter Percentage" type="number" class="form-control"
                                            id="branch_name" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Discount Amount</label>
                                        <input placeholder="Enter Amount" type="number" class="form-control"
                                            id="branch_name" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div id="div-6" class="mydiv">
                                <div class="row p-3">
                                    <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                        <label for="">Payment Type</label>
                                        <select style="padding-inline:10px" name="RefType" id="PaymentType"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="UPI">UPI</option>
                                            <option value="Net Banking">Net Banking</option>
                                        </select>
                                    </div>
                                    <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                        <label for="">
                                            Mobile App</label>
                                        <select style="padding-inline:10px" name="RefType" id="MobileApp"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="GPay">GPay</option>
                                            <option value="Phonepe">Phonepe</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                        <label>
                                            Transaction Id</label>
                                        <input placeholder="Enter Transaction Id" type="number" class="form-control"
                                            id="TransactionId" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                        <label for="">Select Bank</label>
                                        <select style="padding-inline:10px" name="RefType" id="ReservationDate"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="SBI">SBI</option>
                                            <option value="HDFC">HDFC</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Cheque No</label>
                                        <input placeholder="Enter Cheque No" type="number" class="form-control"
                                            id="ChequeNo" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Payment Date</label>
                                        <input type="date" class="form-control" id="PaymentDate" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Paid Amount</label>
                                        <input placeholder="Enter Paid Amount" type="text" class="form-control"
                                            id="PaidAmount" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-md btn-success btnright text-white" type="button"
                                            name="btn_save" id="addToList3"><i
                                                class="nav-icon fa-regular fa-circle-check "></i>
                                            Add to List</button>
                                    </div>

                                    <table class="table col-12 mt-3 p-3 mb-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Payment Type</th>
                                                <th scope="col">Mobile App</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Reservation Date</th>
                                                <th scope="col">Cheque No</th>
                                                <th scope="col">Payment Date</th>
                                                <th scope="col">Paid Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody3">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="div-7" class="mydiv">
                                <div class="row p-3">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                        <label>Menu Type Name</label>
                                        <select style="padding-inline:10px" name="RefType" id="MenuTypeName"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="Pizza">Pizza</option>
                                            <option value="Iddli">Iddli</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                        <label>Menu Name</label>
                                        <select style="padding-inline:10px" name="RefType" id="MenuName"
                                            data-control="select2" data-hide-search="true"
                                            class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="select">Select</option>
                                            <option value="UPI">UPI</option>
                                            <option value="Net Banking">Net Banking</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Quantity</label>
                                        <input placeholder="Enter Quantity" type="text" class="form-control"
                                            id="Quantity" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Rate</label>
                                        <input placeholder="Enter Rate" type="number" class="form-control" id="Rate2"
                                            name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Processing time</label>
                                        <input type="time" class="form-control" id="Processingtime" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Delivery Time</label>
                                        <input type="time" class="form-control" id="DeliveryTime" name="branch_name"
                                            required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                        <label>Total Amount</label>
                                        <input placeholder="Total Amount" type="text" class="form-control"
                                            id="TotalAmount" name="branch_name" required value="<?php if (!empty($data))
                                                echo $data[0]->branch_name; ?>" />
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-md btn-success btnright text-white" type="button"
                                            name="btn_save" id="addToList4"><i
                                                class="nav-icon fa-regular fa-circle-check "></i>
                                            Add to List</button>
                                    </div>

                                    <table class="table col-12 mt-3 p-3 mb-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Menu Type Name</th>
                                                <th scope="col">Menu Name</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Rate</th>
                                                <th scope="col">Processing time</th>
                                                <th scope="col">Delivery Time</th>
                                                <th scope="col">Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody4">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- ********************************** -->
                            <?php if (!empty($data)) {
                                echo "<input name='branch_id' id='branch_id' value='" . $data[0]->branch_id . "' type='hidden' />";
                            }
                            ?>


                            <div class="col-md-12 text-right">
                                <button class="btn btn-md btn-success btnright text-white m-3" type="button"
                                    name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i>
                                    Save</button>

                                <button class="btn btn-md btn-warning text-white" type="button" name="cancle"
                                    id="cancle"><i class="fa-sharp fa-solid fa-pen-to-square"><a href="index" style="color:white;
                                            text-decoration:none;"></i> Edit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script> -->
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/patti.js"></script>
        <script>
            $("#company_type").select2({});
        </script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/branch_create.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>