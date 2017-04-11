
<!-- Bootstrap core CSS -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Report

                </h3>
            </div>


        </div>
  
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Open Prospect Status</h2>
                        <a href="<?php echo base_url('report')?>" class="btn btn-info btn-sm pull-right">Back</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-12">
                            <form method="post" action="<?php echo base_url('report/statuswisereport');?>" enctype="multipart/data">
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2"><label>Select Branch</label></div>
                                    <div class="col-md-4"><select id="branch" name="branch" class="form-control">
                                            <option value="indore">Indore</option>    
                                            <option value="khargone">Khargone</option>    
                                            <option value="sagar">Sagar</option>    
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2"><label>Select State</label></div>
                                    <div class="col-md-4"><select id="customer_state" name="customer_state" class="form-control">
                                            <option value="1">Document</option>    
                                            <option value="2">Tax Payment</option>    
                                            <option value="3">Registration No</option>    
                                            <option value="4">RC Details</option>    
                                             
                                        </select>
                                    </div>
                                </div>
                                  <div class="col-md-12 form-group">
                                    <div class="col-md-2 col-sm-3 col-xs-12"><label for="name">From Date</label></div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        <input type="text" name="from_date" id="from_date_report" class="form-control" placeholder="From Date"/>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="col-md-2 col-sm-3 col-xs-12"><label for="name">To Date</label></div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        <input type="text" name="to_date" id="to_date_report" class="form-control" placeholder="To Date"/>

                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12"><input type="submit" class="btn btn-small btn-primary filter_search" value="Open"/></div>
                                </div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->

<script type="text/javascript">
        $(document).ready(function () {
         //   $.fn.datepicker.noConflict;
         $( "#from_date_report" ).datepicker({ dateFormat: 'dd-mm-yy' });
         $( "#to_date_report" ).datepicker({ dateFormat: 'dd-mm-yy' });
//            $('#from_date_report').datepicker({
//                format: 'dd-mm-yyyy',
//          
//                todayHighlight: 'TRUE',
//                autoclose: true
//            });

//            $('#').datepicker();
            $("#datewiseformaa").validate({
                rules: {
                    from_date: {
                        required: true
                    },
                    to_date: {
                        required: true
                    },
                }, messages: {
                    from_date: {required: "From Date is Required"},
                    to_date: {required: "To Date is Required"}
                }
            });
        });
    </script>
