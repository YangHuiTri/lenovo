@extends('admin.public.admin')

@section('main')

<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">分类管理</a></li>
		<li class="active">分类添加</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="index.html" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 分类页面</a>
			<a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加分类</a>
			
			


		</div>
		<div class="panel-body">
			<form action="/admin/types" method="post">
				<div class="form-group">
					<label for="">分类名</label>
					{{csrf_field()}}
					<input type="text" name="name" class="form-control" id="" placeholder="请输入分类名">
					<input type="hidden" name="pid" value="<?php echo isset($_GET['pid']) ? $_GET['pid'] : 0;?>">
					<input type="hidden" name="path" value="<?php echo isset($_GET['path']) ? $_GET['path'] : '0,';?>">
				</div>

				<div class="form-group">
					<label for="">TITLE</label>
					<input type="text" name="title" class="form-control" id="" placeholder="请输入TITLE">
				</div>

				<div class="form-group">
					<label for="">KEYWORD</label>
					<input type="text" name="keywords" class="form-control" id="">
				</div>

				<div class="form-group">
					<label for="">DESCRIPTION</label>
					<input type="text" name="description" class="form-control" id="">
				</div>

				<div class="form-group">
					<label for="">SORT</label>
					<input type="text" name="sort" class="form-control" id="">
				</div>

				<div class="form-group">
					<label for="">是否楼层</label>
					<br>
					<input type="radio" name="is_lou" value="1" id="">是
					<input type="radio" name="is_lou" checked value="0" id="">否
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