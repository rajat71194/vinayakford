
<!-- Bootstrap core CSS -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Profile

                </h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
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
                    <div class="x_title">
                        <h2>Update Password</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-12">
                            <form method="post" id="updatepassword" action="<?php echo base_url('welcome/updatepassword'); ?>" enctype="multipart/data">
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2 col-sm-3 col-xs-12"><label for="name">Old Password</label></div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Enter Old Password"/>
                                        <?php echo form_error('old_password'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2 col-sm-3 col-xs-12"><label for="name">New Password</label></div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter New Password"/>
                                         <?php echo form_error('new_password'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2 col-sm-3 col-xs-12"><label for="name">Confirm Password</label></div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Enter Confirm Password"/>
                                        <input type="hidden" name="user_id" id="user_id" class="form-control" value="<?php echo $this->session->userdata('admin_id');?>"/>
                                    </div>
                                     
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2 col-sm-3 col-xs-12"></div>
                                     <div class="col-md-4 col-sm-4 col-xs-12"><input type="submit" class="btn btn-small btn-primary filter_search pull-right" value="Update Password"/></div>
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
            
            $("#updatepassword").validate({
                rules: {
                    old_password: {
                        required: true,
                        minlength : 5
                    },
                    new_password: {
                        required: true,
                        minlength : 5
                    },
                    confirm_password: {
                        required: true,
                        minlength : 5,
                         equalTo : "#new_password"
                    }
                }, messages: {
                    old_password: {required: "Old Password is Required"},
                    new_password: {required: "New Password is Required"},
                    confirm_password: {required: "Confirm Password is Required",equalTo:"Confirm Password does not Match"}
                }
            });
        });
    </script>
