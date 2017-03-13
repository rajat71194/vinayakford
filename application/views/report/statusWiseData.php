
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
                                    <div class="col-md-2"><label>Select State</label></div>
                                    <div class="col-md-4"><select id="customer_state" name="customer_state" class="form-control">
                                            <option value="1">State-1</option>    
                                            <option value="2">State-2</option>    
                                            <option value="3">State-3</option>    
                                            <option value="4">State-4</option>    
                                            <option value="5">State-5</option>    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4 ">
                                        <button class="btn btn-sm btn-primary pull-right">Open</button>
                                    </div>
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

    });
</script>
