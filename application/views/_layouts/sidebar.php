 <!-- sidebar menu -->
 
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
<!--                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>-->
                  <li><a><i class="fa fa-users"></i>Employees <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>employees/employeeList">Employees List</a></li>
                      <li><a href="<?php echo base_url();?>employees/edit">Create Employee</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-phone"></i>Enquiry<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>enquiry/followup">FollowUp</a></li>
                      <li><a href="<?php echo base_url();?>enquiry/edit">Add Enquiry</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Customer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo base_url();?>customer/list">Customer List</a></li>
                        <li><a href="<?php echo base_url('customer/create');?>">Create Customer</a></li>

                    </ul>
                  </li>

                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->
	      <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
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
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>