
  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate/animate.min.css" rel="stylesheet">

<!--   Custom styling plus plugins -->
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
                    Employees List
                    
                </h3>
            </div>

           
          </div>
          <div class="clearfix"></div>

          <div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Responsive example <small>Users</small></h2>
                        
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                          Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                        </p>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons responsive-utilities jambo_table bulk_action" cellspacing="0" width="100%">
                          <thead>
                            <tr class="headings">
<!--                                <th>
                          <input type="checkbox" id="checkedAll" class="flat">
                        </th>-->
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Reason</th>
                              <th>Date</th>
                              <th>Taken</th>
                              <th>Employee Name</th>
                              <th class="column-title no-link last"><span class="nobr">Action</span></th>
                               <th class="bulk-actions" colspan="6">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($this->followup as $followupkey => $followupsvalue) {
                                   $today = date("Y-m-d H:i:s");
                                   $color="#f9f9f9";
                                   if ($followupsvalue->date < $today && $followupsvalue->taken=='0') {
                                       $color="#FD3B3B";
                                   }
                                   if (date('Y-m-d', strtotime($followupsvalue->date)) == date("Y-m-d") && $followupsvalue->taken=='1') {
                                       $color="#99ff99";
                                   }
                                   if (date('Y-m-d', strtotime($followupsvalue->date)) == date("Y-m-d") && $followupsvalue->taken=='0') {
                                       $color="#FF9999";
                                   }
                                   if ( date('Y-m-d', strtotime($followupsvalue->date)) == date('Y-m-d', strtotime(' +1 day'))) {
                                       $color="#F5CCFF";
                                   }
                                  
                                  ?>
                                  <tr style="background-color:<?php echo $color; ?>">
<!--                                 <td class="a-center">
                          <input type="checkbox" class="checkSingle flat" name="table_records">
                        </td>-->
                              <td><?php echo $followupsvalue->name; ?></td>
                              <td><?php echo $followupsvalue->email; ?></td>
                              <td><?php echo $followupsvalue->phone; ?></td>
                              <td><?php echo $followupsvalue->address; ?></td>
                              <td><?php echo $followupsvalue->reason; ?></td>
                              <td><?php echo $followupsvalue->date; ?></td>
                              <td><?php if($followupsvalue->taken){
                                  echo "Yes";}else {
                                      echo "No";
                                  } ?></td>
                              <td><?php echo $followupsvalue->employee_name; ?></td>
                  
                               <td class=" last"><a href="./edit/<?php echo $followupsvalue->id; ?>" class="btn btn-success btn-xs">Edit</a> <a href="./delete/<?php echo $followupsvalue->id; ?>" class="btn btn-danger btn-xs">delete</a></td>
                            </tr>
                              <?php } ?>
                           
               
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