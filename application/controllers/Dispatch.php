<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dispatch extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Model_Branch');
    }
    public function index()
    {
        // $data['data']=$this->Model_branch->getallBranch();
        // echo "<pre>";
        // print_r($data);
        // $data['data'] = $this->Model_Branch->select_all();
        $data['data'] = $this->Commonmodel->getAll('postaldispatch');
        $this->load->view('common/Navbar');
        $this->load->view('Dispatch/DispatchDetailsView', $data);
        $this->load->view('common/footer');
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
        $this->load->view('common/Navbar');
        $this->load->view('Dispatch/DispatchView');
        $this->load->view('common/footer');
    }
    function insertDispatch()
    {
        $branch_id = $this->input->post('DispatchId');
        $name = $this->input->post('Name');
        $OutwardDate = $this->input->post('OutwardDate');
        $OutwardNo = $this->input->post('OutwardNo');
        $Address = $this->input->post('Address');
        $Place = $this->input->post('Place');
        $OutwardLetterNo = $this->input->post('OutwardLetterNo');
        $IncommingRefNo=$this->input->post('IncommingRefNo');
        $IncommingDate=$this->input->post('IncommingDate');
        $Subject=$this->input->post('Subject');
        $Remark=$this->input->post('Remark');
        $fields = array(
            'Name' => $name,
            'OutwardDate' => $OutwardDate,
            'OutwardNo' => $OutwardNo,
            'Address'=>$Address,
            'Place'=>$Place,
            'OutwardLetterNo'=>$OutwardLetterNo,
            'IncommingRefNo'=>$IncommingRefNo,
            'Subject'=>$Subject,
            'IncommingDate'=>$IncommingDate,
            'Remark'=>$Remark
            // 'created_date' => date('Y-m-d H:i:s'),
            // 'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("postaldispatch", $fields);
    }
}