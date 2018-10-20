<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改页面</title>
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
						联想修改页面
					</div>
					<div class="panel-body">

						<form action="" method="post">
							<?php echo e(csrf_field()); ?>

								
							<div class="form-group">
								<label for="">PASS</label>
								<input class="form-control" type="password" name="pass" id="">
							</div>
							<div class="form-group">
								<label for="">REPASS</label>
								<input class="form-control" type="password" name="repass" id="">
							</div>
							

							<div class="form-group">
								<input type="submit" class="btn btn-success" value="修改">
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