<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainMenu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        
    }
	
	
	public function index()
	{
        $data['data']=$this->Commonmodel->getAll('MainMenu');
        
		$this->load->view('common/header_view');
		$this->load->view('MainMenu/MainMenuDetailsView',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

   
		$this->load->view('common/header_view');
		$this->load->view('MainMenu/MainMenuView');
		$this->load->view('common/footer_view');
	

	}

    function insertMainMenu(){
     $MainMenuName= $this->input->post('MainMenuName'); 
     $MainMenuDescription= $this->input->post('MainMenuDescription');

     $photo = '';  
    if($_FILES["photo"]["name"] != '')  
      {  
         $photo = $this->upload_image();  
      }  
   else  
      {  
          $photo = $this->input->post("hidden_photo");  
      } 
    
     
       $fields=array('MainMenuName'=>$MainMenuName,
                      'MainMenuDescription'=>$MainMenuDescription,
                      'photo'=>$photo,
                      
                     
                              
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("MainMenu",$fields);
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