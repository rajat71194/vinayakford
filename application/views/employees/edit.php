  
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


                <form class="form-horizontal form-label-left" id="employee_form" action="<?php echo base_url();?>employees/saveEmployee" method="post" novalidate>

                   <input class="form-control has-feedback-right" id="employee_email" name="employee_id" placeholder="Id" type="hidden" value="<?php if(!empty($this->employees->id)){echo $this->employees->id; } ?>">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" id="employee_name" name="employee_name" placeholder="Full Name" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Full Name(s) e.g Jon Doe" required="required" type="text" value="<?php  if(!empty($this->employees->name)){ echo $this->employees->name; } ?>">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Designation">Designation<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" id="employee_designation" name="employee_designation" placeholder="Designation" type="text" value="<?php if(!empty($this->employees->designation)){echo $this->employees->designation; } ?>">
                              <span class="fa fa-briefcase form-control-feedback right" aria-hidden="true"></span></div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control has-feedback-right" id="employee_email" name="employee_email" placeholder="Email" type="text" value="<?php if(!empty($this->employees->email)){echo $this->employees->email;} ?>">
                             <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>  </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" id="employee_phone" name="employee_phone" placeholder="Phone" type="text" value="<?php if(!empty($this->employees->phone)){echo $this->employees->phone;} ?>">
                           <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>  </div>
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

  <script type="text/javascript">
  $(document).ready(function(){

      $("#employee_form").validate({
			rules: {
				employee_name: "required",
				employee_designation: "required",
				employee_email: "required",
				employee_phone: "required"
                            },messages: {
				employee_name: "Employee name is required",
				employee_designation: "Employee Designation is required",
				employee_email: "Employee email is required",
				employee_phone: "Employee Phone is required"
                            }
                        });
  })
  </script>
