<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="<?php echo base_url();?>theme/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>theme/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>theme/css/styles.css" rel="stylesheet">
 
</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="<?php echo base_url();?>index.php/login/cek_login" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div> 
							<input class="btn btn-primary" name="btnLogin" type="submit" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo base_url();?>theme/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>theme/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>theme/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>theme/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>theme/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>theme/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>theme/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
