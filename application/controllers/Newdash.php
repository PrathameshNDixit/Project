<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newdash extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('common/header_view');
        $this->load->view('Dashboard/Newdashview');
        $this->load->view('common/footer_view');
        // $this->load->view('common/footer_view');
    }
}