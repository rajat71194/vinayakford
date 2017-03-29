/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var sales_consultant = '';
    var customer_name = "";
    var vin_no = "";
    var mobile_no = "";
    var prospect_id = "";
    var mobile_no = "";
    var from_date = "";
    var to_date = "";
    var base_url = $("#base_url").val();
    var otable1; 
    otable1 = $('#datatable-responsive').dataTable({
         language: {
    processing: "<img src='img/loading.gif'> Loading...",
  },
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
                "bSortable": false
,                //"sWidth":'15%'
            },
            {
                "sClass": "consultant_name",
                "mDataProp": "consultant_name",
                "bSortable": false,
                //"sWidth":'15%'
            }
           

        ],
        dom: "Blfrtip",
            buttons: [
//                {
//                    extend: "copy",
//                    className: "btn-sm"
//                }, {
//                    extend: "csv",
//                    className: "btn-sm"
//                }, 
                {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn-sm"
                },
            ],
        columnDefs: [{

            }],
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
        "sAjaxSource": base_url + 'CustomerController/search_customer',
        "oLanguage": {
            "sZeroRecords": "No records found",
            "sInfoFiltered": "",
            "sProcessing": ""
        },
     
        "fnServerParams": function (aoData) {
            aoData.push({"name": "sales_consultant", "value": sales_consultant});
            aoData.push({"name": "customer_name", "value": customer_name});
            aoData.push({"name": "vin_no", "value": vin_no});
            aoData.push({"name": "prospect_id", "value": prospect_id});
            aoData.push({"name": "from_date", "value": from_date});
            aoData.push({"name": "to_date", "value": to_date});
            aoData.push({"name": "mobile_no", "value": mobile_no});
        },
        "fnFooterCallback": function (row, data, start, end, display) {


        },
    });

    $('body').on('click', '.filter_search', function () {
        sales_consultant = $('#sales_consultant').val();
        customer_name = $('#customer_name').val();
        vin_no = $('#vin_no').val();
        prospect_id = $('#prospect_id').val();
        mobile_no = $('#mobile_no').val();
        from_date = $('#from_date').val();
        to_date = $('#to_date').val();
         otable1.fnDraw();
         
    });



});