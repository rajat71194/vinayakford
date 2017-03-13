
<!-- Bootstrap core CSS -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Prospact Data List-Delivered Vehicles

                </h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">Sales Consultant</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="sales_consultant" id="sales_consultant" class="form-control" placeholder="Sales Consultant"/></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">Client Given Name</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Customer Name"/></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">VIN No</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="vin_no" id="vin_no" class="form-control" placeholder="VIN No"/></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">Prospect Id</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="prospect_id" id="prospect_id" class="form-control" placeholder="Prospect Id"/></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">Mobile No</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="number" name="mobile_no" id="mobile_no" class="form-control" placeholder="Mobile No"/></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">From Date</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date"/>
                            </div>
                        </div>

                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">To Date</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date"/>

                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="button" class="btn btn-small btn-info filter_search" value="Search"/></div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons responsive-utilities jambo_table bulk_action" cellspacing="0" width="100%">
                            <thead>
                                <tr class="headings">

                                    <th>Prospect Id</th>
                                    <th>Delivery Date</th>
                                    <th>Vin No</th>
                                    <th>Customer Name</th>
                                    <th>Mobile No</th>
                                    <th>Branch</th>
                                    <th>Vehicle</th>
                                    <th>Followup</th>
                                    <th>Sales Consultant</th>
<!--                                    <th>Mobile No</th>-->
<!--                                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    <th class="bulk-actions" colspan="6">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>-->
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
    <a href="<?php echo base_url('customer/create'); ?>" class="btn btn-sm btn-success">Add Customer</a>
</div>

<script>
    var handleDataTableButtons = function () {
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
            TableManageButtons = function () {
                "use strict";
                return {
                    init: function () {
                        handleDataTableButtons()
                    }
                }
            }();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();

//        $('#datatable-responsive').DataTable();
        $.fn.datepicker.noConflict;
        $('#from_date').datepicker({
            "format": 'dd-mm-yyyy',
            minDate: 0,
            todayHighlight: 'TRUE',
            autoclose: true
        });

        $('#to_date').datepicker(
                {
                    "format": 'dd-mm-yyyy',
                    "minDate": '04-03-2017',
                    todayHighlight: 'TRUE',
                    autoclose: true
                }
        );
    });
//    TableManageButtons.init();
</script>
