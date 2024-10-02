<?php
/*

Template Name: Meet the Team Page

 */

get_header('');
?>

	<section class="p-0 position-relative">
		<div class="container-fluid overlay-img-holder">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/our-team.jpg" class="w-100" alt="Image of employees of Bedfont Scientific Ltd">
			<div class="overlay">
				<div class="col-12 col-md-6 mx-auto">
					<h1>Meet the Team</h1>
					<p>Bedfont® Scientific Ltd. creates leading-edge breath and gas analysis equipment. We not only aim to significantly improve quality of life, but to save it.</p>
				</div>
			</div>
		</div>
		<!--<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30px" viewBox="0 0 1280 140" preserveAspectRatio="none" style="position: absolute;bottom: 0;"><g fill="#fff"><path d="M1280 86c-19.9-17.21-40.08-39.69-79.89-39.69-57.49 0-56.93 46.59-115 46.59-53.61 0-59.76-39.62-115.6-39.62C923.7 53.27 924.26 87 853.89 87c-89.35 0-78.74-87-188.2-87C554 0 543.95 121.8 423.32 121.8c-100.52 0-117.84-54.88-191.56-54.88-77.06 0-100 48.57-151.75 48.57-40 0-60-12.21-80-29.51v54H1280z"></path></g></svg>-->
	</section>
	<section id="info_page">
		<div class="container">
			<div class="row m-0">
				<div class="col-12 col-lg-8">
					<h2 class="mb-5">The Bedfont<sup>®</sup> Family</h2>
					<p></p>
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="team-member">
								<img src="assets/img/team/trevor.png" alt="Trevor Smith" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Trevor Smith</h2>
									<h3>Chairman</h3>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="team-member">
								<img src="assets/img/team/jason.png" alt="Jason Smith" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Jason Smith</h2>
									<h3>Managing Director</h3>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="team-member">
								<img src="assets/img/team/andy.png" alt="Andy Smith" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Andy Smith</h2>
									<h3>Director</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row my-4 team-no-border">
						<div class="col-12 col-lg-6">
							<div class="team-member">
								<img src="assets/img/team/marketing.jpg" alt="Marketing Team" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Marketing Team</h2>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="team-member">
								<img src="assets/img/team/marketing.jpg" alt="Sales Team" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Sales Team</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row my-4 team-no-border">
						<div class="col-12 col-lg-6">
							<div class="team-member">
								<img src="assets/img/team/marketing.jpg" alt="Technical Team" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Technical Team</h2>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="team-member">
								<img src="assets/img/team/marketing.jpg" alt="Accounts Team" class="team-member-img img-fluid" />
								<div class="team-member-bio">
									<h2>Accounts Team</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php	include 'about-sidebar.php'; ?>
			</div>
		</div>
	</section>

<?php
get_footer('');