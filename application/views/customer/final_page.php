
<!-- Bootstrap core CSS -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Final Page

                </h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Step-5</h2>
                        <a href="<?php echo base_url('customer/search') ?>" class="btn btn-info btn-sm pull-right">Back</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="final_page" method="post" >
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Delivery Date <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control" id="inputSuccess3_edit" name="delivery_date" placeholder="Delivery Date" type="text" value="<?php echo date('d-m-Y h:i:s', strtotime($custdata['delivery_date'])); ?>" readonly="">   
                                    <!--date('d-m-Y h:i A',strtotime($custdata['delivery_date']));-->
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Branch <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control edit" name="branch" id="branch_edit">
                                        <option <?php echo ($custdata['branch'] == "indore") ? " selected " : " " ?> value="indore">Ford Indore</option>
                                        <option <?php echo ($custdata['branch'] == "sagar") ? " selected " : " " ?> value="sagar">Ford Sagar</option>
                                        <option <?php echo ($custdata['branch'] == "khargone") ? " selected " : " " ?> value="khargone">Ford Khargone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Full Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control edit" id="inputSuccess3_edit" name="customer_name" value="<?php echo $custdata['customer_name'] ?>" placeholder="Full Name" type="text">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vehicle Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control edit" name="vehicle_name" id="vehicle_name_edit">

                                        <option  <?php echo ($custdata['vehicle_name'] == "Ford EcoSport") ? " selected " : " " ?>  value="Ford EcoSport">Ford EcoSport</option>
                                        <option  <?php echo ($custdata['vehicle_name'] == "Ford Figo") ? " selected " : " " ?>  value="Ford Figo">Ford Figo</option>
                                        <option  <?php echo ($custdata['vehicle_name'] == "Ford Aspire") ? " selected " : " " ?>  value="Ford Aspire">Ford Aspire</option>
                                        <option  <?php echo ($custdata['vehicle_name'] == "Ford Mustang") ? " selected " : " " ?>  value="Ford Mustang">Ford Mustang</option>
                                        <option  <?php echo ($custdata['vehicle_name'] == "Ford Fiesta") ? " selected " : " " ?>  value="Ford Fiesta">Ford Fiesta</option>
                                        <option  <?php echo ($custdata['vehicle_name'] == "Ford Classic") ? " selected " : " " ?>  value="Ford Classic">Ford Classic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Engine Vin Number <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control edit" id="inputSuccess7_edit" name="customer_chesisno" placeholder="Chasis Number" value="<?php echo $custdata['engine_chesis_no']; ?>" type="text">
                                    <span class="fa fa-automobile form-control-feedback right" aria-hidden="true">    
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control edit" id="inputSuccess5_edit" name="customer_mobno" placeholder="Mobile" type="text" value="<?php echo $custdata['mobile_no'] ?>">
                                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control edit" id="inputSuccess6_edit" name="customer_phone" placeholder="Phone" type="text" value="<?php echo $custdata['phone_no'] ?>">
                                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 edit">Follow Up</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="followup" id="followup_edit" class="form-control edit" placeholder="Comment Here"><?php echo $custdata['followup']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sales Consultant</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control has-feedback-right edit" name="consultant_name" id="consultant_name_edit" placeholder="Consultant name" value="<?php echo $custdata['consultant_name']; ?>" type="text">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true">

                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control has-feedback-right edit" name="customer_email" id="inputSuccess4_edit" placeholder="Email" type="text" value="<?php echo $custdata['email'] ?>">
                                    <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Balance Amount</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select class="form-control edit remaining_amt" name="remaining_amt" id="remaining_amt_edit">
                                        <option <?php echo ($custdata['remaining_amt'] == "0") ? " selected " : " " ?> value="0">No</option>
                                        <option <?php echo ($custdata['remaining_amt'] == "1") ? " selected " : " " ?> value="1">Yes</option>
                                    </select>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">

                                    <input placeholder="Amount" type="text" class="form-control edit amount" name='amount' id="amount_edit" value="<?php echo $custdata['amount']; ?>"/>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Finance</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select class="form-control edit finance" name="finance" id="finance_edit">
                                        <option <?php echo ($custdata['finance'] == "0") ? " selected " : " " ?> value="0">No</option>
                                        <option <?php echo ($custdata['finance'] == "1") ? " selected " : " " ?> value="1">Yes</option>
                                    </select>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">

                                    <input placeholder="Bank Name" type="text" class="form-control edit bank_name" name='bank_name' id="bank_name_edit" value="<?php echo $custdata['bank_name'] ?>"/>
                                </div>
                            </div>   




                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Insurance</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <select class="form-control edit" name="insurance" id="insurance_edit">
                                        <option <?php echo ($custdata['insurance'] == "vapl") ? " selected " : " " ?> value="vapl">VAPL</option>
                                        <option <?php echo ($custdata['insurance'] == "self") ? " selected " : " " ?> value="self">Self</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Vehicle Registration</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <select class="form-control edit" name="vehicle_reg" id="vehicle_reg_edit">
                                        <option <?php echo ($custdata['vehicle_reg'] == "normal") ? " selected " : " " ?> value="normal">Normal</option>
                                        <option <?php echo ($custdata['vehicle_reg'] == "c/o") ? " selected " : " " ?> value="c/o">C/O</option>
                                        <option <?php echo ($custdata['vehicle_reg'] == "tr") ? " selected " : " " ?> value="tr">TR</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="state" value="5" />
                            <input type="hidden" name="customer_id" value="<?php echo $custdata['id']?>" />
                            <input type="hidden" name="base_url" value="<?php echo base_url();?>" />
                            <div class="form-group col-md-12">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="customer_address_edit" class="form-control edit" rows="3" name="customer_address" placeholder="Address"><?php echo $custdata['address'] ?></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info pull-right finish">Finish</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->

    <script type="text/javascript">
        $(document).ready(function () {
            var base_url = $('#base_url').val();
            $("#final_page").validate({
                rules: {
                    branch_edit: "required",
                customer_name: "required",
                vehicle_name_edit: "required",
                customer_chesisno: "required",
                customer_mobno: "required",
                customer_phone: "required",
                followup: "required",
                consultant_name: "required",
                customer_email: "required",
                remaining_amt: "required",
                amount: "required",
                finance: "required",
                bank_name: "required",
                vehicle_reg: "required",
                customer_address: "required",
                }, messages: {
                    call_agent: "Call Agent RC Card Dispatched is required",
                    rc_reason: "Call Agent RC Card Dispatched reason is required"
                }
            });
            
            $(".finish").click(function(){
                if($("#final_page").valid()){
//                    alert('fdfd');
                  var final_page =   $("#final_page").serialize();
                  $.ajax({
            url: base_url + 'customerController/saveData',
            type: 'POST',
            data: final_page,
            async: false,
            success: function (data) {
                var data = $.parseJSON(data);

                if (data.flag) {
                  location.href = base_url+"customer/search";
                }
            }
        });
                  
                  
                  
                }
            });
            $('body').on('change', '#remaining_amt_edit', function () {
            var amount = $(this).val();
            if (amount == 0) {
                $("#amount_edit").hide();
            } else {
                $("#amount_edit").show();

            }
        });
        var amount = $('#remaining_amt_edit').val();
        if (amount == 0) {
            $("#amount_edit").hide();
            $("#amount_edit").val('');
        } else {
            $("#amount_edit").show();

        }
        
        
        $('body').on('change', '#finance_edit', function () {
            var finance = $(this).val();
            if (finance == 0) {
                $("#bank_name_edit").hide();
                $("#bank_name_edit").val('');
            } else {
                $("#bank_name_edit").show();

            }
        });
        
         var finance = $('#finance_edit').val();
        if (finance == 0) {
            $("#bank_name_edit").hide();
            $("#bank_name_edit").val('');
        } else {
            $("#bank_name_edit").show();

        }
        });
    </script>
