<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
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
        $this->load->view('common/Navbar');
        $this->load->view('Reservation/ReservationView');
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
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("postaldispatch", $fields);
    }
}