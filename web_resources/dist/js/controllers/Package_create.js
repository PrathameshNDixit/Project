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
    var HCType=$('#HCType').val();
    var HCDuration=$('#HCDuration').val();
    var PackageName=$('#PackageName').val();
    var Rate=$('#Rate').val();
    var TraineeCategory=$('#TraineeCategory').val();
    var Amount=$('#Amount').val();
    var Features=$('#Features').val();
   
    var PackageId=$('#PackageId').val();


    if(HCType==""|| HCDuration==""|| PackageName==""|| Rate==""|| TraineeCategory==""|| Amount==""|| Features=="") 
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
      if(PackageId>0)
      {
            a=true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
      
        $.ajax({
        url:base_path+"Package/updatePackage",
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
            Descriptionr:10000
        }); a=false;
            window.location.href = base_path+"Package";
          }
      });
      }
        else
      {a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
        
        $.ajax({
        url:base_path+"Package/insertPackage",
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
            Descriptionr:1000
        });
           
           a=false;

                }
      });
      }
      }
 }
