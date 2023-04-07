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
    var CustomerName=$('#CustomerName').val();
    var CustomerId=$('#CustomerId').val();
    var PackageName=$('#PackageName').val();
    var Rate=$('#Rate').val();
    var Description=$('#Description').val();
    var Amount=$('#Amount').val();
   
    var BookingId=$('#BookingId').val();


    if(CustomerName==""|| CustomerId==""|| PackageName==""|| Rate==""|| Description==""|| Amount=="") 
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
      if(BookingId>0)
      {
            a=true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
      
        $.ajax({
        url:base_path+"Booking/updateBooking",
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
            window.location.href = base_path+"Booking";
          }
      });
      }
        else
      {a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
        
        $.ajax({
        url:base_path+"Booking/insertBooking",
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
