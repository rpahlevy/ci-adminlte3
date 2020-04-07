<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('_partials/head') ?>
</head>

<body class="hold-transition layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?php // $this->load->view('_partials/navbar') 
		?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php // $this->load->view('_partials/sidebar_main.php') 
		?>

		<!-- Content Wrapper. Contains page content -->
		<div class="py-5">
			<!-- Main content -->
			<section class="content">
				<div class="error-page">
					<h2 class="headline text-warning"> 404</h2>

					<div class="error-content pt-3">
						<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

						<p>
							We could not find the page you were looking for.
							Meanwhile, you may <a href="<?= base_url() ?>">return to dashboard</a>.
						</p>
					</div>
					<!-- /.error-content -->
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php // $this->load->view('_partials/footer.php') ?>

		<!-- Control Sidebar -->
		<?php // $this->load->view('_partials/sidebar_control.php') 
		?>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php $this->load->view('_partials/js.php') ?>
</body>

</html>