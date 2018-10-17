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
			<button class="btn btn-danger">订单展示</button>
			<p class="pull-right tots" >共有  条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover">
			<th>订单号</th>
			<th>用户</th>
			<th>收货人信息</th>
			<th>状态</th>
			<th>操作</th>

			@foreach($data as $value)
				<tr>
					<td><a href="/admin/orders/list?code={{$value->code}}">{{$value->code}}</a></td>
					<td>{{$value->name}}</td>
					<td>
						<a href="/admin/orders/addr?id={{$value->aid}}">收货人信息</a>
					</td>
					<td>{{$value->ssname}}</td>
					<td>修改状态</td>
				</tr>

			@endforeach



		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">


		</div>
	</div>
</div>

@endsection