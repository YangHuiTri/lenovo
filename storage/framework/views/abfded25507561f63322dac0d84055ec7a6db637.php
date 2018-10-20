<?php $__env->startSection('main'); ?>
<!-- 内容 -->
<div class="col-md-10">
	
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="">分类管理</a></li>
		<li class="active">分类列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
			<a href="/admin/types/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加分类</a>
			
			<p class="pull-right tots" >共有 10 条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容" id="">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover">
			<th><input type="checkbox" name="" id=""></th>
			<th>ID</th>
			<th>NAME</th>
			<th>Title</th>
			<th>KeyWord</th>
			<th>Description</th>
			<th>添加子类</th>
			<th>楼层</th>
			<th>操作</th>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td><?php echo e($value->id); ?></td>
				
				<?php
				$arr = explode(",", $value->path);
				$tot = count($arr) - 2;

				?>


				<td><?php echo e(str_repeat("|====",$tot)); ?><?php echo e($value->name); ?></td>
				<td><?php echo e($value->title); ?></td>
				<td><?php echo e($value->keywords); ?></td>
				<td><?php echo e($value->description); ?></td>
				<?php if($tot >= 2): ?>
					<td><a href="javascript:;">添加子类</a></td>
				<?php else: ?>
					<td><a href="/admin/types/create?pid=<?php echo e($value->id); ?>&path=<?php echo e($value->path); ?><?php echo e($value->id); ?>,">添加子类</a></td>
				<?php endif; ?>
				

				<?php if($value->is_lou): ?>
					<td><span class="btn btn-success">是</span></td>
				<?php else: ?>
					<td><span class="btn btn-danger">否</span></td>	
				<?php endif; ?>
				<td><a href="/user/admin/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="del(<?php echo e($value->id); ?>)" class="glyphicon glyphicon-trash"></a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

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


<script>
	//删除数据
	function del(id){
		if(confirm("您确认要删除吗？")){
			// 发送post请求
			$.post('/admin/types/'+id,{'_token':'<?php echo e(csrf_token()); ?>','_method':'delete'},function(data){
				if(data == 1){
					window.location.reload();
				}else{

				}
			});			
		}

	}


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>