<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo admin_url('admin/edit/' . $login->id); ?>">Xin chào: <?php echo $login->name; ?></a>
			<a class="navbar-brand pull-right" id="logout" href="<?php echo admin_url('admin/logout'); ?>">Đăng xuất <i class="fa fa-sign-out"></i></a>
		</div>

	</div><!-- /.container-fluid -->
</nav>