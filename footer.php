<!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <a href="index.html">
                                <img src="<?php echo gazi_get_option('logo');?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-9">
                        <div class="menu_links">
                            <!-- <ul>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="#">About</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="#">Services</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="#">Portfolio</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="#">Pages</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Blog</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.1s" href="#">Contact</a></li>
                            </ul>-->
							<?php 
										wp_nav_menu(array(
										'theme_location' => 'primary',
										'depth' => 1,
										'container' => 'ul',
										'container_class' => '',
										'container_id' => 'wow fadeInDown',
										'menu_class' => '',
										'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
										'walker' => new WP_Bootstrap_Navwalker,
										));
									
									
									
									?>
                        </div>
                    </div>
					
                    <div class="col-lg-3 col-md-12">
                        <div class="socail_links">
                            <ul>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
	
	<?php wp_footer(); ?>

    <!-- JS here -->
    

    <!--contact js-->
    
</body>

</html>