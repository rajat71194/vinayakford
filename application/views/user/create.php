
<!-- Bootstrap core CSS -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    

                </h3>
            </div>
           

        </div>

        <div class="clearfix"></div>

        <div class="row">
            <?php
            $title_org = 'Create';
            if(isset($title)){
                $title_org = $title;
            }?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php if($this->session->flashdata('msg')){?>
                    <div class="alert alert-warning">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('msg');?>
                    </div>
                    <?php }?>
                    <?php if($this->session->flashdata('success')){?>
                    <div class="alert alert-success">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('success');?>
                    </div>
                    <?php }?>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User <?php echo $title_org;?></h2>
                        <a href="<?php echo base_url('welcome/user');?>" class="btn btn-primary btn-sm pull-right">Back</a>
                        <div class="clearfix"></div>
                    </div>
                    <?php 
                    $user_id = "";
                    if(isset($user_ids) && $user_ids!=""){
                     $user_id =    $user_ids; 
                    }
                    ?>
                    <div class="x_content">
                        <form action="<?php echo base_url('welcome/userCreate');?>" method="post" >
                            <input type="hidden" name="user_id" value="<?php echo $user_id;?>"/>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">Name</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="<?= (isset($form_data))? $form_data['name']:  set_value('name'); ?>"/>
                                <?php echo form_error('name');?>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">User Name</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="email" id="email" class="form-control" placeholder="Enter User Name" value="<?= (isset($form_data))? $form_data['username']:  set_value('email'); ?>"/>
                                <?php echo form_error('email');?>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">Password</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"/>
                                 <?php echo form_error('password');?>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"><label for="name">User Role</label></div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <select name='type' id="type" class="form-control">
                                    <option <?= (isset($form_data)&& $form_data['type']=='Admin')? ' selected ':' ';?> value="Admin">Admin</option>
                                    <option <?= (isset($form_data)&& $form_data['type']=='User')? ' selected ':' ';?> value="User">User</option>
                                </select> 
                                
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                            <div class="col-md-4 col-sm-4 col-xs-12"><input type="submit" name="submit" id="submit" class="btn btn-small btn-primary pull-right" value=" <?php echo $title_org;?>"/>
                            </div>
                        </div>
                      

                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->

    <!-- /footer content -->
    
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

