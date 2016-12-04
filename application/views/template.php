<?php
/*	session_start();
	if(!isset($_SESSION['username'])){

	}
*/
	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Tables</title>

<link href="<?php echo base_url();?>theme/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>theme/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>theme/css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>theme/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url();?>theme/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Login sebagai</span>  
					<?php 
						if( $_SESSION['level']==1){
							echo "ADMIN";
						}elseif( $_SESSION['level']==2){
							echo $_SESSION['username'];
						}elseif( $_SESSION['level']==3){
							echo "PAKAR";
						}
					?>
				</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="login/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="<?php echo base_url();?>index.php/Prestasi_mhs">
				<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Mahasiswa</a>
			</li>
			<li ><a href="<?php echo base_url();?>index.php/Data_Mahasiswa">
				<svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Data Mahasiswa</a>
			</li>
			<li><a href="<?php echo base_url();?>index.php/Data_Prestasi">
				<svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Data Prestasi</a>
			</li>
			<li><a href="<?php echo base_url();?>index.php/Verifikasi">
				<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Verifikasi</a>
			</li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			</ol>
		</div><!--/.row-->


		<?php
			$this->load->view($konten);
		?>
		
		
	</div><!--/.main-->

	<script src="<?php echo base_url();?>theme/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>theme/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>theme/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>theme/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>theme/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>theme/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>theme/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>theme/js/bootstrap-table.js"></script>
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
