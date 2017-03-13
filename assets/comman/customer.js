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
//            {
//                "sClass": "amount",
//                "mDataProp": "amount",
//                "bSortable": true,
//                //"sWidth":'15%'
//            },
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
        dom: "Bfrtip",
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
//                {
//                    extend: "print",
//                    className: "btn-sm"
//                }
            ],
//            responsive: !0,
        columnDefs: [{
//            "targets": 1,
//            "data": "delivery_date",
//            "render": function (data, type, full, meta) {
//
//                var date = new Date(data);
//                var create_date = date.getDate() +  '-' +(date.getMonth() + 1) +  '-' +  date.getFullYear()
//                return create_date;
//            }
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
            // "sInfo": "Showing START to END of TOTAL records",
            // "sInfoEmpty": "Showing 0 to 0 of 0 records",
            "sInfoFiltered": "",
            "sProcessing": ""
        },
     
        "fnServerParams": function (aoData) {
//            aoData.push({"name": "crop_id", "value": $('select[id="crop_id"]').val()});
            aoData.push({"name": "sales_consultant", "value": sales_consultant});
            aoData.push({"name": "customer_name", "value": customer_name});
            aoData.push({"name": "vin_no", "value": vin_no});
            aoData.push({"name": "prospect_id", "value": prospect_id});
            aoData.push({"name": "from_date", "value": from_date});
            aoData.push({"name": "to_date", "value": to_date});
            aoData.push({"name": "mobile_no", "value": mobile_no});
        },
        "fnFooterCallback": function (row, data, start, end, display) {
//            var from_date_field = '' ;
//            var to_date_field = '';
//            data.forEach(function (elementVal) {
//                from_date_field = elementVal.from_date;
//                to_date_field = elementVal.to_date;
//            });
//            if(from_date_field != '') {
//                var d = new Date(from_date_field.split("/").reverse().join("-"));
//                var dd=d.getDate();
//                var mm=d.getMonth()+1;
//                var yy=d.getFullYear();
//                from_date_field = dd+'-'+mm+'-'+yy;
//                var d2 = new Date(to_date_field.split("/").reverse().join("-"));
//                var dd2=d2.getDate();
//                var mm2=d2.getMonth()+1;
//                var yy2=d2.getFullYear();
//                to_date_field = dd2+'-'+mm2+'-'+yy2;
//            }
//            $("#from_date_select").val(from_date_field).prop('disabled', true);;
//            $("#to_date_select").val(to_date_field).prop('disabled', true);;

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