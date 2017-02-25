
  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate/animate.min.css" rel="stylesheet">

  
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/iCheck/flat/green.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Customer List
                    
                </h3>
            </div>
              
           
          </div>
          <div class="clearfix"></div>

          <div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Users</h2>
                        
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons responsive-utilities jambo_table bulk_action" cellspacing="0" width="100%">
                          <thead>
                            <tr class="headings">
<!--                                <th>
                          <input type="checkbox" id="checkedAll" class="flat">
                        </th>-->
                              <th>Customer Name</th>
                              <th>Email</th>
                              <th>Mobile No</th>
                              <th>Chesis No</th>
                              <th>Payment Type</th>
                              <th>Stage Completed</th>
                              <th class="column-title no-link last"><span class="nobr">Action</span></th>
                               <th class="bulk-actions" colspan="6">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                            </tr>
                          </thead>
                          <tbody>
                              
                              <?php
                              if(!empty($customers)){
                              foreach ($customers as $key => $value) { ?>
                                  <tr>
<!--                                 <td class="a-center">
                          <input type="checkbox" class="checkSingle flat" name="table_records">
                        </td>-->
                              <td><?php echo $value['customer_name']; ?></td>
                              <td><?php echo $value['email']; ?></td>
                              <td><?php echo $value['mobile_no']; ?></td>
                              <td><?php echo $value['engine_chesis_no']; ?></td>
                              <td><?php echo ($value['payment_type']=="cash")?'Cash':'Cheque'; ?></td>
                              <td><?php echo "Step-".$value['customer_state']; ?></td>
                  
                               <td class=" last"><a href="./customer/testedit/<?php echo $value['id']; ?>" class="btn btn-success btn-xs">Edit</a> <a href="./customer/delete/<?php echo $value['id']; ?>" class="btn btn-danger btn-xs">delete</a></td>
                            </tr>
                              <?php } }?>
                           
               
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- footer content -->
              
              <!-- /footer content -->

            </div>
            <!-- /page content -->
         

        

       

        
      <script src="<?php echo base_url();?>assets/js/bootstrap/js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="<?php echo base_url();?>assets/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url();?>assets/js/iCheck/icheck.min.js"></script>

        


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="<?php echo base_url();?>assets/js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $(".datatable-buttons").length && $(".datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            
            $('#datatable-responsive').DataTable();
            
          
          });
          TableManageButtons.init();
        </script>
<!--        <script>
            $(document).ready(function() {
                $("#checkedAll").change(function(){
                  if(this.checked){
                    $(".checkSingle").each(function(){
                      this.checked=true;
                    })              
                  }else{
                    $(".checkSingle").each(function(){
                      this.checked=false;
                    })              
                  }
                });

                $(".checkSingle").click(function () {
                  if ($(this).is(":checked")){
                    var isAllChecked = 0;
                    $(".checkSingle").each(function(){
                      if(!this.checked)
                         isAllChecked = 1;
                    })              
                    if(isAllChecked == 0){ $("#checkedAll").prop("checked", true); }     
                  }
                  else {
                    $("#checkedAll").prop("checked", false);
                  }
                });
              });
            </script>-->