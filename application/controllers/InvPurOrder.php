<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InvPurOrder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['data'] = $this->Commonmodel->getAll('postaldispatch');
        $this->load->view('common/header_view');
        $this->load->view('Dispatch/DispatchDetailsView', $data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $this->load->view('common/header_view');
        $this->load->view('InvPurOrder/InvPurOrderView');
        $this->load->view('common/footer_view');
    }
    function insertDispatch()
    {
        $branch_id = $this->input->post('DispatchId');
        $Id = $this->input->post('Id');
        $SupplierName = $this->input->post('SupplierName');
        $PurchaseDate = $this->input->post('PurchaseDate');
        $ItemBarCode = $this->input->post('ItemBarCode');
        $ItemId = $this->input->post('ItemId');
        $ItemName = $this->input->post('ItemName');
        $Unit = $this->input->post('Unit');
        $ExpiryDate = $this->input->post('ExpiryDate');
        $Rate = $this->input->post('Rate');
        $Qty = $this->input->post('Qty');
        $FreeQty = $this->input->post('FreeQty');
        $Amount = $this->input->post('Amount');
        $TotalAmount = $this->input->post('TotalAmount');
        $HSN = $this->input->post('HSN');
        $GST = $this->input->post('GST');
        $GSTAmount = $this->input->post('GSTAmount');
        $Discount = $this->input->post('Discount');
        $DiscountAmount = $this->input->post('DiscountAmount');
        $ShippingCost = $this->input->post('ShippingCost');
        $PurchaseRef = $this->input->post('PurchaseRef');
        $DeliveryNote = $this->input->post('DeliveryNote');
        $PersonalNote = $this->input->post('PersonalNote');
        $TrId = $this->input->post('TrId');
        $ChequeNo = $this->input->post('ChequeNo');
        $ChequeDate = $this->input->post('ChequeDate');
        $PaymentDate = $this->input->post('PaymentDate');
        $PaidAmount = $this->input->post('PaidAmount');
        $PayType = $this->input->post('PayType');
        $MobApp = $this->input->post('MobApp');
        $Bank = $this->input->post('Bank');
        
        $fields = array(
            'Id' => $Id,
            'SupplierName' => $SupplierName,
            'PurchaseDate' => $PurchaseDate,
            'ItemBarCode' => $ItemBarCode,
            'ItemId'=>$ItemId,
            'ItemName'=>$ItemName,
            'Unit'=>$Unit,
            'ExpiryDate' => $ExpiryDate,
            'Rate'=>$Rate,
            'Qty'=>$Qty,
            'FreeQty'=>$FreeQty,
            'Amount'=>$Amount,
            'TotalAmount'=>$TotalAmount,
            'HSN'=>$HSN,
            'GST'=>$GST,
            'GSTAmount'=>$GSTAmount,
            'Discount'=>$Discount,
            'DiscountAmount'=>$DiscountAmount,
            'ShippingCost'=>$ShippingCost,
            'PurchaseRef'=>$PurchaseRef,
            'DeliveryNote'=>$DeliveryNote,
            'PersonalNote'=>$PersonalNote,
            'TrId'=>$TrId,
            'ChequeNo'=>$ChequeNo,
            'ChequeDate'=>$ChequeDate,
            'PaymentDate'=>$PaymentDate,
            'PaidAmount'=>$PaidAmount,
            'PayType'=>$PayType,
            'MobApp'=>$MobApp,
            'Bank'=>$Bank,
            // 'created_date' => date('Y-m-d H:i:s'),
            // 'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("postaldispatch", $fields);
    }
}