@extends('admin.public.admin')

@section('main')
<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">管理员管理</a></li>
		<li class="active">管理员列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
			<!-- <a href="/admin/admin/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a> -->
			<a href="javascript:;" data-toggle="modal" data-target="#add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a>
			
			<p class="pull-right tots" >共有 10 条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover">
			<th><input type="checkbox" name="" id=""></th>
			<th>ID</th>
			<th>NAME</th>
			<th>PASS</th>
			<th>上次登录时间</th>
			<th>状态</th>
			<th>操作</th>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>1</td>
				<td>name1</td>
				<td>pass1</td>
				<td>2016-10-10 10:10:10</td>
				<td><span class="btn btn-success">开启</span></td>
				<td><a href="/admin/admin/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="" class="glyphicon glyphicon-trash"></a></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>1</td>
				<td>name1</td>
				<td>pass1</td>
				<td>2016-10-10 10:10:10</td>
				<td><span class="btn btn-success">开启</span></td>
				<td><a href="/admin/admin/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="" class="glyphicon glyphicon-trash"></a></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>1</td>
				<td>name1</td>
				<td>pass1</td>
				<td>2016-10-10 10:10:10</td>
				<td><span class="btn btn-success">开启</span></td>
				<td><a href="/admin/admin/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="" class="glyphicon glyphicon-trash"></a></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>1</td>
				<td>name1</td>
				<td>pass1</td>
				<td>2016-10-10 10:10:10</td>
				<td><span class="btn btn-success">开启</span></td>
				<td><a href="/admin/admin/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="" class="glyphicon glyphicon-trash"></a></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>1</td>
				<td>name1</td>
				<td>pass1</td>
				<td>2016-10-10 10:10:10</td>
				<td><span class="btn btn-success">开启</span></td>
				<td><a href="/admin/admin/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="" class="glyphicon glyphicon-trash"></a></td>
			</tr>

		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">
			<nav style="text-align:center;">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</nav>

		</div>
	</div>
</div>

<!-- 添加页面的摸态框 -->
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">添加管理员</h4>
			</div>
			<div class="modal-body">
				<form action="" onsubmit="return false;" id="formAdd">
					<div class="form-group">
						<label for="">用户名</label>
						<input type="text" name="name" class="form-control" placeholder="请输入原密码" id="name">
					</div>
					<div class="form-group">
						<label for="">密码</label>
						<input type="password" name="pass" class="form-control" placeholder="请输入新密码" id="pass">
					</div>
					<div class="form-group">
						<label for="">确认密码</label>
						<input type="password" name="repass" class="form-control" placeholder="请再次输入密码" id="repass">
					</div>
					<div class="form-group">
						<label for="">状态</label>
						<br>
						<input type="radio" name="status" checked value="0">正常
						<input type="radio" name="status" value="1">禁用
					</div>
					<div class="form-group pull-right">
						<input type="submit" value="提交" onclick="add()" class="btn btn-success">
						<input type="reset" id="reset" value="重置" class="btn btn-danger">
					</div>

					<div style="clear:both"></div>
				</form>
			</div>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	//添加的处理操作
	function add(){
		//表单序列化

		var str = $('#formAdd').serialize();

		$.post('/admin/admin',{str:str,'_token':'{{csrf_token()}}'},function(data){
			if(data){
				$(".close").click();

				//重置表单
				$('#reset').click();
			}else{

			}
		});
	}
</script>

@endsection