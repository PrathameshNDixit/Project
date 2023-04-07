<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HealthClub extends CI_Controller
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
        $this->load->view('HealthClub/HealthClubDetailsView', $data);
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
        $this->load->view('HealthClub/HealthClubView');
        $this->load->view('common/footer_view');
    }
    function insertHealthClub()
    {
        $HealthClubId = $this->input->post('HealthClubId');
        
        $HealthClubName = $this->input->post('HealthClubName');
        
        $Description = $this->input->post('Description');

        $fields = array(
            
           'HealthClubName' =>$HealthClubName,
           
           'Description'=>$Description,

            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("Calllogmaster",$fields);
    }
}