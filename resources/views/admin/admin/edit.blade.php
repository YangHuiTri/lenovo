@extends('admin.public.admin')

@section('main')

<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">用户管理</a></li>
		<li class="active">管理员修改</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="index.html" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 管理员页面</a>
			<a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 修改管理员</a>
			
			


		</div>
		<div class="panel-body">
			<form action="">
				<div class="form-group">
					<label for="">User</label>
					<input type="text" name="" class="form-control" id="">
				</div>

				<div class="form-group">
					<label for="">PASS</label>
					<input type="password" name="" class="form-control" id="">
				</div>

				<div class="form-group">
					<input type="submit" value="提交" class="btn btn-success">
					<input type="reset" value="重置" class="btn btn-danger">
				</div>

			</form>
		</div>
		
	</div>
</div>

@endsection