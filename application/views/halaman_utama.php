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

	<div class="uk-container uk-container-large uk-margin-medium-top">
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

	<div class="uk-container uk-container-large uk-margin-medium">
		<div class="uk-card uk-card-default uk-width-1-1">
			<div class="uk-card-header">
				<h3 class="uk-card-title">Section</h3>
			</div>
			<div class="uk-card-body">
				<!-- SearchBox -->
				<form class="uk-search uk-search-default uk-width-1-1">
					<span uk-search-icon></span>
					<input class="uk-search-input" type="search" placeholder="Cari">
				</form>
			</div>
			<div class="uk-card-footer">
				<!-- Katalog -->
				<div class="uk-child-width-1-5@m uk-child-width-1-3@s uk-grid-medium uk-text-center" uk-grid>
					<div class="uk-animation-toggle" tabindex="0">
						<div class="uk-card uk-card-default uk-card-hover uk-animation-shake">
							<div class="uk-card-media-top">
								<img src="assets/img/01.jpg" alt="">
							</div>
							<div class="uk-card-body">
								<div class="uk-card-title">
									<h3><a class="uk-link-heading" href="#modal-center" uk-toggle>Open</a>
									</h3>
								</div>
								
								<p><b>Rp. 1000</b></p>
								<p class="uk-text-meta uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								<?php $this->load->view('dynamic/info_katalog'); ?>
							</div>
						</div>
					</div>	
						
				</div>
			</div>
		</div>
	</div>

	<div class="uk-section uk-section-primary uk-light uk-height-max-medium">
		<div class="uk-container">
			<div class="uk-grid-match uk-child-width-1-3@m uk-text-center" uk-grid>
				<div>
					<h3>Section Secondary</h3>
					<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
				<div class="uk-divider-vertical">
					<h3>Section Secondary</h3>
					<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
				<div class="uk-divider-vertical">
					<h3>Section Secondary</h3>
					<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
			</div>
		</div>
	</div>


	<?php $this->load->view('partial/footer'); ?>
	<?php $this->load->view('partial/load_js'); ?>
</body>
</html>