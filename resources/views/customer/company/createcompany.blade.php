@extends('layouts.main')

@section('content')
						<h3 class="page-title">
							客户管理
							 <small>客户单位管理</small>
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
								<a href="#">客户单位管理</a>
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="#">新增客户单位</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">

		
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>新增客户单位</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="/createcompanystore" class="form-horizontal">
											{{ csrf_field() }}
												<h3 class="form-section">客户信息</h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">单位名称</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="请输入客户单位名称">
																<span class="help-block">中英文字符</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">上级公司</label>
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

												<h3 class="form-section">地址</h3>
												<!--/row-->                   
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label">注册地址</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" >
															</div>
														</div>
													</div>
												</div>

												<!--/row-->           
												<div class="row-fluid">
										

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