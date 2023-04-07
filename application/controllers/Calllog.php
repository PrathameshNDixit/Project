<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calllog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->loggedin();
        // $this->load->model('Model_Branch');
    }

    public function index()
    {
        // $data['data']=$this->Model_branch->getallBranch();
        // echo "<pre>";
        // print_r($data);
        // $data['data'] = $this->Model_Branch->select_all();
        $data['data']=$this->Commonmodel->getAll('calllogmaster');
        $this->load->view('common/header_view');
        $this->load->view('Calllog/CalllogDetailsView', $data);
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
        $this->load->view('Calllog/CalllogView');
        $this->load->view('common/footer_view');
    }
    function insertCalllog()
    {
        $CalllogId = $this->input->post('CalllogId');
        $CallType = $this->input->post('CallType');
        $CallPersonName = $this->input->post('CallPersonName');
        $EmployeeName = $this->input->post('EmployeeName');
        $CallDate = $this->input->post('CallDate');
        $CallReasonType = $this->input->post('CallReasonType');
        $CallTime = $this->input->post('CallTime');
        $NextFollowDate = $this->input->post('NextFollowDate');
        $CallDescription = $this->input->post('CallDescription');
        $Feedback = $this->input->post('Feedback');
        $fields = array(
            'CallType' => $CallType,
           'CallPersonName' =>$CallPersonName,
           'EmployeeName' =>$EmployeeName,
           'CallDate'=>$CallDate,
           'CallReasonType'=>$CallReasonType,
           'CallTime'=>$CallTime,
           'NextFollowDate'=>$NextFollowDate,
           'CallDescription'=>$CallDescription,
           'Feedback'=>$Feedback,


            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("Calllogmaster",$fields);
    }
}