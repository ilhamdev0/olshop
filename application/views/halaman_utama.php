<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partial/tag_head'); ?>
	<title>Judul</title>
</head>
<body style="background-color: #eee">
	<?php $this->load->view('partial/header'); ?>

	<div class="uk-container uk-container-large">
		<!-- Slideshow -->
		<div class="uk-width-3-4 uk-margin-auto uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; autoplay: true; autoplay-interval: 2000">
			<ul class="uk-slideshow-items">
				<li>
					<img src="assets/img/01.jpg" alt="" uk-cover>
				</li>
				<li>
					<img src="assets/img/02.jpg" alt="" uk-cover>
				</li>
				<li>
					<img src="assets/img/03.jpg" alt="" uk-cover>
				</li>
			</ul>
	
			<!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a> -->
		</div>
	</div>

	<div class="uk-container uk-container-large uk-margin-medium-top">
		<div class="uk-card uk-card-default uk-width-1-1">
			<div class="uk-card-header">
				<h3 class="uk-card-title">Section</h3>
			</div>
			<div class="uk-card-body">
				<!-- SearchBox -->
				<form class="uk-search uk-search-default">
					<span uk-search-icon></span>
					<input class="uk-search-input" type="search" placeholder="Cari">
				</form>
			</div>
			<div class="uk-card-footer">
				<!-- Katalog -->
				<div class="uk-child-width-1-4@l uk-grid-large uk-text-center" uk-grid>
					<div>
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<img src="assets/img/01.jpg" alt="">
							</div>
							<div class="uk-card-body">
								<h3 class="uk-card-title">Laptop A</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>	
					<div>
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<img src="assets/img/02.jpg" alt="">
							</div>
							<div class="uk-card-body">
								<h3 class="uk-card-title">Laptop A</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>	
					<div>
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<img src="assets/img/03.jpg" alt="">
							</div>
							<div class="uk-card-body">
								<h3 class="uk-card-title">Laptop A</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>	
					<div>
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<img src="assets/img/01.jpg" alt="">
							</div>
							<div class="uk-card-body">
								<h3 class="uk-card-title">Laptop A</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>


	<!-- <?php $this->load->view('partial/footer'); ?> -->
	<?php $this->load->view('partial/load_js'); ?>
</body>
</html>