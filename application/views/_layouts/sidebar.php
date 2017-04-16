<!-- sidebar menu -->

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">

        <h3>Welcome, <?php echo $this->session->userdata('name'); ?></h3>
        <ul class="nav side-menu">
            <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Home </a></li>
            <li><a href="<?php echo base_url('welcome/logout'); ?>"><i class="fa fa-sign-out"></i> Logout </a></li>
            <li><a href="<?php echo base_url('welcome/changepassword'); ?>"><i class="fa fa-unlock-alt"></i> Change Password </a></li>
            <li><a><i class="fa fa-database"></i>Data Entry <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('customer/search'); ?>">Prospect Data</a></li>
                    <li><a href="<?php echo base_url('customer/pending'); ?>">Pending Cases</a></li>
                    <li><a href="<?php echo base_url('customer/payment'); ?>">Payment Pending</a></li>
                    <!--<li><a href="<?php echo base_url(); ?>enquiry/followup">Follow-up</a></li>-->

                </ul>
            </li>
            <li><a href="<?php echo base_url('report'); ?>"><i class="fa fa-flag"></i> Report </a></li>
            <li><a><i class="fa fa-users"></i>Setup <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('welcome/user'); ?>">User</a></li>
                    <li><a href="<?php echo base_url(); ?>employees">Employees List</a></li>

                </ul>
            </li>
            <!-- <li><a href="<?php echo base_url(); ?>employees"><i class="fa fa-eye"></i>Employees List</a></li> -->
          <!--       <li><a><i class="fa fa-eye"></i>Employees <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?php echo base_url(); ?>employees">Employees List</a></li>
                <li><a href="<?php echo base_url(); ?>employees/edit">Create Employee</a></li>

              </ul>
            </li>
            <li><a><i class="fa fa-phone"></i>Enquiry<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?php echo base_url(); ?>enquiry/followup">FollowUp</a></li>
                <li><a href="<?php echo base_url(); ?>enquiry/edit">Add Enquiry</a></li>

              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Customer <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="<?php echo base_url(); ?>customer">Customer List</a></li>
                  <li><a href="<?php echo base_url('customer/create'); ?>">Create Customer</a></li>

              </ul>
            </li>-->

        </ul>
    </div>


</div>
<!-- /sidebar menu -->
<!-- /menu footer buttons -->
<!--<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>-->
<!-- /menu footer buttons -->
</div>
</div>
