var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();
   }
  }); 
});


 function saveperform() 
{ 
    var EnquiryName=$('#EnquiryName').val();
    var EnquiryTime=$('#EnquiryTime').val();
    var Date=$('#Date').val();
    var RefType=$('#RefType').val();
    var RefName=$('#RefName').val();
    var RefNo=$('#RefNo').val();
    var EnquiryReason=$('#EnquiryReason').val();
   
   
    var EnquiryId=$('#EnquiryId').val();


    if(EnquiryName==""|| EnquiryTime=="" || Date=="" || RefType=="" || RefName=="" || RefNo==""|| EnquiryReason=="") 
    {
      // alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }

    else
    {
      if(EnquiryId>0)
      {
            a=true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
      
        $.ajax({
        url:base_path+"Enquiry/updateEnquiry",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {
           $('#btn_save').prop('disabled', false);
           $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
            swal({
            title:"",
            text:"Data updated Successfully",
            type:"success",
            showCancelButton: true, 
            showConfirmButton: false,
            timer:10000
        }); a=false;
            window.location.href = base_path+"Enquiry";
          }
      });
      }
        else
      {a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
        
        $.ajax({
        url:base_path+"Enquiry/insertEnquiry",
        type: "POST",

        data: formData,
        processData: false,
        contentType: false,

        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {

            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");
             $('#fkcountry').val('').trigger('change');
               $('#profile-img-tag1').attr('src','');
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
           
           a=false;

                }
      });
      }
      }
 }
