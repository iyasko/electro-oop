<?php
    $footerNavigation = [
        'Categories' => [
            'Hot deals' => '#',
            'Laptops' => '#',
            'Smartphones' => '#',
            'Cameras' => '#',
            'Accessories' => '#',
        ],
        'Information' => [
            'About Us' => '#',
            'Contact Us' => '#',
            'Privacy Policy' => '#',
            'Orders and Returns' => '#',
            'Terms & Conditions' => '#',
        ],
        'Service' => [
            'My Account' => '#',
            'View Cart' => '#',
            'Wishlist' => '#',
            'Track My Order' => '#',
            'Help' => '#',
        ]
    ];

    $paymentMethods = [
        'fa-cc-visa',
        'fa-credit-card',
        'fa-cc-paypal',
        'fa-cc-mastercard',
        'fa-cc-discover',
        'fa-cc-amex',
    ];

?>
<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

                        <?php foreach ($footerNavigation as $navBlockName => $navBlockItems): ?>
                            <div class="col-md-3 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-title"><?= $navBlockName; ?></h3>
                                    <ul class="footer-links">
                                        <?php foreach ($navBlockItems as $itemName => $itemLink): ?>
                                            <li><a href="<?= $itemLink; ?>"><?= $itemName; ?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
                                <?php do { ?>
                                    <li><a href="#"><i class="fa <?= current($paymentMethods); ?>"></i></a></li>
                                <?php } while(next($paymentMethods)) ?>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src="/js/nouislider.min.js"></script>
		<script src="/js/jquery.zoom.min.js"></script>
		<script src="/js/main.js"></script>

	</body>
</html>