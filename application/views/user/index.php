
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    User List
                    
                </h3>
            </div>
              
           
          </div>
          <div class="clearfix"></div>

          <div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Users</h2>
                        <a class="pull-right btn btn-primary btn-sm" href="<?php echo base_url('welcome/create');?>">Add User</a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        
                        <table id="user_table" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons responsive-utilities jambo_table bulk_action" cellspacing="0" width="100%">
                          <thead>
                            <tr class="headings">

                              <th>Id</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Role</th>
                            </tr>
                          </thead>
                          <tbody>
                              
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
         

        

       

        <!-- pace -->
      <script type="text/javascript">
    $(document).ready(function () {
        var base_url = $("#base_url").val();
//        $('#datatable-responsive').DataTable();
             
               otable2 = $('#user_table').dataTable({
        "aoColumns": [
            {
                "sClass": "id",
                "mDataProp": "id",
                "bSortable": false,
                //"sWidth":'15%'
            },
            {
                "sClass": "name",
                "mDataProp": "name",
                "bSortable": false,
                //"sWidth":'15%'
            },
            {
                "sClass": "username",
                "mDataProp": "username",
                "bSortable": false,
                //"sWidth":'15%'
            },
            {
                "sClass": "type",
                "mDataProp": "type",
                "bSortable": false,
                //"sWidth":'15%'
            }
         

        ],
                dom: "Blfrtip",
            buttons: [ 
                {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn-sm"
                }
            ],
            responsive: !0,
        aaSorting: [[0, 'asc']],
        "bProcessing": true,
        "bLengthChange ": false,
        "bFilter": true,
        "bSearchable": true,
        "retrieve": true,
        "searching": true,
        "responsive": true,
        "pageLength": 5,
        "bServerSide": true,
        "lengthMenu": [5, 10, 20, 30, 50, 100, 200],
        "sAjaxSource": base_url + 'welcome/getUser',
        "oLanguage": {
            "sZeroRecords": "No records found",
            "sInfoFiltered": "",
            "sProcessing": ""
        },
     
        "fnServerParams": function (aoData) {
//            aoData.push({"name": "crop_id", "value": $('select[id="crop_id"]').val()});
           
        },
        "fnFooterCallback": function (row, data, start, end, display) {

        },
    });   
        
    });
//    TableManageButtons.init();
</script>
