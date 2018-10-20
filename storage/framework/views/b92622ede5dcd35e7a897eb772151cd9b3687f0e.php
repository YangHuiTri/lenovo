<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>找回密码页面</title>
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
						联想找回密码页面
					</div>
					<div class="panel-body">

						<form action="/zhaohui" method="post">
							<div class="form-group">
								<?php echo e(csrf_field()); ?>

								<label for="">EMAIL</label>
								<input class="form-control" type="text" name="email" id="">
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="找回">
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