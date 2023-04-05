<?php
defined('BASEPATH') or exit('No direct script access allowed');

class postalreceive extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->loggedin();
        // $this->load->model('Model_Branch');
    }
    /*private function loggedin(){
        if(!$this->session->userdata('authenticated')){
            redirect('users/login');
        }
    }*/
    public function index()
    {
        // $data['data']=$this->Model_branch->getallBranch();
        // echo "<pre>";
        // print_r($data);
        // $data['data'] = $this->Model_Branch->select_all();
        $data['data']=$this->Commonmodel->getAll('postalreceivemaster');
        $this->load->view('common/header_view');
        $this->load->view('postalreceive/postalreceivedetailview');
        // $this->load->view('Branch/Branch_detail',$data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        // $obj = '';
        // $branch_id = $this->uri->segment(2);

        // if (empty($branch_id)) {
        //     $branch_id = 0;
        // }

        // if ($branch_id > 0) {
        //     $obj = $this->Model_Branch->search($branch_id);
        // }
        // $data['data'] = $obj;
        $this->load->view('common/header_view');
        $this->load->view('postalreceive/postalreceive1view');
        $this->load->view('common/footer_view');
    }
    function insertPostalreceive()
    {
        $ReceiveId = $this->input->post('ReceiveId');
        $InwardName = $this->input->post('InwardName');
        $InwardNo = $this->input->post('InwardNo');
        $InwardDate = $this->input->post('InwardDate');
        $Place = $this->input->post('Place');
        $Address = $this->input->post('Address');
        $IncomingRefNo = $this->input->post('IncomingRefNo');
        $IncomingDate = $this->input->post('IncomingDate');
        $Subject = $this->input->post('Subject');
        $Remark = $this->input->post('Remark');
        $PostalCharges = $this->input->post('PostalCharges');
        $fields = array(
            'InwardName' => $InwardName,'InwardNo' => $InwardNo,
            'InwardDate' => $InwardDate,'Place' => $Place,
            'Address' => $Address,'IncomingRefNo' => $IncomingRefNo,
            'IncomingDate' => $IncomingDate,'Subject' => $Subject,
            'Remark' => $Remark,'PostalCharges' => $PostalCharges,
            //'created_date' => date('Y-m-d H:i:s'),
            //'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("postalreceivemaster",$fields);
    }
}