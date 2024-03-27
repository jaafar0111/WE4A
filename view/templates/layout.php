<?php
include("./initialize.php");

//Header include
include(__ROOT__ . "/view/templates/header.php");

//Topbar include
include(__ROOT__ . "/view/templates/topbar.php");

?>

<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						<div class="col-lg-3">
							<aside class="sidebar static">
								<!-- MENU Include -->
								<?php include(__ROOT__ . "/view/templates/left-sidebar.php"); ?>

							</aside>
						</div><!-- sidebar -->

						<div class="col-lg-6">

							<!-- content -->
							<?php echo $content; ?>

						</div><!-- centerl meta -->

						<div class="col-lg-3">
							<aside class="sidebar static">
								<!-- OWNER PAGE BLOC -->
								<?php include(__ROOT__ . "/view/templates/right-sidebar.php"); ?>

							</aside>
						</div><!-- sidebar -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
//Footer include
include(__ROOT__ . "/view/templates/footer.php");
?>