<div class="right_col" role="main" style="min-height: 1099px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customer Process</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Registrations <small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Smart Wizard -->

                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                            Step 1<br />
                                            <small>Customer Registration</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                            Step 2<br />
                                            <small>Step 2 Tax Detail</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                            Step 3<br />
                                            <small>Step 3 Registration Detail</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">
                                            Step 4<br />
                                            <small>Step 4 Number Detail</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-5">
                                        <span class="step_no">5</span>
                                        <span class="step_descr">
                                            Step 5<br />
                                            <small>Step 5 RC Detail</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <?php
			    $custdata = array();
                            if(isset($customerdata) && !empty($customerdata)){
                                
                            $custdata =     $customerdata[0];
                                
                            }
                            ?>
                            <input type="hidden" name="state" id="state" value="<?php echo $custdata['customer_state'];?>"/>
                            <div id="step-1">
                                <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_registration">
                                    <input type="hidden" name="state" id="state" value="1"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id'];?>"/>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Full Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
					     <input class="form-control" id="inputSuccess3" name="customer_name" value="<?php echo $custdata['customer_name']?>" placeholder="Full Name" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
					     <input class="form-control has-feedback-right" name="customer_email" id="inputSuccess4" placeholder="Email" type="text" value="<?php echo $custdata['email']?>">
                                            <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess5" name="customer_mobno" placeholder="Mobile" type="text" value="<?php echo $custdata['mobile_no']?>">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess6" name="customer_phone" placeholder="Phone" type="text" value="<?php echo $custdata['phone_no']?>">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="3" name="customer_address" placeholder="Address"><?php echo $custdata['address']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Engine Chassis Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess7" name="customer_chesisno" placeholder="Chassis Number" type="text" value="<?php echo $custdata['engine_chesis_no']?>">
                                            <span class="fa fa-automobile form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Payment Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  name="payment_status"  type="hidden" value="0" />
                                            <input id="payment_status" name="payment_status" <?= ( $custdata['payment_complete'] == "1") ? '   checked ' : ''; ?> type="checkbox" class="js-switch" value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group payment_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="2" name="customer_payment_reason" placeholder="Reason For Payment Not Received"><?php echo $custdata['payment_fail_reason']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group payment_type">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Payment Type</small>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" <?= ( $custdata['payment_type'] == "cash") ? '   checked ' : ''; ?> value="cash" value="cash" name="customer_payment" id="optionsRadios1" > Via Cash
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="cheque" <?= ( $custdata['payment_type'] == "cheque") ? '   checked ' : ''; ?> id="optionsRadios2" name="customer_payment"> Via Cheque
                                                </label>
                                                <label>
						     <input type="hidden" placeholder="Cheque no" value="" id="cheque_no" name="cheque_no" value="0"> 
						     <input type="text" placeholder="Cheque no" value="" id="cheque_no" name="cheque_no" value="<?php echo $custdata['cheque_no']?>"> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Documents Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="documents_status"  type="hidden" class="js-switch" value="0" />
                                            <input name="documents_status" id="documents_status" type="checkbox" class="js-switch" unchecked value="1"  <?= ( $custdata['document_complete'] == "1") ? '   checked ' : ''; ?> />
                                        </div>
                                    </div>
                                    <div class="form-group document_type">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Documents Type ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="document[]">Pan Card
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="2" name="document[]">Driving License
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="3" name="document[]">Voter Id
                                            </label>
                                        </div>
                                    </div>


                                </form>

                            </div>
                            <div id="step-2">
                                <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_tax">
                                    <input type="hidden" name="state" id="state" value="2"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id'];?>"/>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tax Payment Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            
                                            <input name="tax_payment_status" type="hidden"   value="0" />
                                            <input id="tax_payment_status" name="tax_payment_status"  <?= ( $custdata['tax_complete'] == "1") ? '   checked ' : ''; ?>  type="checkbox" class="js-switch" unchecked value="1" />
                                        </div>
                                    </div>
                                    <div class="form-group tax_payment_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="tax_payment_reason" rows="2" placeholder="Reason For Tax Payment Not Received"><?php echo $custdata['tax_fail_reason']?></textarea>
                                        </div>
                                    </div>
                                    <!--                       <div class="form-group selection_of_registration_no">
                                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                                              <small class="text-navy">Selection of Registration No. ? </small>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                  <input name="selection_of_registration_no" id="selection_of_registration_no" type="checkbox" class="js-switch" unchecked />
                                                           </div>
                                                           </div>-->



                                </form>
                            </div>
                            <div id="step-3">
                                <form class="form-horizontal form-label-left" method="post" enctype="x/data" id="customer_registrationdetail">
                                    <input type="hidden" name="state" id="state" value="3"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id'];?>"/>
                                    <div class="form-group registration_no_type">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Registration No. Type</small>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" id="registration_no_type" name="registration_no_type">
                                                <option  <?= ( $custdata['registration_no_type'] == "regular_no") ? '   selected ' : ''; ?>  value="regular_no">Regular No</option>
                                                <option <?= ( $custdata['registration_no_type'] == "choice_no") ? '   selected ' : ''; ?> value="choice_no">Choice No</option>
                                                <option <?= ( $custdata['registration_no_type'] == "vip_no") ? '   selected ' : ''; ?> value="vip_no">VIP NO</option>

                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group document_given_to_agent_for_regular_no">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">document Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="document_given_to_agent_for_regular_no" id="document_given_to_agent_for_regular_no" type="hidden"   value="0" />
                                            <input name="document_given_to_agent_for_regular_no" id="document_given_to_agent_for_regular_no" type="checkbox" <?= ( $custdata['document_given_customer'] == "1") ? '   checked ' : ''; ?>   class="js-switch"   value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group select_no_for_choice">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Select No. ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
					     <input name="select_no_for_choice"  type="hidden"   value="0" />
					     <input name="select_no_for_choice"  <?= ( $custdata['no_for_choice'] == "1") ? '   checked ' : ''; ?>  id="select_no_for_choice" type="checkbox" class="js-switch" value="1"  />
                                        </div>
                                    </div>
                                    <div class="form-group document_given_to_agent_for_choice_no">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">document Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
					     <input name="document_given_to_agent_for_choice_no"  type="hidden"   value="0" />
					     <input name="document_given_to_agent_for_choice_no" id="document_given_to_agent_for_choice_no" type="checkbox" <?= ( $custdata['document_for_no_choice'] == "1") ? '   checked ' : ''; ?>  value="1" class="js-switch"  />
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div id="step-4">
                                <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_number">
                                    <input type="hidden" name="state" id="state" value="4"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id'];?>"/>
                                    <div class="form-group no_given_to_cus">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">No. Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="no_given_to_customor"  type="hidden" class="js-switch" value="0"  />
                                            <input name="no_given_to_customor" id="no_given_to_customor" type="checkbox" class="js-switch" value="1" <?= ( $custdata['no_given_customer'] == "1") ? '   checked ' : ''; ?>  />
                                        </div>
                                    </div>
                                    <div class="show_information_notification">
                                        <div class="alert alert-info alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">�</a>
                                            Take Follow-up by SC for confirmation of Registration No.
                                        </div>
                                        <div class="alert alert-info alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">�</a>
                                            Told Customer RC Card reached at your address within 15 days.
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-5">
                                <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_rc">
                                    
                                    <input type="hidden" name="state" id="state" value="5"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value="<?php echo $custdata['id'];?>"/>
                                    <div class="form-group call_agent">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Call Agent RC Card Dispatched or Not ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="call_agent" id="call_agent" type="checkbox" class="js-switch" <?= ( $custdata['call_agent_rc'] == "1") ? '   checked ' : ''; ?> />
                                        </div>
                                    </div>

                                    <div class="form-group call_agent_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="rc_reason" rows="2" placeholder="RC Not Received"><?php echo $custdata['rc_dispached_not_reason']?></textarea>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                        <!-- End SmartWizard Content -->






                        <!-- Tabs -->

                        <!-- End SmartWizard Content -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var state = $('body').find('#state').val();
        $('#wizard').smartWizard({
            onLeaveStep: leaveAStepCallback,
            onShowStep: StepCallback,
            onFinish: onFinishCallback,
             transitionEffect: 'fade',
               labelNext:'Save & Continue',
              selected: state,
              enableAllSteps: false
             
        });
        var $actionBar = $('.actionBar');
        $('.buttonNext', $actionBar).removeClass('buttonDisabled').on("click"); 
        
        function StepCallback(obj, context){
//            alert('dsdsd');
        }
        function leaveAStepCallback(obj, context) {
//            alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
            var state = validateSteps(context.fromStep);
            console.log(state);
            return state; // return false to stay on step and true to continue navigation 
        }

        function onFinishCallback(objs, context) {
            if (validateAllSteps()) {

            }
	      var state = validateSteps(context.fromStep);
	      console.log(state);
        }
        // Your Step validation logic
        function validateSteps(stepnumber) {
            var isStepValid = true;
            // validate step 1
            if (stepnumber == 1) {
                // Your step validation logic
                // set isStepValid = false if has errors
                if (!$("#customer_registration").valid()) {
                    isStepValid = false;

                } else {
                    isStepValid = true
                    var formData = $("#customer_registration").serialize();
                    var formId = $("#customer_registration");
                    submitForm(formId, formData);
                }

            } else if (stepnumber == 2) {
                if (!$("#customer_tax").valid()) {
                    isStepValid = false
                    
                }else {
                    isStepValid = true
                    var formData = $("#customer_tax").serialize();
                    var formId = $("#customer_tax");
                    submitForm(formId, formData);
                }
            } else if (stepnumber == 3) {
                if (!$("#customer_registrationdetail").valid()) {
                    isStepValid = false

                }else {
                    isStepValid = true
                    var formData = $("#customer_registrationdetail").serialize();
                    var formId = $("#customer_registrationdetail");
                    submitForm(formId, formData);
                }
            } else if (stepnumber == 4) {
                if (!$("#customer_number").valid()) {
                    isStepValid = false

                }else {
                    isStepValid = true
                    var formData = $("#customer_number").serialize();
                    var formId = $("#customer_number");
                    submitForm(formId, formData);
                }
            } else if (stepnumber == 5) {
                if (!$("#customer_rc").valid()) {
                    isStepValid = false

                }else {
                    isStepValid = true
                    var formData = $("#customer_rc").serialize();
                    var formId = $("#customer_rc");
                    submitForm(formId, formData);
                }
            } else {
                isStepValid = true

            }
            return isStepValid;
            // ...      
        }
        function validateAllSteps() {
            var isStepValid = true;
            // all step validation logic     
            return isStepValid;
        }
