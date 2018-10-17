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
			<th>商品名</th>
			<th>商品图片</th>
			<th>购买价格</th>
			<th>购买数量</th>
			<th>小计</th>

			<?php
				$number = 0;
				$money = 0;
			?>

			@foreach($data as $value)
				<tr>
					<td>{{$value->title}}</td>
					<td>
						<img width="200px" src="/Uploads/goods/{{$value->img}}">
					</td>
					<td>{{$value->price}}</td>
					<td>{{$value->num}}</td>
					<td>{{$value->price * $value->num}}</td>

					<?php
						$number += $value->num;
						$money += $value->price * $value->num;
					?>
				</tr>

			@endforeach

			<tr>
				<td>合计</td>
				<td>价格：</td>
				<td>{{$money}}</td>
				<td>数量：</td>
				<td>{{$number}}</td>
			</tr>



		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">


		</div>
	</div>
</div>

@endsection