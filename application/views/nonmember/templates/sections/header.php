<header class="page-header">
        <nav class="navbar" role="navigation">
            <div class="container-fluid">
                <div class="havbar-header">
                	<!-- BEGIN LOGO -->
                    <a id="index" class="navbar-brand" href="">
                        <img src="<?php echo base_url(); ?>resources/images/logo.png" alt="Logo">
                    </a>
                	<!-- END LOGO -->

	                <!-- BEGIN TOPBAR ACTIONS -->
	                <div class="topbar-actions">
		                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
						<form class="search-form" action="" method="GET">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search here" name="query">
								<span class="input-group-btn">
									<a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a>
								</span>
							</div>
						</form>
						<!-- END HEADER SEARCH BOX -->

	                	<!-- BEGIN GROUP NOTIFICATION -->
						<div class="btn-group-notification btn-group" id="header_notification_bar">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<span class="badge">9</span>
							</button>
							<ul class="dropdown-menu-v2">
								<li class="external">
									<h3><span class="bold">12 pending</span> notifications</h3>
									<a href="#">view all</a>
								</li>
								<li>
									<ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-success">
														<i class="fa fa-plus"></i>
													</span>
													New user registered.
												</span>
												<span class="time">just now</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
													Server #12 overloaded.
												</span>
												<span class="time">3 mins</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-warning">
														<i class="fa fa-bell-o"></i>
													</span>
													Server #2 not responding.
												</span>
												<span class="time">10 mins</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-info">
														<i class="fa fa-bullhorn"></i>
													</span>
													Application error.
												</span>
												<span class="time">14 hrs</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
													Database overloaded 68%.
												</span>
												<span class="time">2 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
												A 	user IP blocked.
											</span>
												<span class="time">3 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-warning">
														<i class="fa fa-bell-o"></i>
													</span>
													Storage Server #4 not responding dfdfdfd.
												</span>
												<span class="time">4 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-info">
														<i class="fa fa-bullhorn"></i>
													</span>
													System Error.
												</span>
												<span class="time">5 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
													Storage server failed.
												</span>
												<span class="time">9 days</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
	                	<!-- END GROUP NOTIFICATION -->

	                	<!-- BEGIN USER PROFILE -->
		                <div class="btn-group-img btn-group">
							<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							 <img src="<?php echo base_url(); ?>resources/images/avatar1.jpg" alt="Logo">	
							</button>
							<ul class="dropdown-menu-v2" role="menu">
								<li class="active">
									<a href="">My Profile <span class="badge badge-danger">1</span> </a>
								</li>
								<li>
									<a href="#">My Inbox <span class="badge badge-info">3</span> </a>
								</li>
								<li>
									<a href="">My Tasks</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="">Lock Screen</a>
								</li>
								<li>
									<a href="">Sign Out</a>
								</li>
							</ul>
						</div>
						<!-- END USER PROFILE -->
					</div>
	                <!-- END TOPBAR ACTIONS -->
                </div>
            </div>
            <!--/container-->
        </nav>
    </header>