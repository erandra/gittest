<?php
	session_start();		
	if(empty($_SESSION['username'])){
		redirect('login');
	}
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
				<a class="navbar-brand" href="#"><span>Selamat Datang</span> <?php echo $_SESSION['nama']; ?>
				</a>

				<ul class="user-menu">
					
						<span>Login Sebagai 
							<?php 
								if( $_SESSION['level']==1){
									echo "ADMIN";
								}elseif( $_SESSION['level']==2){
									echo "Mahasiswa";
								}elseif( $_SESSION['level']==3){
									echo "PAKAR";
								}
							?>
						</span>
						
					<span><a href="<?php echo base_url();?>index.php/login/logout"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></span>
				
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="<?php echo base_url();?>index.php/Prestasi_mhs">
				<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Mahasiswa</a>
			</li>
			<li><a href="<?php echo base_url();?>index.php/Profile_mahasiswa">
				<svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Profile</a>
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
