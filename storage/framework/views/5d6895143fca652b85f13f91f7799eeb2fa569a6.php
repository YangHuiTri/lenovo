<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
	<link rel="stylesheet" href="/style/admin/bs/css/bootstrap.css">
	<script src="/style/admin/bs/js/jquery.min.js"></script>
	<script src="/style/admin/bs/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				
				<div class="panel panel-primary">
					<div class="panel-heading">
						联想注册页面
					</div>
					<div class="panel-body">

					
					 	<?php if(isset($error)): ?>
							<div class="alert alert-danger"><?php echo e($error); ?></div>

						<?php endif; ?>


						<form action="/regCheck" method="post">
							<div class="form-group">
								<?php echo e(csrf_field()); ?>

								<label for="">EMAIL</label>
								<input class="form-control" type="text" name="email">
							</div>
							<div class="form-group">
								<label for="">PASS</label>
								<input class="form-control" type="password" name="pass">
							</div>
							<div class="form-group">
								<label for="">REPASS</label>
								<input class="form-control" type="password" name="repass">
							</div>
							<div class="form-group">
								<label for="">CODE</label>
								<input class="form-control" type="text" name="code">
								<img src="/yzm" onclick="this.src='/admin/yzm?m'+Math.random()">
							</div>

							<div class="form-group">
								<input type="submit" class="btn btn-success" value="注册">
								<input type="rest" class="btn btn-danger" value="重置">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>