@extends('layouts.main')

@section('content')
						<h3 class="page-title">
							客户管理
							 <small>客户联系人管理</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="{{url('/home')}}">首页</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">客户管理</a>
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">客户联系人管理</a>
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="#">新增客户联系人</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">

		
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>新增客户联系人</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal">
												<h3 class="form-section">Person Info</h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">First Name</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="Chee Kin">
																<span class="help-block">This is inline help</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group error">
															<label class="control-label">Last Name</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="Lim">
																<span class="help-block">This field has error.</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Gender</label>
															<div class="controls">
																<select class="m-wrap span12">
																	<option value="">Male</option>
																	<option value="">Female</option>
																</select>
																<span class="help-block">Select your gender.</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Date of Birth</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->        
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Category</label>
															<div class="controls">
																<select class="span12 select2_category"  data-placeholder="Choose a Category" tabindex="1">
																	<option value=""></option>
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Membership</label>
															<div class="controls">                                                
																<label class="radio">
																<input type="radio" name="optionsRadios2" value="option1" />
																Free
																</label>
																<label class="radio">
																<input type="radio" name="optionsRadios2" value="option2" checked />
																Professional
																</label>  
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Address</h3>
												<!--/row-->                   
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label">Street</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" >
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">City</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >State</label>
															<div class="controls">
																<input type="text"  class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->           
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Post Code</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Country</label>
															<div class="controls">
																<select class="m-wrap span12">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->                
										</div>
									</div>
								
							
						
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
@endsection