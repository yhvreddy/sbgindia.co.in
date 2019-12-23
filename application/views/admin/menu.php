<!-- Left side column. contains the logo and sidebar -->

<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->

  <section class="sidebar">

   

    <!-- sidebar menu: : style can be found in sidebar.less -->

    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">MAIN NAVIGATION</li>

		

		<?php $userlogin = $this->session->userdata('loginsbgadmindetails'); ?>

		<?php //echo "<pre>"; print_r($userlogin); echo "</pre>"; ?>

		<?php if(isset($userlogin[0]->position)){ ?>

		<li><a href="<?=base_url('agent/dashboard')?>"><i class="fa fa-th"></i> <span>Dashboard</span></a></li>

		<?php }else{ ?>

		  <li>

			<a href="<?=base_url('admin/dashboard')?>">

			  <i class="fa fa-th"></i> <span>Dashboard</span>

			</a>

		  </li>

		  	<li>
              <a href="<?=base_url('admin/banners')?>">
                    <i class="fa fa-image"></i> <span> Banners</span>
                </a>
            </li>

			<li>
              <a href="<?=base_url('admin/gallery')?>">
                    <i class="fa fa-camera"></i> <span> gallery</span>
                </a>
            </li>

			<li>
				<a href="<?=base_url('admin/howeare')?>">
					<i class="fa fa-desktop"></i> <span> How We Are</span>
				</a>
			</li>

			<li>
                <a href="<?=base_url('admin/aboutus')?>">
                    <i class="fa fa-calendar"></i> <span> About us</span>
                </a>
            </li>

			<li>
                <a href="<?=base_url('admin/brochures')?>">
                    <i class="fa fa-edit"></i> <span> Brochures</span>
                </a>
            </li>

		  



		  <li class="treeview">

			<a href="#">

			  <i class="fa fa-users"></i>

			  <span>Agents</span>

			  <span class="pull-right-container">

					<i class="fa fa-angle-left pull-right"></i>

				  </span>

			</a>

			<ul class="treeview-menu">
			  <li><a href="<?=base_url('admin/dashboard/agent/add')?>"><i class="fa fa-circle-o"></i> Add Agent</a></li>
			  <li><a href="<?=base_url('admin/dashboard/agent/list')?>"><i class="fa fa-circle-o"></i> Agents Details</a></li>
			</ul>

		</li>

		<li class="treeview">

			<a href="#">
				<i class="fa fa-users"></i>
				<span>Agents Sales Data</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>

			<ul class="treeview-menu">
				<li><a href="<?=base_url('admin/dashboard/agentdata')?>"><i class="fa fa-circle-o"></i> Agents sales data</a></li>
				<li><a href="<?=base_url('admin/dashboard/agentdatalist')?>"><i class="fa fa-circle-o"></i> Agents Sales Details</a></li>
			</ul>

		</li>

		<li class="treeview">

			<a href="#">
				<i class="fa fa-list"></i>
				<span>Layouts</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>

			<ul class="treeview-menu">
				<li><a href="<?=base_url('admin/dashboard/zones')?>"><i class="fa fa-circle-o"></i> Layout Zone </a></li>
				<li><a href="<?=base_url('admin/dashboard/subzones')?>"><i class="fa fa-circle-o"></i> Add Layouts</a></li>
				<li><a href="<?=base_url('admin/dashboard/subzonesList')?>"><i class="fa fa-circle-o"></i> Layout Details</a></li>
				<li><a href="<?=base_url('admin/layout/gallery')?>"><i class="fa fa-circle-o"></i> <span> Layout gallery</span></a></li>
			</ul>

		</li>


		  <li class="treeview">

				<a href="#">

				  <i class="fa fa-users"></i>

				  <span>Settings </span>

				  <span class="pull-right-container">

					<i class="fa fa-angle-left pull-right"></i>

				  </span>

				</a>

				<ul class="treeview-menu">

					<li><a href="<?=base_url('admin/dashboard/discounts')?>"><i class="fa fa-circle-o"></i>Percentages </a></li>
					<li><a href="<?=base_url('admin/dashboard/taxs')?>"><i class="fa fa-circle-o"></i>Tax</a></li>

				</ul>

			</li> 	
			<li><a href="<?=base_url('admin/dashboard/enquirylist')?>"><i class="fa fa-users"></i> <span>Enquery List</span> </a></li>
	    
			<li>
                <a href="<?=base_url('admin/dashboard/partners')?>">
                    <i class="fa fa-edit"></i> <span> Partners</span>
                </a>
            </li>
            <li>
                <a href="<?=base_url('admin/sitedetails')?>">
                    <i class="fa fa-edit"></i> <span> Site Details</span>
                </a>
            </li>
			
		
		
		
		
		
		
		<?php } ?>

    </ul>

  </section>

  <!-- /.sidebar -->

</aside>
