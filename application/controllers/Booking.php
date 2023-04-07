<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['data'] = $this->Commonmodel->getAll('Booking');

        $this->load->view('common/header_view');
        $this->load->view('Booking/BookingDetailsView', $data);
        $this->load->view('common/footer_view');

    }
    public function create()
    {


        $this->load->view('common/header_view');
        $this->load->view('Booking/BookingView');
        $this->load->view('common/footer_view');


    }

    function insertBooking()
    {
        $CustomerName = $this->input->post('CustomerName');
        $CustomerId = $this->input->post('CustomerId');
        $PackageName = $this->input->post('PackageName');
        $rate = $this->input->post('rate');
        $Description = $this->input->post('Description');
        $amount = $this->input->post('amount');

        $fields = array(
            'CustomerName' => $CustomerName,
            'CustomerId' => $CustomerId,
            'PackageName' => $PackageName,
            'rate' => $rate,
            'Description' => $Description,
            'amount' => $amount,



            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("Booking", $fields);
    }


}