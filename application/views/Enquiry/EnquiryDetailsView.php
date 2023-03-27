
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb d-flex justify-content-end">
                  
                <button class="btn btn-primary "  type="button" name="" id="">
                    <a href="<?=base_url() ?>Enquiry/create" class="text-white">Add New</a>
                </button>
                    
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Form Inputs</div>
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>O/P</th>
                                                <th>Id</th>
                                                <th>Enquiry Name</th>
                                                <th>Enquiry Time</th>
                                                <th>Date</th>
                                                <th>Reference Type</th>
                                                <th>Reference Name</th>
                                                <th>Reference No</th>
                                                <th>Enquiry Reason</th>

                                                <!-- <th>code</th> -->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                 $i=0;
                                foreach($data as $rw=>$value){
                                 echo "<tr>";
                                  echo  '<td><a href="'.base_url().'Enquiry/update/'.$value->EnquiryId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                  </td>';
                                
                                 echo "<td>".$value->EnquiryId."</td>";
                                 echo "<td>".$value->EnquiryName."</td>";
                                 echo "<td>".$value->EnquiryTime."</td>";
                                 echo "<td>".$value->Date."</td>";
                                 echo "<td>".$value->RefType."</td>";
                                 echo "<td>".$value->RefName."</td>";
                                 echo "<td>".$value->RefNo."</td>";
                                 echo "<td>".$value->EnquiryReason."</td>";$i++;


                                 echo "</tr>";                        
                             }
                             ?>  
                           
                                          
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
   

    $('#example').dataTable();
 
    
} );
</script>
                   
                       
               
            