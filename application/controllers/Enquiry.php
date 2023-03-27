<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        
    }
	
	
	public function index()
	{
        $data['data']=$this->Commonmodel->getAll('enquiry');
        
		$this->load->view('common/header_view');
		$this->load->view('Enquiry/EnquiryDetailsView',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

   
		$this->load->view('common/header_view');
		$this->load->view('Enquiry/EnquiryView');
		$this->load->view('common/footer_view');
	

	}

    function insertEnquiry(){
     $EnquiryName= $this->input->post('EnquiryName'); 
     $EnquiryTime= $this->input->post('EnquiryTime');
     $Date= $this->input->post('Date');
     $RefType= $this->input->post('RefType');
     $RefName= $this->input->post('RefName');
     $RefNo= $this->input->post('RefNo');
     $EnquiryReason= $this->input->post('EnquiryReason');
    
     
       $fields=array('EnquiryName'=>$EnquiryName,
                      'EnquiryTime'=>$EnquiryTime,
                      'Date'=>$Date,
                      'RefType'=>$RefType,
                      'RefName'=>$RefName,
                      'RefNo'=>$RefNo,
                      'EnquiryReason'=>$EnquiryReason,
                     
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("enquiry",$fields);
   } 

}