
@extends('back.leyauts.master')
@section('content')


		<!-- Main content -->
		<section class="content">
			<div class="row">					
				<div class="col-12 col-xl-4">
					<div class="box">		
						<div class="box-header no-border">
							<h4 class="box-title">Overview</h4>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#" class="btn btn-success-light px-10 base-font">Export</a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body px-0">	
							<div class="overflow-h" style="height: 339px;">								
								<div id="revenue7" class="text-dark"></div>
							</div>
						</div>
						<div class="box-body py-0">	
							<div class="row">
								<div class="col-6">
									<div class="d-flex align-items-center mb-30">
										<div class="mr-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
											  <span class="icon-Library font-size-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-primary mb-1 font-size-16">Project Briefing</a>
											<span class="text-fade">Project Manager</span>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="d-flex align-items-center mb-30">
										<div class="mr-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Write font-size-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-danger mb-1 font-size-16">Concept Design</a>
											<span class="text-fade">Art Director</span>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="d-flex align-items-center mb-30">
										<div class="mr-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Group-chat font-size-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-success mb-1 font-size-16">Functional</a>
											<span class="text-fade">Lead Developer</span>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="d-flex align-items-center mb-30">
										<div class="mr-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Attachment1 font-size-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-info mb-1 font-size-16">Development</a>
											<span class="text-fade">DevOps</span>
										</div>
									</div>
								</div>
							</div>
						</div>										
					</div>
				</div>
				<div class="col-xl-4 col-12">
				  <div class="box">		
					<div class="box-header no-border">
						<h4 class="box-title">Revenue Overview</h4>
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="btn btn-success-light px-10 base-font">Export</a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
					</div>
					 
					<div class="box-body p-0">
						<div id="revenue6" class="text-dark"></div>						
					</div>						
					<div class="box-body pt-0">						
						<div class="d-flex align-items-center mb-20">
							<div class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
								  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
							</div>
							<div class="d-flex flex-column flex-grow-1 mr-2 font-weight-500">
								<a href="#" class="text-dark hover-primary mb-1 font-size-16">Duis faucibus lorem</a>
								<span class="text-fade">Pharetra, Nulla , Nec, Aliquet</span>
							</div>
							<span class="badge badge-xl badge-light"><span class="font-weight-600">+125$</span></span>
						</div>
						<div class="d-flex align-items-center mb-20">
							<div class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
								  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
							</div>
							<div class="d-flex flex-column flex-grow-1 mr-2 font-weight-500">
								<a href="#" class="text-dark hover-danger mb-1 font-size-16">Mauris varius augue</a>
								<span class="text-fade">Pharetra, Nulla , Nec, Aliquet</span>
							</div>
							<span class="badge badge-xl badge-light"><span class="font-weight-600">+125$</span></span>
						</div>
						<div class="d-flex align-items-center">
							<div class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
								  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
							</div>
							<div class="d-flex flex-column flex-grow-1 mr-2 font-weight-500">
								<a href="#" class="text-dark hover-success mb-1 font-size-16">Aliquam in magna</a>
								<span class="text-fade">Pharetra, Nulla , Nec, Aliquet</span>
							</div>
							<span class="badge badge-xl badge-light"><span class="font-weight-600">+125$</span></span>
						</div>
					</div>										
				</div>
				  <div class="box">
					<div class="box-body d-flex align-items-center pb-0">
						<div class="d-flex flex-column flex-grow-1">
							<a href="#" class="box-title text-muted h4 mb-2 hover-primary">New Agent</a>
							<span class="font-weight-400 text-fade">Rising Stars</span>
						</div>
						<img src="{{asset('admin/')}}/images/avatar/avatar-2.png" alt="" class="align-self-end h-100">
					</div>
				  </div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Orders Overview</h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-12">
									<div id="charts_widget_1_chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="box box-body ull-up">
					  <div class="flexbox align-items-end">
						<div>
							<span class="font-size-30 countnm">7591</span>
					  		<h6 class="text-uppercase text-dark-50 mb-0">Total User</h6>
						</div>
						  <span class="icon-User font-size-80 text-info"><span class="path1"></span><span class="path2"></span></span>
					  </div>
					</div>
				</div>
							
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-400 mb-0">8,958</h3>
								<span class="badge badge-primary badge-pill align-self-center ml-auto">+22,6%</span>
							</div>
							<div>
								User online
								<div class="font-size-16">854 avg</div>
							</div>
						</div>
						<div class="chart">
							<div id="spark1"></div>
						</div>
					</div>
				</div>			
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-400 mb-0">9,854</h3>
								<span class="badge badge-warning badge-pill align-self-center ml-auto">+22,6%</span>
							</div>
							<div>
								Orders Monthly
								<div class="font-size-16">6,854 avg</div>
							</div>
						</div>
						<div class="chart">
							<div id="spark2"></div>
						</div>
					</div>
				</div>			
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-400 mb-0">3,952</h3>
							</div>
							<div>
								User Monthly
								<div class="font-size-16">9,758 avg</div>
							</div>
						</div>
						<div class="chart">
							<div id="spark3"></div>
						</div>
					</div>
				</div>			
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-400 mb-0">85.4%</h3>
							</div>
							<div>
								Current server loading
								<div class="font-size-16">85.6% avg</div>
							</div>
						</div>
						<div class="chart">
							<div id="spark4"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Trending Items</h4>						
						</div>
						<div class="box-body p-0">
							<div class="table-responsive">
								<table class="table no-border table-vertical-center mb-20">
									<thead>
										<tr>
											<th class="p-0" style="width: 50px"></th>
											<th class="p-0" style="min-width: 150px"></th>
											<th class="p-0" style="min-width: 140px"></th>
											<th class="p-0" style="min-width: 120px"></th>
											<th class="p-0" style="min-width: 40px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-primary-light">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Phasellus venenatis nisi</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-warning-light">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Aliquam in magna</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-success-light">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Duis faucibus lorem</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-danger-light">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/adminto-template/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Duis faucibus lorem</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-warning-light">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Overview</h4>
							<div id="stacked-column" class="h-400"></div>
						</div>
					</div>
				</div>
			</div>
        </section>


      
       






        
        @endsection


        @section('script')
        <script src="{{asset('admin/')}}/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
        <script src="{{asset('admin/')}}/assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
        <script src="{{asset('admin/admin1/')}}/js/pages/dashboard3.js"></script>
        @endsection

