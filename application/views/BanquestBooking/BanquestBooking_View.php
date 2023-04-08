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
    hr { height:2px; border:none; color:black; background-color:black; }

    .form-group {
        margin-block: 30px;
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

    .my-heading {
        font-size: 2rem;
        margin: 30px 0 30px;
        color: #3f48cc;
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
        #ref-date {
            top: -25px;
        }

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
<div class="main-content-wrap  sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb p-3">
            <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
            <h4>New Banquet Booking</h4>
            <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
        </div>
        <div style="margin-top:-10px;" class=" border-top"></div>
        <div class="row card p-3">
            <div class="col-12">
                <div class=" p-2">
                    <div class="bord">
                        <h3></h3>
                        <form id="Form" action="" method="POST">

                            <div class="row p-3">
                                <div class="col-12 my-heading">
                                    <div>Booking Banquet</div>
                                    <hr>
                                </div>

                                <div class="col-sm-4 col-md-2 col-lg-1 col-xl-1  form-group  mt-0">
                                    <label>Cust Id*</label>
                                    <input type="number" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="form-group custom-dropdown  mt-0 col-lg-4 ">
                                    <label for="">Customer Name</label>
                                    <select name="RefType" id="RefType" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                                <option value="MLA">MLA</option>
                                                <option value="Chief Minister">Chief Minister</option>
                                                <option value="Prime Minister">Prime Minister</option>
                                                <option value="President">President</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                    <label>Event Name*</label>
                                    <input type="text" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Event Days*</label>
                                    <input type="number" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="form-group custom-dropdown  mt-0 col-lg-2 ">
                                    <label for="">Banquet Event Type*</label>
                                    <select name="RefType" id="RefType" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <!--<option value="Meeting Room">Meeting Room</option>
                                            <option value="Conference Room">Conference Room</option>-->
                                    </select>
                                </div>
                                <div class="form-group custom-dropdown  mt-0 col-lg-2 ">
                                    <label for="">Banquet Type*</label>
                                    <select name="RefType" id="RefType" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <!--<option value="Meeting Room">Meeting Room</option>
                                            <option value="Conference Room">Conference Room</option>-->
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Event Start date</label>
                                    <input type="date" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Event Start Time</label>
                                    <input type="time" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Event end date</label>
                                    <input type="date" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Event End Time</label>
                                    <input type="time" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="form-group custom-dropdown  mt-0 col-lg-2 ">
                                    <label for="">Banquet Package Name</label>
                                    <select name="RefType" id="RefType" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <!--<option value="Meeting Room">Meeting Room</option>
                                            <option value="Conference Room">Conference Room</option>-->
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Guaranteed Packs</label>
                                    <input type="text" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Expected Packs</label>
                                    <input type="text" class="form-control" id="InwardNo" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="mynav">
                                <li class="mynav-link" id="link-1">Facility</li>
                                <li class="mynav-link" id="link-2">Sitting Plan</li>
                                <li class="mynav-link" id="link-3">Menu</li>
                                <!--<li class="mynav-link" id="link-4">Extra Facility</li>
                                <li class="mynav-link" id="link-5">Discount Detail</li>
                                <li class="mynav-link" id="link-6">Payment Detail</li>
                                <li class="mynav-link" id="link-7">Menu Detail</li>-->
                            </div>
                            <div id="div-1" class="mydiv row p-3">
                                <div class="row p-3">
                                <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                    <label for="">Facility</label>
                                    <select name="RefType" id="FacilityName" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="Facility1">Facility1</option>
                                            <option value="Facility2">Facility 2</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Facility Rate</label>
                                    <input type="number" class="form-control" id="FacilityRate" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>    
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
                                                <th scope="col">Operation</th>
                                                <th scope="col">Facility Id</th>
                                                <th scope="col">Facility Name</th>
                                                <th scope="col">Facility Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody">
                                        </tbody>
                                    </table>
                                    <div class="input-group mb-3 col-2 ml-auto">
                                        <input type="text" id="output" placeholder="Total" class="input ms-auto" style="width:100px;
                                            padding:5px 7px;
                                            border-radius:10px;">
                                    </div>
                            </div>
                            <div id="div-2" class="mydiv">
                                <div class="row">
                                <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                    <label for="">Sitting Plan</label>
                                    <select name="RefType" id="Plan" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="Plan1">Plan1</option>
                                            <option value="Plan2">Plan 2</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Sitting Plan Rate</label>
                                    <input type="number" class="form-control" id="PlanRate" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0 divvv divv divvv">
                        	        <label for="name">Photo</label>
                                    <input type="file" class="form-control form-control-sm" id="photo" name="photo" placeholder="image" onchange="readimage(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo; ?>"  >
                                         
                                    <?php if(!empty($dataa[0]->photo)){
                                     ?>
                                     <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 65px"> 
                                        <?php } ?>
                            
                                        <img src="" id="profile-img-tag1" calss="img-thumbnail" style="height: 65px" /> 
                                        <input type="hidden" name="hidden_photo" value="<?php if(!empty($dataa[0]->photo)){echo $dataa[0]->photo;} ?>">    
                                </div>   
                                </div>
                                <div class="col-12">
                                        <button class="btn btn-md btn-success btnright text-white" type="button"
                                            name="btn_save" id="addToList2"><i
                                                class="nav-icon fa-regular fa-circle-check "></i>
                                            Add to List</button>
                                    </div>

                                    <table class="table col-12 mt-3 p-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Operation</th>
                                                <th scope="col">Sitting Plan Id</th>
                                                <th scope="col">Sitting Plan Name</th>
                                                <th scope="col">Sitting plan rate</th>
                                                <th scope="col">Sitting Style Image</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody1">
                                        </tbody>
                                    </table>
                                    <div class="input-group mb-3 col-2 ml-auto">
                                        <input type="text" id="output1" placeholder="Total" class="input ms-auto" style="width:100px;
                                            padding:5px 7px;
                                            border-radius:10px;">
                                    </div>
                            </div>
                            <div id="div-3" class="mydiv">
                                <div class="row">
                                <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                    <label for="">Menu</label>
                                    <select name="RefType" id="Menu" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                            <!-- <select class="form-control" name="RefType"> -->
                                            <option value="Menu1">Menu 1</option>
                                            <option value="Menu2">Menu 2</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Menu Rate</label>
                                    <input type="number" class="form-control" id="MenuRate" name="InwardNo" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->InwardNo; ?>" />
                                </div> 
                                </div>
                                <div class="col-12">
                                        <button class="btn btn-md btn-success btnright text-white" type="button"
                                            name="btn_save" id="addToList3"><i
                                                class="nav-icon fa-regular fa-circle-check "></i>
                                            Add to List</button>
                                    </div>

                                    <table class="table col-12 mt-3 p-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Operation</th>
                                                <th scope="col">Menu Id</th>
                                                <th scope="col">Menu Name</th>
                                                <th scope="col">Menu Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mytbody2">
                                        </tbody>
                                    </table>
                                    <div class="input-group mb-3 col-2 ml-auto">
                                        <input type="text" id="output2" placeholder="Total" class="input ms-auto" style="width:100px;
                                            padding:5px 7px;
                                            border-radius:10px;">
                                    </div>
                            </div>
                                <?php if (!empty($data)) {
                                    echo "<input name='DispatchId' id='DispatchId' value='" . $data[0]->DispatchId . "' type='hidden' />";
                                }
                                ?>
                                <div class="col-md-12 text-right">
                                    <button class="btn m-2 btn-md btn-success btnright text-white" type="button"
                                        name="btn_save" id="btn_save"><i
                                            class="nav-icon fa-regular fa-circle-check "></i> Save</button>

                                    <button class="btn btn-md btn-warning text-white" type="button" name="cancle"
                                        id="cancle"><i class="fa-sharp fa-solid fa-pen-to-square"><a href="index"
                                                style="color:white;"></i> Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/BanquestBooking_create.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/banquetpatti.js"></script>

        <script>


            $("#company_type").select2({});

        </script>