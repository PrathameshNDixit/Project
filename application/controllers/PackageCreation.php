<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageCreation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        
    }
	
	
	public function index()
	{
        $data['data']=$this->Commonmodel->getAll('Package');
        
		$this->load->view('common/header_view');
		$this->load->view('PackageCreation/PackageDetailsView',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

   
		$this->load->view('common/header_view');
		$this->load->view('PackageCreation/PackageView');
		$this->load->view('common/footer_view');
	

	}

    function insertPackage(){ 
     $PackageName= $this->input->post('PackageName'); 
     $HCType= $this->input->post('HCType'); 
     $HCDuration= $this->input->post('HCDuration');
     $rate= $this->input->post('rate');
     $TraineeCategory= $this->input->post('TraineeCategory');
     $Features= $this->input->post('Features');
     $amount= $this->input->post('amount');

     $fields=array('HCType'=>$HCType,
                    'HCDuration'=>$HCDuration,
                    'PackageName'=>$PackageName,
                    'rate'=>$rate,
                      'TraineeCategory'=>$TraineeCategory,
                      'Features'=>$Features,
                      'amount'=>$amount,

     
                              
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Package",$fields);
   } 

   
}