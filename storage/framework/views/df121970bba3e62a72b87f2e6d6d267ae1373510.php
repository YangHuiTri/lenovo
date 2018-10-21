<?php $__env->startSection('main'); ?>
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
			<th>下单时间</th>
			<th>操作</th>

			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<tr>
					<td><a href="/admin/orders/list?code=<?php echo e($value->code); ?>"><?php echo e($value->code); ?></a></td>
					<td><?php echo e($value->name); ?></td>
					<td>
						<a href="/admin/orders/addr?id=<?php echo e($value->aid); ?>">收货人信息</a>
					</td>
					<td><?php echo e($value->ssname); ?></td>
					<td><?php echo e(date('Y-m-d H:i:s',$value->time)); ?></td>
					<td>
						<?php if($value->sid == 6): ?>
							<a href="javascript:;" style="text-decoration: none">修改状态</a>
						<?php else: ?>
							<a href="/admin/orders/edit?sid=<?php echo e($value->sid); ?>&code=<?php echo e($value->code); ?>">修改状态</a>
						<?php endif; ?>
					</td>
				</tr>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>



		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">


		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>