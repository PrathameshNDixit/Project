var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
  if(a==false){
    
    saveperform();
   }
  }); 
});


 function saveperform() 
{ 
    var InwardNo=$('#InwardNo').val();
    var InwardName=$('#InwardName').val();
    var Place=$('#Place').val();
    var InwardDate=$('#InwardDate').val();
    var Address=$('#Address').val();
    var IncomingRefNo=$('#IncomingRefNo').val();
    var IncomingDate=$('#IncomingDate').val();
    var Subject=$('#Subject').val();
    var Remark=$('#Remark').val();
    var PostalCharges=$('#PostalCharges').val();

    if(InwardName=="" || InwardNo==0 || Place=="" || Address=="" || InwardDate==0 || IncomingRefNo==0 || IncomingDate==0 || Subject=="" || Remark=="" || PostalCharges==0) 
    {
      // alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }

    // else
    // {
    // 	if(userId>0)
    	// {
      //       a=true;
    	
    		// $.ajax({
      //   url:base_path+"Country/updateCountry",
      //   type: "POST",
      //   data: $('#Form').serialize(),
      //    beforeSend: function(){
      //          $('#btn_save').prop('disabled', true);
      //          $('#btn_save').html('Loading');
      //     }, 
      //   success: function(data) {
      //      $('#btn_save').prop('disabled', false);
      //      $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
      //       swal({
      //       title:"",
      //       text:"Data Submitted Successfully",
      //       type:"success",
      //       showCancelButton: true, 
      //       showConfirmButton: false,
      //       timer:10000
      //   }); a=false;
      //       window.location.href = base_path+"Country";
      //     }
      // });
    	// }
        else
    	{a=true;
    		
    		$.ajax({
        url:base_path+"postalreceive/insertPostalreceive",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {

            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");

             // alert("hi");
          swal({
            title:"",
            text:"Data Submitted Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });
           // $('#Form').parsley().destroy();
           // $('#Form').parsley();
           a=false;

                }
      });
    	}
      }
 // }
