@extends('admin.public.admin')

@section('main')
<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="">订单管理</a></li>
		<li class="active">订单列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger">订单详情</button>



		</div>
		<table class="table-bordered table table-hover">
			<tr>
				<td>姓名</td>
				<td>{{$data->sname}}</td>
			</tr>
			<tr>
				<td>电话</td>
				<td>{{$data->stel}}</td>
			</tr>
			<tr>
				<td>所在省市</td>
				<td>{{$data->addr}}</td>
			</tr>
			<tr>
				<td>详细信息</td>
				<td>{{$data->addrInfo}}</td>
			</tr>

			<tr>
				<td>邮箱</td>
				<td>{{$data->email}}</td>
			</tr>
			
		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">


		</div>
	</div>
</div>

@endsection