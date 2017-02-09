  <link href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate/animate.min.css" rel="stylesheet">

  <!-- omom styling plus plugins -->
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/iCheck/flat/green.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/select/select2.min.css" rel="stylesheet">

  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/input_mask/jquery.inputmask.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url();?>assets/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url();?>assets/js/iCheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url();?>assets/js/pace/pace.min.js"></script>
  <!-- form validation -->
  <script src="<?php echo base_url();?>assets/js/validator/validator.js"></script>
  <script src="<?php echo base_url();?>assets/js/select/select2.full.js"></script>
<script>
    $(document).ready(function() {
      $(":input").inputmask();
        $(".select2_single").select2({
        placeholder: "Select a Employee",
        allowClear: true
      });
    });
  </script>
  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();
      return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>

<div class="right_col" role="main" style="min-height: 382px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                 <h2>Employee Detail <small></small></h2>
                 <div class="clearfix"></div>
            </div>
            <div class="x_content">
                
        
               <form class="form-horizontal form-label-left" action="<?php echo base_url();?>index.php/enquiry/saveEnquiry" method="post" novalidate>
     
                   <input class="form-control has-feedback-right" id="enquiry_email" name="enquiry_id" placeholder="Id" type="hidden" value="<?php if(!empty($this->data['enquiry']->id)){echo $this->data['enquiry']->id; } ?>">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" id="enquiry_name" name="enquiry_name" placeholder="Full Name" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Full Name(s) e.g Jon Doe" required="required" type="text" value="<?php  if(!empty($this->data['enquiry']->name)){ echo $this->data['enquiry']->name; } ?>">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                          </div>
              

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control has-feedback-right" id="enquiry_email" name="enquiry_email" placeholder="Email" type="text" value="<?php if(!empty($this->data['enquiry']->email)){echo $this->data['enquiry']->email;} ?>">
                             <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                          </div>
       
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" id="enquiry_phone" name="enquiry_phone" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Phone" type="text" value="<?php if(!empty($this->data['enquiry']->phone)){echo $this->data['enquiry']->phone;} ?>">
                           <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
                              <textarea class="form-control" id="enquiry_address" name="enquiry_address" rows="3" placeholder="Address" value="<?php if(!empty($this->data['enquiry']->address)){echo $this->data['enquiry']->address;} ?>"><?php if(!empty($this->data['enquiry']->address)){echo $this->data['enquiry']->address;} ?></textarea>
                          </div>
                          </div>
                           <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
                              <textarea class="form-control" id="enquiry_reason" name="enquiry_reason" rows="3" placeholder="Reason" value="<?php if(!empty($this->data['enquiry']->reason)){echo $this->data['enquiry']->reason;} ?>"><?php if(!empty($this->data['enquiry']->reason)){echo $this->data['enquiry']->reason;} ?></textarea>
                          </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
                              <input class="form-control" id="enquiry_date" name="enquiry_date" data-inputmask="'mask' : '9999-99-99 99:99:99'" placeholder="Date" type="text" value="<?php if(!empty($this->data['enquiry']->date)){echo $this->data['enquiry']->date;} ?>">
                              <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span><span>(YYYY-MM-DD HH:II:SS)</span>
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Employee Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php  if(!empty( $this->data['employees'])){
                                    ?>
                                 <select class="select2_single form-control" tabindex="-1" name="enquiry_employee_id">
                                       
                                <?php
                                    foreach ($this->data['employees'] as $employeeskey => $employeesvalue) {
                                        if(!empty($this->data['enquiry']->employee_id)){
                                          if($employeesvalue->id == $this->data['enquiry']->employee_id){?>
                                             <option value="<?php echo $employeesvalue->id; ?>" selected="selected"><?php echo $employeesvalue->name; ?></option>
                                       <?php  } else {?>
                                             <option value="<?php echo $employeesvalue->id; ?>"><?php echo $employeesvalue->name; ?></option>
                                    <?php   } 
                                        }else {?>
                                             <option value="<?php echo $employeesvalue->id; ?>"><?php echo $employeesvalue->name; ?></option>
                                       <?php }
                                        
                                    }?>
                                    </select>  
                            <?php  }?>
                             
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Taken</label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div id="enquiry_taken" class="btn-group" data-toggle="buttons">
                           
                              <?php  if(!empty($this->data['enquiry']->taken)){ ?>
                                   <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="enquiry_taken" value="1" checked=""> &nbsp; Yes &nbsp;
                          </label>
                          <label class="btn btn-default " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="enquiry_taken" value="0" >&nbsp; No &nbsp;
                          </label>
                              <?php }else {?>
                                   <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="enquiry_taken" value="1" checked=""> &nbsp; Yes &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="enquiry_taken" value="0" checked="">&nbsp; No &nbsp;
                          </label>
                             
                                 
                            <?php } ?>
                           
                               
                          
                        </div>
                              </div>
                          </div>
                   
                   
                   
                   
                             <div class="form-group">
                                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                       <button type="submit" class="btn btn-success">Submit</button>
                                   </div>
                            
                            </div>
</form>
                  </div>
            </div>
        </div>
    </div>

       </div>                   
                       
                       
                        
                      
                       
                         

