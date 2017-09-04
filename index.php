<?php get_header(); ?>

<section class="hero">
	<div class="container">
		<div class="">
			<div class="hero-inner">
				<div class=" text-center">
					<h1 class="display-3">Web <span class="typewrite" data-period="2000" data-type='[ "Developer", "Designer", "Dev Zim" ]' class="wrap"></span></h1>

					<div>
						<h2>Web Marketing Strategist</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="body">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar sticky-top navbar-expand-sm justify-content-between">
				  <a class="navbar-brand" href="#">Web Dev Zim</a>

				  <div >
				    <ul class="navbar-nav">
				      <li class="">
				        <a class="" href="#"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;(805) 720 - 2867 <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="">
				        <a class="" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;webdevzim@gmail.com</a>
				      </li>
				    </ul>
				    </div>
				</nav>
				<div class="body-inner">
					<div class="services">
						<h2>My Services</h2>
						<div class="row">

							<div class="col-6">
								<div class="list-group" id="list-tab" role="tablist">

									<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
										Coder
									</a>

									<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
										Marketing Automation Tools
									</a>

									<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
										Web Analytics Tools
									</a>

									<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
										Payment Gateways
									</a>

									<a class="list-group-item list-group-item-action" id="list-seo-list" data-toggle="list" href="#list-seo" role="tab" aria-controls="settings">
										SEO and SEM
									</a>
								</div>
							</div>
							<div class="col-6">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

										Coder
										<ul>
											<li>HTML/CSS</li>

											<li>JavaScript/jQuery</li>

											<li>PHP</li>
											<li>WordPress</li>
											<li>JSON</li>
											<li>AJAX</li>
											<li>Bootstrap</li>
										</ul>

									</div>
									<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

										Marketing Automation Tools
										<ul>
											<li>Marketo</li>
											<li>Salesforce</li>
											<li>Mailchimp</li>
											<li>AdRoll</li>
										</ul>



									</div>
									<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

										Web Analytics Tools
										<ul>
											<li>Google Analytics</li>
											<li>Google Tag Manager</li>
											<li>Optimizely</li>
											<li>Hotjar</li>
										</ul>

										Track events and measure website performance with any of these tools.

									</div>
									<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

										Payment Gatewys
										<ul>
											<li>Stripe</li>
											<li>Paypal</li>
										</ul>

										Create ways to allow users pay for products on your website.

									</div>

									<div class="tab-pane fade" id="list-seo" role="tabpanel" aria-labelledby="list-seo-list">

										SEO and SEM
										<ul>
											<li>Schema.org</li>
											<li>Google Search Console</li>
											<li>Rich Snippets</li>
											<li>Google AdWords</li>
										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="">
						<?php get_template_part('partials/portfolio'); ?>
					</div>
					<div class="">
						<?php get_template_part('partials/quote'); ?>
					</div>

				</div>
				<footer>
					<ul>
						<li>
							<p>&copy; <?php echo date('Y');  ?> <a href="/">Web Dev Zim</a></p>
						</li>
						<li>
							<a href=""><i class="fa fa-phone" aria-hidden="true"></i> (805) 720 - 2867</a>
						</li>
						<li>
							<a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i> webdevzim@gmail.com</a>
						</li>
					</ul>
				</footer>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>