<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuCreation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        
    }
	
	
	public function index()
	{
        $data['data']=$this->Commonmodel->getAll('MenuCreation');
        
		$this->load->view('common/header_view');
		$this->load->view('MenuCreation/MenuCreationDetailsView',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

   
		$this->load->view('common/header_view');
		$this->load->view('MenuCreation/MenuCreationView');
		$this->load->view('common/footer_view');
	

	}

    function insertMenuCreation(){
        $MenuType= $this->input->post('MenuType');
        $MenuTypeName= $this->input->post('MenuTypeName');
        $MenuName= $this->input->post('MenuName');
        $itemstatus= $this->input->post('itemstatus'); 
        $rate= $this->input->post('rate');
        $GST= $this->input->post('GST');

     $photo = '';  
    if($_FILES["photo"]["name"] != '')  
      {  
         $photo = $this->upload_image();  
         $photo1 = $this->upload_image1();
         $photo2 = $this->upload_image2();
         $photo3 = $this->upload_image3();
         $photo4 = $this->upload_image4();
      }  
   else  
      {  
          $photo = $this->input->post("hidden_photo"); 
          $photo1 = $this->input->post("hidden_photo1");
          $photo2 = $this->input->post("hidden_photo2");
          $photo3 = $this->input->post("hidden_photo3");
          $photo4 = $this->input->post("hidden_photo4"); 
      } 
    
     
       $fields=array('MenuType'=>$MenuType,
                      'MenuTypeName'=>$MenuTypeName,
                      'MenuName'=>$MenuName,
                      'itemstatus'=>$itemstatus,
                      'rate'=>$rate,
                      'GST'=>$GST,
                      'photo'=>$photo,
                      'photo1'=>$photo1,
                      'photo2'=>$photo2,
                      'photo3'=>$photo3,
                      'photo4'=>$photo4,
                      
                     
                              
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("MenuCreation",$fields);
   } 

   function upload_image()   
   {  
     if(isset($_FILES["photo"]))  
       {  
           if($_FILES["photo"]["name"] != '')  
             { 
         $extension = explode('.', $_FILES['photo']['name']);  
         $new_name = rand() . '.' . $extension[1];  
         $destination = './upload/' . $new_name;  
         move_uploaded_file($_FILES['photo']['tmp_name'], $destination);  
         return $new_name;  
           }
        }  
   }

}