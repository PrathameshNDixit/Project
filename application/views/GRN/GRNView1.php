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

    .fform-group label {
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1273eb;
        background: #ffffff;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        top: -30px;
        left: 24px;
        padding: -1px 7px;
        z-index: 10;
        text-align: left;
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
        <div class="breadcrumb">
            <img height="50px" width="350px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
            <h4>GRN Information</h4>
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
                        <form id="Form" action="" method="POST"><br>
                            <div class="row p-3">

                                <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1  form-group  mt-0">
                                    <label>Id</label>
                                    <input type="number" class="form-control" id="Id" name="Id" placeholder="Id" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->Id; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='Id' id='Id' value='" . $data[0]->Id . "' type='hidden' />";
                                }
                                ?>

                                <div class="form-group custom-dropdown  mt-0 col-lg-4 ">
                                    <label for="">Supplier Name  <u style="color:blue;">Supplier Details</u></label>
                                    <!-- <label style="color:blue;"><u>Supplier Details</u></label> -->
                                    <select name="SupplierName" id="SupplierName" data-control="select2"
                                        data-hide-search="true" class="js-states form-control nav selectpicker">
                                        <option selected disabled value="0">---Select Supplier---</option>
                                        <option value="1">TATA</option>
                                        <option value="2">Mahendra</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>GRN Date</label>
                                    <input type="date" class="form-control" id="GRNDate" name="GRNDate" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->GRNDate; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='GRNDate' id='GRNDate' value='" . $data[0]->GRNDate . "' type='hidden' />";
                                }
                                ?>

                                <div class="form-group custom-dropdown  mt-0 col-lg-2 ">
                                    <label for="">Purchase No.</label>
                                    <select name="PurchaseNo" id="PurchaseNo" data-control="select2"
                                        data-hide-search="true" class="js-states form-control nav selectpicker">
                                        <option selected disabled value="0">--- Select Purchase No ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Purchase Date</label>
                                    <input type="date" class="form-control" id="PurchaseDate" name="PurchaseDate" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->PurchaseDate; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='PurchaseDate' id='PurchaseDate' value='" . $data[0]->PurchaseDate . "' type='hidden' />";
                                }
                                ?>

                                <!-- <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5  form-group  mt-0">
                                    <label style="color:blue;"><u>Supplier Details</u></label>
                                </div> --><br><br><br>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Item Bar Code</label>
                                    <input type="number" class="form-control" id="ItemBarCode" name="ItemBarCode" placeholder="Item Bar Code" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->ItemBarCode; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='ItemBarCode' id='ItemBarCode' value='" . $data[0]->ItemBarCode . "' type='hidden' />";
                                }
                                ?>


                                <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1  form-group  mt-0">
                                    <label>Item Id</label>
                                    <input type="number" class="form-control" id="ItemId" name="ItemId" placeholder="Item Id" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->ItemId; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='ItemId' id='ItemId' value='" . $data[0]->ItemId . "' type='hidden' />";
                                }
                                ?>

                                <div class="form-group custom-dropdown  mt-0 col-lg-4 ">
                                    <label for="">Item Name</label>
                                    <select name="ItemName" id="ItemName" data-control="select2"
                                        data-hide-search="true" class="js-states form-control nav selectpicker">
                                        <option selected disabled value="0">--- Select Item ---</option>
                                        <option value="1">item1</option>
                                        <option value="2">item2</option>
                                    </select>
                                </div>

                                <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                    <label for="">Unit</label>
                                    <select name="Unit" id="Unit" data-control="select2"
                                        data-hide-search="true" class="js-states form-control nav selectpicker">
                                        <option selected disabled value="0">--- Select ---</option>
                                        <option value="1">Kg</option>
                                        <option value="2">Gram</option>
                                        <option value="3">Litre</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Expiry Date</label>
                                    <input type="date" class="form-control" id="ExpiryDate" name="ExpiryDate" placeholder="Expiry Date" required value="<?php if (!empty($data)) echo $data[0]->ExpiryDate; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='ExpiryDate' id='ExpiryDate' value='" . $data[0]->ExpiryDate . "' type='hidden' />";
                                }
                                ?><br><br><br>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Rate</label>
                                    <input type="number" class="form-control" id="Rate" name="Rate" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->Rate; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='Rate' id='Rate' value='" . $data[0]->Rate . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Qty</label>
                                    <input type="number" class="form-control" id="Qty" name="Qty" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->Qty; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='Qty' id='Qty' value='" . $data[0]->Qty . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Free Qty</label>
                                    <input type="number" class="form-control" id="FreeQty" name="FreeQty" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->FreeQty; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='FreeQty' id='FreeQty' value='" . $data[0]->FreeQty . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Amount</label>
                                    <input type="number" class="form-control" id="Amount" name="Amount" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->Amount; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='Amount' id='Amount' value='" . $data[0]->Amount . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Total Amount</label>
                                    <input type="number" class="form-control" id="TotalAmount" name="TotalAmount" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->TotalAmount; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='TotalAmount' id='TotalAmount' value='" . $data[0]->TotalAmount . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label style="color:blue;"><u>GST & Discount</u></label>
                                </div><br><br><br>

                                <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                    <label for="">HSN</label>
                                    <select name="HSN" id="HSN" data-control="select2"
                                        data-hide-search="true" class="js-states form-control nav selectpicker">
                                        <option selected disabled value="0">---Select---</option>
                                        <option value="1">1246565</option>
                                    </select>
                                </div>

                                <div class="form-group custom-dropdown  mt-0 col-lg-3 ">
                                    <label for="">GST(%)</label>
                                    <select name="GST" id="GST" data-control="select2"
                                        data-hide-search="true" class="js-states form-control nav selectpicker">
                                        <option selected disabled value="0">---Select---</option>
                                        <option value="1">SGST</option>
                                        <option value="2">CGST</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group  mt-0">
                                    <label>GST Amount</label>
                                    <input type="number" class="form-control" id="GSTAmount" name="GSTAmount" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->GSTAmount; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='GSTAmount' id='GSTAmount' value='" . $data[0]->GSTAmount . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Discount(%)</label>
                                    <input type="number" class="form-control" id="Discount" name="Discount" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->Discount; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='Discount' id='Discount' value='" . $data[0]->Discount . "' type='hidden' />";
                                }
                                ?>

                                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                    <label>Discount Amount</label>
                                    <input type="number" class="form-control" id="DiscountAmount" name="DiscountAmount" placeholder="00.00" required
                                        value="<?php if (!empty($data))
                                            echo $data[0]->DiscountAmount; ?>" />

                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='DiscountAmount' id='DiscountAmount' value='" . $data[0]->DiscountAmount . "' type='hidden' />";
                                }
                                ?><br><br>

                                <div class="col-md-9">
                                    <div style="color:red;"><b>Shipping and Payment Details</b></div><br>

                                    <div class="mynav">
                                    <li class="mynav-link" id="link-1">Shipping Cost</li>
                                    <li class="mynav-link" id="link-2">Purchase Ref</li>
                                    <li class="mynav-link" id="link-3">Payment Details</li>
                                    <li class="mynav-link" id="link-4">Terms & Conditions</li>
                                </div>

                                <div id="div-1" class="mydiv p-0">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                            <label>Shipping Cost</label>
                                            <input type="number" class="form-control" id="ShippingCost" name="ShippingCost" placeholder="0" required value="<?php if (!empty($data))
                                            echo $data[0]->ShippingCost; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='ShippingCost' id='ShippingCost' value='" . $data[0]->ShippingCost . "' type='hidden' />";}?>
                                    </div>
                                </div>

                                <div id="div-2" class="mydiv">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                            <label>Purchase Ref</label>
                                            <input type="number" class="form-control" id="PurchaseRef" name="PurchaseRef" placeholder="0" required value="<?php if (!empty($data))
                                            echo $data[0]->PurchaseRef; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='PurchaseRef' id='PurchaseRef' value='" . $data[0]->PurchaseRef . "' type='hidden' />";}?>
                                    </div>
                                </div>

                                <div id="div-3" class="mydiv">
                                    <div class="row">

                                        <div class="form-group custom-dropdown  mt-0 col-lg-4 ">
                                            <label for="">Payment Type</label>
                                            <select name="PayType" id="PayType" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                                <option selected disabled value="0">---Select---</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Credit</option>
                                                <option value="3">NEFT</option>
                                                <option value="4">Debit</option>
                                            </select>
                                        </div>

                                        <div class="form-group custom-dropdown  mt-0 col-lg-4 ">
                                            <label for="">Mobile App</label>
                                            <select name="MobApp" id="MobApp" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                                <option selected disabled value="0">---Select---</option>
                                                <option value="1">Google Pay</option>
                                                <option value="2">Phone Pay</option>
                                                <option value="3">BHIM UPI</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4  form-group  mt-0">
                                            <label>Transaction Id</label>
                                            <input type="number" class="form-control" id="TrId" name="TrId" placeholder="Transaction Id" required value="<?php if (!empty($data))
                                            echo $data[0]->TrId; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='TrId' id='TrId' value='" . $data[0]->TrId . "' type='hidden' />";}?><br><br><br>

                                        <div class="form-group custom-dropdown  mt-0 col-lg-4 ">
                                            <label for="">Select Bank</label>
                                            <select name="Bank" id="Bank" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                                                <option selected disabled value="0">---Select---</option>
                                                <option value="1">Bank of Maharashtra</option>
                                                <option value="2">Bank of India</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-0">
                                            <label>Cheque No.</label>
                                            <input type="number" class="form-control" id="ChequeNo" name="ChequeNo" placeholder="Cheque No" required value="<?php if (!empty($data))
                                            echo $data[0]->ChequeNo; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='ChequeNo' id='ChequeNo' value='" . $data[0]->ChequeNo . "' type='hidden' />";}?>

                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label>Cheque Date</label>
                                            <input type="date" class="form-control" id="ChequeDate" name="ChequeDate" placeholder="0" required value="<?php if (!empty($data))
                                            echo $data[0]->ChequeDate; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='ChequeDate' id='ChequeDate' value='" . $data[0]->ChequeDate . "' type='hidden' />";}?>

                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label>Payment Date</label>
                                            <input type="date" class="form-control" id="PaymentDate" name="PaymentDate" placeholder="0" required value="<?php if (!empty($data))
                                            echo $data[0]->PaymentDate; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='PaymentDate' id='PaymentDate' value='" . $data[0]->PaymentDate . "' type='hidden' />";}?><br><br><br>

                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label>Paid Amount</label>
                                            <input type="number" class="form-control" id="PaidAmount" name="PaidAmount" placeholder="00.00" required value="<?php if (!empty($data))
                                            echo $data[0]->PaidAmount; ?>" />
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='PaidAmount' id='PaidAmount' value='" . $data[0]->PaidAmount . "' type='hidden' />";}?>
                                    </div>
                                </div>

                                <div id="div-4" class="mydiv">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8  form-group  mt-0">
                                            <label>Delivery Note</label>
                                            <textarea type="text" class="form-control" id="DeliveryNote" name="DeliveryNote" placeholder="Delivery Note" required value="<?php if (!empty($data))
                                            echo $data[0]->DeliveryNote; ?>"></textarea>
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='DeliveryNote' id='DeliveryNote' value='" . $data[0]->DeliveryNote . "' type='hidden' />";}?><br><br><br><br>

                                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8  form-group  mt-0">
                                            <label>Personal Note</label>
                                            <textarea type="text" class="form-control" id="PersonalNote" name="PersonalNote" placeholder="Personal Note" required value="<?php if (!empty($data))
                                            echo $data[0]->PersonalNote; ?>"></textarea>
                                        </div>
                                        <?php if (!empty($data)) {echo "<input name='PersonalNote' id='PersonalNote' value='" . $data[0]->PersonalNote . "' type='hidden' />";}?>
                                    </div>
                                </div>
                                </div>



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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/patti.js"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/branch_create.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>




        <script>


            $("#company_type").select2({});

        </script>