@extends('layouts.main')

@section('content')
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
              新增客户单位 <small>客户单位管理</small>
            </h3>
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="{{url('/home')}}">首页</a> 
                <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">新增客户单位</a></li>
              <li class="pull-right no-text-shadow">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                  <i class="icon-calendar"></i>
                  <span></span>
                  <i class="icon-angle-down"></i>
                </div>
              </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
          </div>
        </div>
        <!-- END PAGE HEADER-->


<!--main-container-part-->
<div id="content">


<!--Action boxes-->
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>新建客户单位</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/createcompanystore" method="post" class="form-horizontal">
          {{ csrf_field() }}
            <div class="control-group">
              <label class="control-label">单位名称</label>
              <div class="controls">
                <input type="text" name="companyname" class="span11" placeholder="请输入单位名称" />
              </div>
            </div>

            <!--
            <div class="control-group">
              <label class="control-label">上级单位</label>
              <div class="controls">
                <select >
                  
                  @foreach ($companies as $company)
                    <option>{{ $company->id }}</option>
                    
                  @endforeach

                </select>
              </div>
            </div>
-->
            <div class="control-group">
              <label class="control-label">注册地址</label>
              <div class="controls">
                <input type="text" name="registeredaddress" class="span11" placeholder="请输入注册地址" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">描述</label>
              <div class="controls">
                <input type="text" name="description" class="span11" placeholder="单位描述"  />
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">创建</button>
            </div>
          </form>
        </div>
      </div>
    
  </div>
  <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>序号</th>
                  <th>单位名称</th>
                  <th>注册地址</th>
                  <th>描述</th>
                </tr>
              </thead>
              <tbody>
              @if (count($companies) > 0)
                <tr class="gradeX">
                @foreach ($companies as $company)
                  <td class="center">{{ $company->id }}</td>
                  <td>{{ $company->companyname }}</td>
                  <td>{{ $company->registeredaddress }}</td>
                  <td>{{ $company->description }}</td>
                @endforeach
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
  </div>
</div>
</div>

<!--end-main-container-part-->
@endsection
