<?php
require_once("./initialize.php");

//Header include
include(__ROOT__ . "/view/templates/header.php");

//Topbar include
include(__ROOT__ . "/view/templates/topbar.php");

?>

<section>
		<div class="feature-photo">
			<figure><img src="images/resources/timeline-4.jpg" alt=""></figure>
			<div class="add-btn">
				<span><?php echo $followersNumber ?> Abonnés</span>
				<!-- <a href="#" title="" data-ripple="">Add button</a> -->
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Changer photo de couverture
				<input type="file"/>
			</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="images/resources/user-avatar2.jpg" alt="">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Changer photo profil
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5><?php echo $userFullName ?></h5>
								  <span><?php echo $nickname ?></span>
								</li>
								<!-- <li>
									<a class="active" href="fav-page.html" title="" data-ripple="">Page</a>
									<a class="" href="notifications.html" title="" data-ripple="">Notifications</a>
									<a class="" href="inbox.html" title="" data-ripple="">inbox</a>
									<a class="" href="insights.html" title="" data-ripple="">insights</a>
									<a class="" href="fav-page.html" title="" data-ripple="">posts</a>
									<a class="" href="page-likers.html" title="" data-ripple="">likers</a>
								</li> -->
							</ul>
						</div>
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