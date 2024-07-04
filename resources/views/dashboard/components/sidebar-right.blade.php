	
				<!-- main-sidebar -->
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<div class="sticky">
					<aside class="app-sidebar sidebar-scroll">
						<div class="main-sidebar-header active">
							<a class="desktop-logo logo-light active" href="{{route('home')}}"><img src="{{url('assets/images/logo.png')}}"  class="main-logo"  alt="logo"></a>
							<a class="desktop-logo logo-dark active" href="index.html"><img src="{{url('assets/img/brand/logo-white.png')}}" class="main-logo" alt="logo"></a>
							<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="{{url('assets/img/brand/favicon.png')}}" alt="logo"></a>
							<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{url('assets/img/brand/favicon-white.png')}}" alt="logo"></a>
						</div>
						<div class="main-sidemenu">
							<div class="app-sidebar__user clearfix">
								<div class="dropdown user-pro-body">
									<div class="main-img-user avatar-xl">
										<img alt="user-img"  src="{{url('assets/images/user/user-thumb.jpg')}}" ><span class="avatar-status profile-status bg-green"></span>
									</div>
									<div class="user-info">
										<h4 class="fw-semibold mt-3 mb-0"></h4>
 									</div>
								</div>
							</div>
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu"> 
						 
								<li class="side-item side-item-category">Main</li>
								<li class="slide">
									<a class="side-menu__item" href="{{route('admin.dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Index</span><span class="badge bg-success text-light bg-side-text">1</span></a>
								</li>
								<!-- <li class="side-item side-item-category">General</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side11" class="active " data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side12" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side13" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side11">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Icons</a></li>
															<li><a class="slide-item" href="icons.html">Font Awesome </a></li>
															<li><a class="slide-item" href="icons-2.html">Material Design Icons</a></li>
															<li><a class="slide-item" href="icons-3.html">Simple Line Icons</a></li>
															<li><a class="slide-item" href="icons-4.html">Feather Icons</a></li>
															<li><a class="slide-item" href="icons-5.html">Ionic Icons</a></li>
															<li><a class="slide-item" href="icons-6.html">Flag Icons</a></li>
															<li><a class="slide-item" href="icons-7.html">Pe7 Icons</a></li>
															<li><a class="slide-item" href="icons-8.html">Themify Icons</a></li>
															<li><a class="slide-item" href="icons-9.html">Typicons Icons</a></li>
															<li><a class="slide-item" href="icons-10.html">Weather Icons</a></li>
															<li><a class="slide-item" href="icons-11.html">Material Icons</a></li>
															<li><a class="slide-item" href="icons-12.html">Bootstrap Icons</a></li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side12">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side13">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="{{url('assets/img/users/8.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{url('assets/img/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{url('assets/img/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{url('../assets/img/users/7.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{url('../assets/img/users/14.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{url('../assets/img/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{url('../assets/img/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{url('../assets/img/users/11.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side14" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side15" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side16" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side14">
														<ul class="sidemenu-list">
			
															<li class="side-menu__label1"><a href="javascript:void(0);">Charts</a></li>
															<li><a class="slide-item" href="chart-morris.html">Morris Charts</a></li>
															<li><a class="slide-item" href="chart-flot.html">Flot Charts</a></li>
															<li><a class="slide-item" href="chart-chartjs.html">ChartJS</a></li>
															<li><a class="slide-item" href="chart-echart.html">Echart</a></li>
															<li><a class="slide-item" href="chart-sparkline.html">Sparkline</a></li>
															<li><a class="slide-item" href="chart-peity.html">Chart-peity</a></li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side15">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side16">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="side-item side-item-category">WEB APPS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side17" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side18" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side19" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side17">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Apps</a></li>
															<li><a class="slide-item" href="cards.html">Cards</a></li>
															<li><a class="slide-item" href="draggablecards.html">Draggablecards</a></li>
															<li><a class="slide-item" href="rangeslider.html">Range-slider</a></li>
															<li><a class="slide-item" href="calendar.html">Calendar</a></li>
															<li><a class="slide-item" href="contacts.html">Contacts</a></li>
															<li><a class="slide-item" href="image-compare.html">Image-compare</a></li>
															<li><a class="slide-item" href="notification.html">Notification</a></li>
															<li><a class="slide-item" href="widgets.html">Widgets</a></li>
															<li><a class="slide-item" href="widget-notification.html">Widget-notification</a></li>
															<li><a class="slide-item" href="treeview.html">Treeview</a></li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">File-Manager</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="file-manager.html">File-Manager</a></li>
																	<li><a class="sub-side-menu__item" href="file-manager-list.html">File-Manager-List</a></li>
																	<li><a class="sub-side-menu__item" href="file-manager-details.html">File-Manager-Details</a></li>
																	<li><a class="sub-side-menu__item" href="file-attachments.html">File-Attachments</a></li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side18">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side19">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side20" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side21" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side22" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side20">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Elements</a></li>
															<li><a class="slide-item" href="alerts.html">Alerts</a></li>
															<li><a class="slide-item" href="avatar.html">Avatar</a></li>
															<li><a class="slide-item" href="breadcrumbs.html">Breadcrumbs</a></li>
															<li><a class="slide-item" href="buttons.html">Buttons</a></li>
															<li><a class="slide-item" href="badge.html">Badge</a></li>
															<li><a class="slide-item" href="dropdown.html">Dropdown</a></li>
															<li><a class="slide-item" href="thumbnails.html">Thumbnails</a></li>
															<li><a class="slide-item" href="list-group.html">List Group</a></li>
															<li><a class="slide-item" href="navigation.html">Navigation</a></li>
															<li><a class="slide-item" href="images.html">Images</a></li>
															<li><a class="slide-item" href="pagination.html">Pagination</a></li>
															<li><a class="slide-item" href="popover.html">Popover</a></li>
															<li><a class="slide-item" href="progress.html">Progress</a></li>
															<li><a class="slide-item" href="spinners.html">Spinners</a></li>
															<li><a class="slide-item" href="media-object.html">Media Object</a></li>
															<li><a class="slide-item" href="typography.html">Typography</a></li>
															<li><a class="slide-item" href="tooltip.html">Tooltip</a></li>
															<li><a class="slide-item" href="toast.html">Toast</a></li>
															<li><a class="slide-item" href="tags.html">Tags</a></li>
															<li><a class="slide-item" href="tabs.html">Tabs</a></li>
															<li><a class="slide-item" href="scrollspy.html">Scrollspy</a></li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side21">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side22">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side23" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side24" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side25" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side23">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Advanced Ui</a></li>
															<li><a class="slide-item" href="accordion.html">Accordion</a></li>
															<li><a class="slide-item" href="carousel.html">Carousel</a></li>
															<li><a class="slide-item" href="collapse.html">Collapse</a></li>
															<li><a class="slide-item" href="modals.html">Modals</a></li>
															<li><a class="slide-item" href="timeline.html">Timeline</a></li>
															<li><a class="slide-item" href="sweet-alert.html">Sweet Alert</a></li>
															<li><a class="slide-item" href="rating.html">Ratings</a></li>
															<li><a class="slide-item" href="counters.html">Counters</a></li>
															<li><a class="slide-item" href="search.html">Search</a></li>
															<li><a class="slide-item" href="userlist.html">Userlist</a></li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Blog-Pages</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="blog.html">Blog</a></li>
																	<li><a class="sub-side-menu__item" href="blog-details.html">Blog-Details</a></li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="tab-pane  tab-content-double" id="side24">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane  tab-content-double" id="side25">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="side-item side-item-category">Multi Levels</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg><span class="side-menu__label">Menu-levels</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side26" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side27" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side28" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side26">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Menu-Levels</a></li>
															<li><a class="slide-item" href="javascript:void(0);">Level-1</a></li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="javascript:void(0);">Level-2.1</a></li>
																	<li><a class="sub-side-menu__item" href="javascript:void(0);">Level-2.2</a></li>
																	<li class="sub-slide2">
																		<a class="sub-side-menu__item" data-bs-toggle="sub-slide2" href="javascript:void(0);"><span class="sub-side-menu__label">Level-2.3</span><i class="sub-angle2 fe fe-chevron-down"></i></a>
																		<ul class="sub-slide-menu1">
																			<li><a class="sub-slide-item2" href="javascript:void(0);">Level-2.3.1</a></li>
																			<li><a class="sub-slide-item2" href="javascript:void(0);">Level-2.3.2</a></li>
																			<li><a class="sub-slide-item2" href="javascript:void(0);">Level-2.3.3</a></li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side27">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side28">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="side-item side-item-category">COMPONENTS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg><span class="side-menu__label">Forms</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side29" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side30" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side31" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side29">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Forms</a></li>
															<li><a class="slide-item" href="form-elements.html">Form Elements</a></li>
															<li><a class="slide-item" href="form-advanced.html">Advanced Forms</a></li>
															<li><a class="slide-item" href="form-layouts.html">Form Layouts</a></li>
															<li><a class="slide-item" href="form-validation.html">Form Validation</a></li>
															<li><a class="slide-item" href="form-wizards.html">Form Wizards</a></li>
															<li><a class="slide-item" href="form-editor.html">WYSIWYG Editor</a></li>
															<li><a class="slide-item" href="form-sizes.html">Form-Sizes</a></li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side30">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side31">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side32" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side33" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side34" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side32">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Tables</a></li>
															<li><a class="slide-item" href="{{route('admin.partners.view')}}">partners</a></li>
 															<li><a  class="slide-item" href="{{route('admin.blogs.view')}}">Blog-Edit</a></li>
															<li><a  class="slide-item" href="{{route('admin.advertisement.view')}}">advertisement</a></li>
															<li><a  class="slide-item" href="{{route('admin.rating.view')}}">rating</a></li>
															<li><a  class="slide-item" href="{{route('admin.setting.view')}}"> setting   </a></li>
															<li><a  class="slide-item" href="{{route('admin.order.view')}}">orders</a></li>

														</ul>

														
														
													</div>
													<div class="tab-pane tab-content-double" id="side33">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side34">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>

													
												</div>
											</div>
										</li>
									</ul>
								</li>
								<!-- <li class="slide">
									<a class="side-menu__item" href="landing-page.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4.02C7.6 4.02 4.02 7.6 4.02 12S7.6 19.98 12 19.98s7.98-3.58 7.98-7.98S16.4 4.02 12 4.02zM11.39 19v-5.5H8.25l4.5-8.5v5.5h3L11.39 19z" opacity=".3"/><path d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm0 17.96c-4.4 0-7.98-3.58-7.98-7.98S7.6 4.02 12 4.02 19.98 7.6 19.98 12 16.4 19.98 12 19.98zM12.75 5l-4.5 8.5h3.14V19l4.36-8.5h-3V5z"/></svg><span class="side-menu__label">Landing Page</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" opacity=".3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side35" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side36" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side37" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side35">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Maps</a></li>
															<li><a class="slide-item" href="map-leaflet.html">Leaflet Maps</a></li>
															<li><a class="slide-item" href="map-vector.html">Vector Maps</a></li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side36">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side37">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="side-item side-item-category">Pages</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side38" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side39" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side40" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side38">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Pages</a></li>
															<li><a class="slide-item" href="profile.html">Profile</a></li>
															<li><a class="slide-item" href="editprofile.html">Edit-Profile</a></li>
															<li><a class="slide-item" href="about.html">About-Us</a></li>
 															<li><a class="slide-item" href="invoice.html">Invoice</a></li>
															<li><a class="slide-item" href="pricing.html">Pricing</a></li>
															<li><a class="slide-item" href="gallery.html">Gallery</a></li>
															<li><a class="slide-item" href="todotask.html">Todotask</a></li>
															<li><a class="slide-item" href="faq.html">Faqs</a></li>
															<li><a class="slide-item" href="empty.html">Empty Page</a></li>
															<li><a class="slide-item" href="Switcher-1.html">Switcher-1</a></li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Mail</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="mail.html">Mail</a></li>
																	<li><a class="sub-side-menu__item" href="mail-compose.html">Mail Compose</a></li>
																	<li><a class="sub-side-menu__item" href="mail-read.html">Read-mail</a></li>
																	<li><a class="sub-side-menu__item" href="mail-settings.html">mail-settings</a></li>
																	<li><a class="sub-side-menu__item" href="chat.html">Chat</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Ecommerce</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="products.html">Shop</a></li>
																	<li><a class="sub-side-menu__item" href="product-details.html">Product-Details</a></li>
																	<li><a class="sub-side-menu__item" href="product-cart.html">Cart</a></li>
																	<li><a class="sub-side-menu__item" href="check-out.html">Check-out</a></li>
																	<li><a class="sub-side-menu__item" href="wish-list.html">Wish-list</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Custom Pages</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="signin.html">Sign In</a></li>
																	<li><a class="sub-side-menu__item" href="signup.html">Sign Up</a></li>
																	<li><a class="sub-side-menu__item" href="forgot.html">Forgot Password</a></li>
																	<li><a class="sub-side-menu__item" href="reset.html">Reset Password</a></li>
																	<li><a class="sub-side-menu__item" href="lockscreen.html">Lockscreen</a></li>
																	<li><a class="sub-side-menu__item" href="underconstruction.html">UnderConstruction</a></li>
																	<li><a class="sub-side-menu__item" href="404.html">404 Error</a></li>
																	<li><a class="sub-side-menu__item" href="500.html">500 Error</a></li>
																	<li><a class="sub-side-menu__item" href="501.html">501 Error</a></li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side39">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side40">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
								<!-- <li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg><span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
 													<ul class="nav panel-tabs">
														<li><a href="#side41" class="active" data-bs-toggle="tab"><i class="fe fe-airplay"></i><p>Home</p></a></li>
														<li><a href="#side42" data-bs-toggle="tab"><i class="fe fe-package"></i><p>Events</p></a></li>
														<li><a href="#side43" data-bs-toggle="tab"><i class="fe fe-move"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side41">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Utilities</a></li>
															<li><a class="slide-item" href="background.html">Background</a></li>
															<li><a class="slide-item" href="border.html">Border</a></li>
															<li><a class="slide-item" href="display.html">Display</a></li>
															<li><a class="slide-item" href="flex.html">Flex</a></li>
															<li><a class="slide-item" href="height.html">Height</a></li>
															<li><a class="slide-item" href="margin.html">Margin</a></li>
															<li><a class="slide-item" href="padding.html">Padding</a></li>
															<li><a class="slide-item" href="position.html">Position</a></li>
															<li><a class="slide-item" href="width.html">Width</a></li>
															<li><a class="slide-item" href="extras.html">Extras</a></li>
														</ul>
													</div>
													<div class="tab-pane tab-content-double" id="side42">
														<h5 class="mt-3 mb-4 tx-16">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<small class="text-muted mb-2">20 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Anniversary Celebration</a></h6>
																	<small class="mb-2 text-muted">14 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<small class="mb-2 text-muted">13 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<small class="mb-2 text-muted">11 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<small class="mb-2 text-muted">09 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<small class="mb-2 text-muted">02 Feb, 2019</small>
																	<p class="tx-13">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side43">
														<h5 class="mt-3 mb-4 tx-16">Activity</h5>
														<div class="activity mt-3 p-0">
															<img src="../assets/img/users/8.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Samantha Melon</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/5.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/6.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Gabe Lackmen</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/7.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Abigail John</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/14.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Jiggel mossin</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="../assets/img/users/3.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Raven Chanan</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/1.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Anna Ogden</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="../assets/img/users/11.jpg" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0 tx-13"><b>Allie Grater</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li> -->
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->
			</div>