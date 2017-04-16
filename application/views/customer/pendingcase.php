
<!-- Bootstrap core CSS -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Prospact Data List-Pending Case
                </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="pending_case" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons responsive-utilities jambo_table bulk_action" cellspacing="0" width="100%">
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
                                    <th>Ageing</th>

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

</div>
<!-- /page content -->




<script type="text/javascript">
    $(document).ready(function () {
        var base_url = $("#base_url").val();

        otable2 = $('#pending_case').dataTable({
            "aoColumns": [
                {
                    "sClass": "prospect_id",
                    "mDataProp": "prospect_id",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "delivery_date",
                    "mDataProp": "delivery_date",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "engine_chesis_no",
                    "mDataProp": "engine_chesis_no",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "customer_name",
                    "mDataProp": "customer_name",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "mobile_no",
                    "mDataProp": "mobile_no",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "branch",
                    "mDataProp": "branch",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "vehicle_name",
                    "mDataProp": "vehicle_name",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "followup",
                    "mDataProp": "followup",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "empname",
                    "mDataProp": "empname",
                    "bSortable": false,
                    //"sWidth":'15%'
                },
                {
                    "sClass": "ageing",
                    "mDataProp": "ageing",
                    "bSortable": false,
                    //"sWidth":'15%'
                }

            ],
            dom: "Bfrtip",
            buttons: [
                {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn-sm"
                }
            ],
            aaSorting: [[1, 'desc']],
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
            "sAjaxSource": base_url + 'CustomerController/case_customer',
            "oLanguage": {
                "sZeroRecords": "No records found",
                "sInfoFiltered": "",
                "sProcessing": ""
            },
            "fnServerParams": function (aoData) {

            },
            "fnFooterCallback": function (row, data, start, end, display) {

            },
        });

    });
</script>
