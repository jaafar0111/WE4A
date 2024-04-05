<?php
require_once("../initialize.php");

//Header include
include(__ROOT__ . "/view/templates/header.php");

//Topbar include
include(__ROOT__ . "/view/templates/topbar.php");

?>

<section>
		<div class="gap2 color-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-banner">
							<i><img src="images/faq.png" alt=""></i>
							<h1>Foire Aux Questions</h1>
						</div>
						<nav class="breadcrumb">
						  <a class="breadcrumb-item" href="index-2.html">Accueil</a>
						  <span class="breadcrumb-item active">FAQ</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

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

						<div class="col-lg-9">

							<!-- content -->
							<?php echo $pageContent; ?>

						</div><!-- centerl meta -->

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