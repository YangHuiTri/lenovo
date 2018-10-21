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

			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<tr>
					<td><?php echo e($value->title); ?></td>
					<td>
						<img width="200px" src="/Uploads/goods/<?php echo e($value->img); ?>">
					</td>
					<td><?php echo e($value->price); ?></td>
					<td><?php echo e($value->num); ?></td>
					<td><?php echo e($value->price * $value->num); ?></td>

					<?php
						$number += $value->num;
						$money += $value->price * $value->num;
					?>
				</tr>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

			<tr>
				<td>合计</td>
				<td>价格：</td>
				<td><?php echo e($money); ?></td>
				<td>数量：</td>
				<td><?php echo e($number); ?></td>
			</tr>



		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">


		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>