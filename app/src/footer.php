<footer id="contact-us">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-xl-12 col-xxl-11">
				<div class="row">
					<div class="col-xl-8" data-aos="fade-right">
						<div class="row">
							<div class="col-12 fs-2 fw-700 line-height-3 heroHeading">Fast, Simple, Affordable Funding!</div>
							<div class="col-xl-8 line-height-2 fs-8 subHeading">Apply Now or Call <a href="tel:<?= $phone_number ?>" class="btn p-0 fs-8 text-white"><?= $phone_number ?></a> to speak with a Finance Broker</div>
							<div class="col-lg-9 py-3">
								<div class="d-md-none footer-contact-button">
									<div class="pb-1">
										<a href="#form" class="btn btn-secondary-dark text-white fw-700 rounded-pill line-height-1 py-2">Get a FREE Quote within minutes</a>
									</div>
									<div class="pt-1">
										<a href="https://affordablefunding.outgrow.us/affordablefunding-2" target="_blank" class="btn btn-white text-primary-dark fw-700 rounded-pill line-height-1 py-2">Apply Now</a>
									</div>
								</div>
								<div class="row g-0 bg-white rounded-pill footer-contact-button d-none d-md-flex">
									<div class="col">
										<a href="#form" class="btn btn-secondary-dark text-white fs-9 fw-700 rounded-pill line-height-1 py-3 px-6">Get a FREE Quote within minutes</a>
									</div>
									<div class="col-auto">
										<a href="https://affordablefunding.outgrow.us/affordablefunding-2" target="_blank" class="btn text-primary-dark fs-9 fw-800 line-height-1 py-3 px-5">Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="form"></div>
					<div class="col-12 pt-4 d-md-none">
						<a href="javascript:void(0)" id="quick-link-btn" class="btn text-white text-uppercase py-0 fw-700 text-center d-block">
							Quick Links <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L8 8L15 1" stroke="white" />
							</svg>
						</a>
						<ul class="quick-links" id="quick-links-sm">
							<li><a href="#loans" class="text-white fs-12">Types of Loans</a></li>
							<li><a href="#about-us" class="text-white fs-12">About Us</a></li>
							<li><a href="#" class="text-white fs-12">Lenders</a></li>
							<li><a href="https://affordablefunding.outgrow.us/affordablefunding-2" target="_blank" class="text-white fs-12">Apply Now</a></li>
							<li><a href="#contact-us" class="text-white fs-12">Contact Us</a></li>
						</ul>
						<hr>
						<a href="javascript:void(0)" id="map-display-btn-sm" class="btn text-white text-uppercase py-0 fw-700 text-center d-block">
							Contact <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L8 8L15 1" stroke="white" />
							</svg>
						</a>
						<div class="map-wrapper-sm">
							<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26517.018106732667!2d150.9237568!3d-33.821930800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12978bffdefee7%3A0x5017d68163343f0!2sPemulwuy%20NSW%202145!5e0!3m2!1sen!2sau!4v1662516134351!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<div class="google-map-title">Affordable Funding - Car Finance Sydney</div>
							<div class="text-light fw-300">49/2/4 Picrite Cl, Pemulwuy NSW 2145</div>

							<form action="./src/form" method="post" class="newsletter-form mt-4">
								<input type="hidden" name="token" id="recaptchaResponse1" class="recaptchaResponse">
								<div class="row g-2 align-items-center">
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" placeholder="Full Name" required>
									</div>
									<div class="col-md-6">
										<input type="tel" class="form-control" name="phone" placeholder="Phone Number " required>
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" placeholder="Email address" required>
									</div>
									<div class="col-md-6">
										<select name="enquiryType" class="form-control" required>
											<option disabled selected>Enquiry Type</option>
											<option>New Loan Application</option>
											<option>Loan &amp; Finance Enquiry</option>
											<option>Partnership Enquiry</option>
											<option>Broker &amp; Employment Enquiry</option>
											<option>General Enquiry</option>
										</select>
									</div>
									<div class="col-md">
										<input type="text" class="form-control" name="comment" placeholder="Message">
									</div>
									<div class="col-md-auto">
										<button type="submit" class="btn">
											<svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M7.86193 0.52827C8.12228 0.26792 8.54439 0.26792 8.80474 0.52827L11.8047 3.52827C12.0651 3.78862 12.0651 4.21073 11.8047 4.47108L8.80474 7.47108C8.54439 7.73143 8.12228 7.73143 7.86193 7.47108C7.60158 7.21073 7.60158 6.78862 7.86193 6.52827L9.72386 4.66634H0.666667C0.298477 4.66634 0 4.36786 0 3.99967C0 3.63148 0.298477 3.33301 0.666667 3.33301H9.72386L7.86193 1.47108C7.60158 1.21073 7.60158 0.788619 7.86193 0.52827Z" fill="white" />
											</svg>
										</button>
									</div>
								</div>
							</form>
							<div class="fs-14 text-white pt-3 fw-300">*Subscribe to our newsletter to receive communications and early updates from Affordable Funding</div>
						</div>
					</div>
					<div class="col-12 pt-5 pb-4">
						<div class="row justify-content-center justify-content-xl-between">
							<div class="col-md-6 col-lg-5 col-xl-3 d-none d-md-block">
								<div class="text-uppercase fw-700">Quick Links</div>
								<ul class="quick-links">
									<li><a href="#loans" class="text-white fs-12">Types of Loans</a></li>
									<li><a href="#about-us" class="text-white fs-12">About Us</a></li>
									<li><a href="" class="text-white fs-12">Lenders</a></li>
									<li><a href="https://affordablefunding.outgrow.us/affordablefunding-2" target="_blank" class="text-white fs-12">Apply Now</a></li>
									<li><a href="#contact-us" class="text-white fs-12">Contact Us</a></li>
								</ul>
								<div class="row align-items-center gx-3 pt-4">
									<div class="col-auto fs-12 fw-700 pe-4">Follow us</div>
									<div class="col-auto"><a href=<?= $facebook ?> target="_blank"><?= renderImg("facebook.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $instagram ?> target="_blank"><?= renderImg("instagram.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $linkedin ?> target="_blank"><?= renderImg("linkedin.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $gmb ?> target="_blank"><?= renderImg("gmb.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $google_map ?> target="_blank"><?= renderImg("google-map.png", "icons", "social-icon") ?></a></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-7 col-xl-4 d-none d-md-block">
								<iframe class="google-map pb-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26517.018106732667!2d150.9237568!3d-33.821930800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12978bffdefee7%3A0x5017d68163343f0!2sPemulwuy%20NSW%202145!5e0!3m2!1sen!2sau!4v1662516134351!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<div class="google-map-title">Affordable Funding - Car Finance Sydney</div>
								<div class="text-light fw-300">49/2/4 Picrite Cl, Pemulwuy NSW 2145</div>
							</div>
							<div class="col-lg-8 col-xl-4 col-xxl-4 pt-md-6 pt-xl-0">
								<div class="license"><span class="fw-700">ABN</span> 55 618 511 158</div>
								<div class="license pt-2 pt-md-3"><span class="fw-700">Australian Credit License</span> 517685</div>
								<div class="row justify-content-between align-items-center py-4">
									<div class="col col-md-auto"><?= renderImg("afca.png", "logo") ?></div>
									<div class="col col-md-auto"><?= renderImg("fintelligence.png", "logo") ?></div>
									<div class="col col-md-auto"><?= renderImg("fbaa.png", "logo") ?></div>
								</div>
								<div class="row align-items-center gx-3 pt-3 d-md-none">
									<div class="col-auto fs-12 fw-700 pe-4">Follow us</div>
									<div class="col-auto"><a href=<?= $facebook ?> target="_blank"><?= renderImg("facebook.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $instagram ?> target="_blank"><?= renderImg("instagram.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $linkedin ?> target="_blank"><?= renderImg("linkedin.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $gmb ?> target="_blank"><?= renderImg("gmb.png", "icons", "social-icon") ?></a></div>
									<div class="col-auto"><a href=<?= $google_map ?> target="_blank"><?= renderImg("google-map.png", "icons", "social-icon") ?></a></div>
								</div>
								<div class="d-none d-md-block pt-md-4 pt-lg-0">
									<div class="newsletter-header fs-6">Enquire Now</div>
									<form action="./src/form" method="post" class="newsletter-form">
										<input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse">
										<div class="row g-2 align-items-center">
											<div class="col-md-6">
												<input type="text" class="form-control" name="name" placeholder="Full Name" required>
											</div>
											<div class="col-md-6">
												<input type="tel" class="form-control" name="phone" placeholder="Phone Number " required>
											</div>
											<div class="col-md-6">
												<input type="email" class="form-control" name="email" placeholder="Email address" required>
											</div>
											<div class="col-md-6">
												<select name="enquiryType" class="form-control" required>
													<option disabled selected>Enquiry Type</option>
													<option>New Loan Application</option>
													<option>Loan &amp; Finance Enquiry</option>
													<option>Partnership Enquiry</option>
													<option>Broker &amp; Employment Enquiry</option>
													<option>General Enquiry</option>
												</select>
											</div>
											<div class="col-md">
												<input type="text" class="form-control" name="comment" placeholder="Message">
											</div>
											<div class="col-md-auto">
												<button type="submit" class="btn">
													<svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M7.86193 0.52827C8.12228 0.26792 8.54439 0.26792 8.80474 0.52827L11.8047 3.52827C12.0651 3.78862 12.0651 4.21073 11.8047 4.47108L8.80474 7.47108C8.54439 7.73143 8.12228 7.73143 7.86193 7.47108C7.60158 7.21073 7.60158 6.78862 7.86193 6.52827L9.72386 4.66634H0.666667C0.298477 4.66634 0 4.36786 0 3.99967C0 3.63148 0.298477 3.33301 0.666667 3.33301H9.72386L7.86193 1.47108C7.60158 1.21073 7.60158 0.788619 7.86193 0.52827Z" fill="white" />
													</svg>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<hr>
						<div class="row gx-4 copyright gx-xl-5 align-items-center fw-300 py-md-4">
							<div class="col-auto">Copyright <?= date('Y') ?></div>
							<div class="col-auto"><?= $site ?> All Right Reserved</div>
							<div class="col-auto">Privacy Policies</div>
							<div class="col-auto">Terms &amp; Conditions</div>
							<div class="col-auto">Credit Guide</div>
							<div class="col-auto">Complaints Policy</div>
						</div>
						<div class="row justify-content-between pt-4 align-items-center">
							<div class="col-5 col-md-auto order-2 order-md-1">
								<?= renderImg("footer-logo.png", "logo") ?>
							</div>
							<div class="col-5 col-md-auto order-1 order-md-2">
								<div class="row align-items-center gx-5">
									<div class="col-auto">
										<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
											<?= renderImg("aiims.png", "logo") ?>
										</a>
									</div>
									<div class="col-auto d-none d-md-block">
										<a href="#form" class="btn py-2 px-6 contact-us-button">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
<!-- Start of aiims2758 Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=ffc3109a-f802-43e4-b63d-2f3b5d6ffb89"> </script>
<!-- End of aiims2758 Zendesk Widget script -->
</body>

</html>