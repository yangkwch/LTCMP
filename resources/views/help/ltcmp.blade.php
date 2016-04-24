@extends('layouts.main')

@section('content')

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a> <a href="#">帮助</a> <a href="#" class="current">关于LT-CMP</a> </div>
    <h1>关于LT-CMP</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>朗天通讯合同管理系统 LT-CMP</h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h3>朗天通讯合同管理系统</h3>
              <p>版本v0.01</p>
              <p>联系方式：yangkwch@163.com</p>
              <a class="btn btn-warning btn-big"  href="{{ url('/home') }}">返回首页</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--end-main-container-part-->
@endsection
