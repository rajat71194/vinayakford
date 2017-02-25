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
    	<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_registration">
                                    <input type="hidden" name="state" id="state" value="1"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value=""/>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Full Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess3" name="customer_name" placeholder="Full Name" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control has-feedback-right" name="customer_email" id="inputSuccess4" placeholder="Email" type="text">
                                            <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess5" name="customer_mobno" placeholder="Mobile" type="text">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess6" name="customer_phone" placeholder="Phone" type="text">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="3" name="customer_address" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Engine Chassis Number</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" id="inputSuccess7" name="customer_chesisno" placeholder="Chassis Number" type="text">
                                            <span class="fa fa-automobile form-control-feedback right" aria-hidden="true"></span>  </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Payment Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  name="payment_status"  type="hidden" value="0" />
                                            <input id="payment_status" name="payment_status"  type="checkbox" class="js-switch" value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group payment_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="2" name="customer_payment_reason" placeholder="Reason For Payment Not Received"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group payment_type">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Payment Type</small>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="" value="cash" value="cash" name="customer_payment" id="optionsRadios1" > Via Cash
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="cheque" id="optionsRadios2" name="customer_payment"> Via Cheque
                                                </label>
                                                <label>
                                                    <input type="text" placeholder="Cheque no" value="" id="cheque_no" name="cheque_no"> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Documents Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="documents_status"  type="hidden" class="js-switch" value="0" />
                                            <input name="documents_status" id="documents_status" type="checkbox" class="js-switch" unchecked value="1" />
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
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                            <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_tax">
                                    <input type="hidden" name="state" id="state" value="2"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value=""/>
                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tax Payment Complete ?</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" name="payment_status" value="0"/>
                                            <input name="tax_payment_status" type="hidden"   value="0" />
                                            <input id="tax_payment_status" name="tax_payment_status"  type="checkbox" class="js-switch" unchecked value="1" />
                                        </div>
                                    </div>
                                    <div class="form-group tax_payment_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="tax_payment_reason" rows="2" placeholder="Reason For Tax Payment Not Received"></textarea>
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
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step33">
                           <form class="form-horizontal form-label-left" method="post" enctype="x/data" id="customer_registrationdetail">
                                    <input type="hidden" name="state" id="state" value="3"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value=""/>
                                    <div class="form-group registration_no_type">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Registration No. Type</small>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" id="registration_no_type" name="registration_no_type">
                                                <option value="regular_no">Regular No</option>
                                                <option value="choice_no">Choice No</option>
                                                <option value="vip_no">VIP NO</option>

                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group document_given_to_agent_for_regular_no">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">document Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="document_given_to_agent_for_regular_no" id="document_given_to_agent_for_regular_no" type="hidden"   value="0" />
                                            <input name="document_given_to_agent_for_regular_no" id="document_given_to_agent_for_regular_no" type="checkbox" class="js-switch" unchecked  value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group select_no_for_choice">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Select No. ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="select_no_for_choice" id="select_no_for_choice" type="checkbox" class="js-switch" unchecked />
                                        </div>
                                    </div>
                                    <div class="form-group document_given_to_agent_for_choice_no">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">document Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="document_given_to_agent_for_choice_no" id="document_given_to_agent_for_choice_no" type="checkbox" class="js-switch" unchecked />
                                        </div>
                                    </div>


                                </form>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" >
                        <div class="step44">
                              <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_number">
                                    <input type="hidden" name="state" id="state" value="4"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value=""/>
                                    <div class="form-group no_given_to_cus">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">No. Given to Customer ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="no_given_to_customor"  type="hidden" class="js-switch" value="0"  />
                                            <input name="no_given_to_customor" id="no_given_to_customor" type="checkbox" class="js-switch" value="1" unchecked />
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
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step55">
                              <form class="form-horizontal form-label-left" method="post" enctype="multipart/data" id="customer_rc">
                                    
                                    <input type="hidden" name="state" id="state" value="5"/>
                                    <input type="hidden" name="customer_id" class="customer_id" value=""/>
                                    <div class="form-group call_agent">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                            <small class="text-navy">Call Agent RC Card Dispatched or Not ? </small>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="call_agent" id="call_agent" type="checkbox" class="js-switch" unchecked />
                                        </div>
                                    </div>

                                    <div class="form-group call_agent_reason">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="rc_reason" rows="2" placeholder="RC Not Received"></textarea>
                                        </div>
                                    </div>

                                </form>
                            
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            
        </div>
    </section>
   </div>
    </div>
</div>
<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});



</script>
<style>
     
     .wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 20%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}
.step1 .row {
    margin-bottom:10px;
}
.step_21 {
    border :1px solid #eee;
    border-radius:5px;
/*    padding:10px;*/
}
.step33 {
   
    border-radius:5px;
    padding-left:10px;
    margin-bottom:10px;
}
.dropselectsec {
    width: 68%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.dropselectsec1 {
    width: 74%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.mar_ned {
    margin-bottom:10px;
}
.wdth {
    width:25%;
}
.birthdrop {
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    width: 16%;
    outline: 0;
    font-weight: normal;
}


/* according menu */
#accordion-container {
    font-size:13px
}
.accordion-header {
    font-size:13px;
	background:#ebebeb;
	margin:5px 0 0;
	padding:7px 20px;
	cursor:pointer;
	color:#fff;
	font-weight:400;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px
}
.unselect_img{
	width:18px;
	-webkit-user-select: none;  
	-moz-user-select: none;     
	-ms-user-select: none;      
	user-select: none; 
}
.active-header {
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	background:#F53B27;
}
.active-header:after {
	content:"\f068";
	font-family:'FontAwesome';
	float:right;
	margin:5px;
	font-weight:400
}
.inactive-header {
	background:#333;
}
.inactive-header:after {
	content:"\f067";
	font-family:'FontAwesome';
	float:right;
	margin:4px 5px;
	font-weight:400
}
.accordion-content {
	display:none;
	padding:20px;
	background:#fff;
	border:1px solid #ccc;
	border-top:0;
	-moz-border-radius:0 0 5px 5px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px
}
.accordion-content a{
	text-decoration:none;
	color:#333;
}
.accordion-content td{
	border-bottom:1px solid #dcdcdc;
}



@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>