//        $('#wizard_verticle').smartWizard({
//          transitionEffect: 'slide'
//        });
        /****************************************************************************************/
        // form submit for customer registration
        $('body').on('click','.buttonPrevious',function(){
           console.log('tessfdfdfd'); 
           alert('testtttt');
        });
        $('body').on('click','.buttonNext',function(){
           console.log('tessfdfdfd'); 
           alert('testtttt');
        });

        $("#customer_registration").validate({
            rules: {
                customer_name: "required",
//                customer_email: "required",
//                customer_mobno: "required",
//                customer_phone: "required",
//                customer_address: "required",
//                customer_chesisno: "required",
//                payment_status: "required",
//                documents_status: "required"
            }, messages: {
                customer_name: "Customer Name is Required",
                customer_email: "Customer Email is required",
                customer_mobno: "Customer Mobile no is required",
                customer_phone: "Customer Phone no is required",
                customer_address: "Customer address is required",
                customer_chesisno: "Vehicle Chesis no is required",
                payment_status: "Payment Status is required",
                documents_status: "Document Status is required"
            }
        });
        //
        $("#customer_tax").validate({
            rules: {
                tax_payment_status: "required",
                tax_payment_reason: "required",
            }, messages: {
                tax_payment_status: "Tax Payment is Required",
                tax_payment_reason: "Reason is required",
            }
        });
        $("#customer_registrationdetail").validate({
            rules: {
                registration_no_type: "required",
                document_given_to_agent_for_regular_no: "required",
            }, messages: {
                registration_no_type: "registration no is Required",
                document_given_to_agent_for_regular_no: "Docuemnt check is  required",
            }
        });
        $("#customer_number").validate({
            rules: {
                no_given_to_customor: "required",
            }, messages: {
                no_given_to_customor: "No given to customer is Required",
            }
        });
        $("#customer_rc").validate({
            rules: {
                call_agent: "required",
                rc_reason: "required"
            }, messages: {
                call_agent: "Call Agent RC Card Dispatched is required",
                rc_reason: "Call Agent RC Card Dispatched reason is required"
            }
        });
        //next button event

        $('body').on('click', '.buttonNext', function () {


        });


        /****************************************************************************************/
        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
        if ($("#payment_status").is(":checked")) {
            $(".payment_reason").hide();
        } else {
            $(".payment_type").hide();

        }
        if ($("#documents_status").is(":checked")) {
            $(".document_type").show();
        } else {
            $(".document_type").hide();
        }
        if ($("#tax_payment_status").is(":checked")) {
            $(".tax_payment_reason").hide();
        } else {
            $(".tax_payment_reason").show();
        }
        if ($("#registration_no_type").val() == 'regular_no') {
            $(".document_given_to_agent_for_regular_no").show();
            $(".select_no_for_choice").hide();
            $(".document_given_to_agent_for_choice_no").hide();
        } else if ($("#registration_no_type").val() == 'choice_no') {
            $(".document_given_to_agent_for_regular_no").hide();
            $(".select_no_for_choice").show();
            if ($("#select_no_for_choice").is(":checked")) {
                $(".document_given_to_agent_for_choice_no").show();
            } else {
                $(".document_given_to_agent_for_choice_no").hide();
            }
        }
        if ($("#no_given_to_customor").is(":checked")) {
            $(".show_information_notification").hide();
        } else {
            $(".show_information_notification").show();
        }

        if ($("#call_agent").is(":checked")) {
            $(".call_agent_reason").hide();
        } else {
            $(".call_agent_reason").show();
        }

        $("#payment_status").change(function () {
            if ($(this).is(":checked")) {

                $(".payment_reason").hide();
                $(".payment_type").show();
            } else {
                $(".payment_reason").show();
                $(".payment_type").hide();
            }
        });
        $("#documents_status").change(function () {
            if ($(this).is(":checked")) {


                $(".document_type").show();
            } else {

                $(".document_type").hide();
            }
        });
        $("#tax_payment_status").change(function () {
            if ($(this).is(":checked")) {

                $(".tax_payment_reason").hide();
                //$(".selection_of_registration_no").show();
            } else {
                $(".tax_payment_reason").show();
                //  $(".selection_of_registration_no").hide();
            }
        });
        $("#selection_of_registration_no").change(function () {
            if ($(this).is(":checked")) {

                $(".registration_no_type").hide();
                $(".no_given_to_customor").show();
            } else {
                $(".registration_no_type").show();
                $(".no_given_to_customor").hide();
            }
        });
        $("#registration_no_type").change(function () {
            // alert($(this).val());
            if ($(this).val() == 'regular_no') {
                $(".document_given_to_agent_for_regular_no").show();
            }
            if ($(this).val() == 'choice_no') {
                $(".select_no_for_choice").show();
            }

            if ($(this).val() == 'regular_no') {
                $(".document_given_to_agent_for_regular_no").show();
                $(".select_no_for_choice").hide();
                $(".document_given_to_agent_for_choice_no").hide();
            } else if ($(this).val() == 'choice_no') {
                $(".document_given_to_agent_for_regular_no").hide();
                $(".select_no_for_choice").show();
                if ($("#select_no_for_choice").is(":checked")) {
                    $(".document_given_to_agent_for_choice_no").show();
                } else {
                    $(".document_given_to_agent_for_choice_no").hide();
                }
            }

        });
        $("#select_no_for_choice").change(function () {
            // alert($(this).val());
            if ($(this).is(":checked")) {
                $(".document_given_to_agent_for_choice_no").show();
            } else {
                $(".document_given_to_agent_for_choice_no").hide();
            }


        });
        $("#no_given_to_customor").change(function () {
            // alert($(this).val());
            if ($(this).is(":checked")) {
                $(".show_information_notification").hide();
            } else {
                $(".show_information_notification").show();
            }


        });
        $("#call_agent").change(function () {

            if ($(this).is(":checked")) {
                $(".call_agent_reason").hide();
            } else {
                $(".call_agent_reason").show();
            }


        });


    });

    function submitForm(formid, formdata) {
        var base_url = $('body').find('#base_url').val();
        var obj = formid;
        $.ajax({
            url: base_url + 'customerController/saveData',
            type: 'POST',
            data:  formdata,
            success: function (data) {
                var data = $.parseJSON(data);
                console.log(data);
                if(data.flag){
                  $('body').find('.customer_id').val(data.custíd);  
                    
                }
            }
        });

    }

</script>