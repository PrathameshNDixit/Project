<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
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
        $data['data']=$this->Commonmodel->getAll('staffmessage');
        $this->load->view('common/header_view');
        $this->load->view('Staff/StaffDetailsView', $data);
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
        $this->load->view('Staff/StaffView');
        $this->load->view('common/footer_view');
    }
    function insertStaff()
    {
        $branch_id = $this->input->post('StaffID');
        $branch_name = $this->input->post('BranchName');
        $EmployeeName = $this->input->post('EmployeeName');
        $Message = $this->input->post('Message');
        $Date = $this->input->post('Date');
        $MessageType = $this->input->post('MessageType');
        $Source = $this->input->post('Source');
        $fields = array(
            'BranchName' => $BranchName,
            'EmployeeName' => $EmployeeName,
            'Message' => $Message,
            'Date' => $Date,
            'MessageType' => $MessageType,
            'Source' => $Source,
            // 'created_date' => date('Y-m-d H:i:s'),
            // 'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("staffmessage",$fields);
    }
}