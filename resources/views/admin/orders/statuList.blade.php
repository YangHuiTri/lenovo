@extends('admin.public.admin')

@section('main')

<style>
	.queren{
		display:none;
	}
</style>
<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="">订单管理</a></li>
		<li class="active">订单状态列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger">订单状态展示</button>
			<p class="pull-right tots" >共有 <span>{{count($data)}}</span> 条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover">
			<th>ID</th>
			<th>订单状态名</th>

			@foreach($data as $val)
				<tr>
					<td>{{$val->id}}</td>
					<td><input type="text" value="{{$val->name}}"> <button onclick="save(this,{{$val->id}})" class="btn btn-success queren">确认</button></td>
				</tr>

			@endforeach





		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">


		</div>
	</div>
</div>

<script>
	//数据修改
	function save(obj, id){
		//获取用户输入的状态信息
		var name = $(obj).prev("input").val();
		//发送ajax骑牛
		$.post('/admin/orders/statu/edit',{'id':id,'name':name,'_token':'{{csrf_token()}}'},function(data){
			if(data){
				$(obj).hide();
			}else{
				alert('修改失败');
			}
		});
	}

	// 鼠标移入确认按钮展示
	$("input[type=text]").focus(function(){
		$(".queren").hide();

		$(this).next("button").show();
	});


</script>

@endsection