@extends('admin.public.admin')

@section('main')
<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="">用户管理</a></li>
		<li class="active">用户列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger">会员展示</button>
			<p class="pull-right tots" >共有 {{ $tot }} 条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover">
			<th>ID</th>
			<th>TEL</th>
			<th>EMAIL</th>
			<th>注册时间</th>
			<th>状态</th>

			@foreach($data as $value)
			<tr>
				<td>{{ $value -> id }}</td>
				<td>{{ $value -> tel }}</td>
				<td>{{ $value -> email }}</td>
				<td>{{ date('Y-m-d H:i:s', $value -> time) }}</td>
				@if($value -> status == 0)
					<td><span class="btn btn-primary">未激活</span></td>
				@elseif($value -> status == 1)
					<td><span class="btn btn-success">已激活</span></td>
				@else
					<td><span class="btn btn-danger">黑名单</span></td>
				@endif
			</tr>
			@endforeach

		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">
			{{ $data -> links() }}

		</div>
	</div>
</div>

@endsection