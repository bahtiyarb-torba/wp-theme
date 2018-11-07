<!-- Home Section -->
<section class="home-section bg-dark-alfa-30 parallax-2" data-background="<?php echo get_template_directory_uri(); ?>/images/background1-2.jpg" id="home">
    <div class="js-height-full container">

        <!-- Hero Content -->
        <div class="home-content">
            <div class="home-text">

                <h1 class="hs-line-12 no-transp font-alt mb-50 mb-xs-30">
					<?php the_field( 'main_title' ); ?>
                </h1>
                <h2 class="hs-line-8 font-alt mb-50 mb-xs-30">
					<?php the_field( 'main_slogan' ); ?>
                </h2>

            </div>
        </div>
        <!-- End Hero Content -->

        <!-- Scroll Down -->
        <div class="local-scroll">
            <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
        </div>
        <!-- End Scroll Down -->

    </div>
</section>
<!-- End Home Section -->

<!-- About Section -->
<section class="page-section" id="about">
    <div class="container relative">

        <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
			<?php the_field( 'about_title' ); ?>
        </h2>

        <div class="section-text mb-50 mb-sm-20">
            <div class="row">

                <div class="col-md-4">
                    <blockquote>
                        <p>
							<?php the_field( 'about_blockquote' ); ?>
                        </p>
                        <footer>
							<?php the_field( 'about_blockquote_author' ); ?>
                        </footer>
                    </blockquote>
                </div>

                <div class="col-md-8 col-sm-12 mb-sm-100 mb-xs-60">
					<?php the_field( 'about_content' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- About Section -->
<section class="page-section" id="issues">
    <div class="container relative">

        <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
			<?php the_field( 'issues_title' ); ?>
        </h2>

        <div class="section-text mb-50 mb-sm-20">
            <div class="row">


                <ul class="nav nav-tabs tpl-tabs animate issues-tab">
					<?php
					$issues = get_field( 'issues' );
					foreach ( $issues as $key => $val ) {
						$key ++;
						$class = $key == count( $issues ) ? "active" : "";
						echo '<li class="' . $class . '">
                                      <a href="#issue' . $key . '" data-toggle="tab">' . $val['title'] . '</a>
                                  </li>';
					}
					?>
                </ul>

                <div class="tab-content tpl-tabs-cont section-text">
					<?php
					foreach ( $issues as $key => $val ) {
						$key ++;
						$class = $key == count( $issues ) ? "in active" : "";
						?>
                        <div class="tab-pane fade <?php echo $class; ?>" id="issue<?php echo $key; ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo $val['cover']; ?>" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12 mb-sm-100 mb-xs-60">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs tpl-tabs animate">
                                                <li class="active">
                                                    <a href="#issue<?php echo $key; ?>content" data-toggle="tab"><?php the_field( 'issues_content_title' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="#issue<?php echo $key; ?>buy" data-toggle="tab"><?php the_field( 'issues_buy_title' ); ?></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tpl-tabs-cont section-text">
                                                <div class="tab-pane fade in active" id="issue<?php echo $key; ?>content">
													<?php echo $val['content']; ?>
                                                </div>
                                                <div class="tab-pane fade" id="issue<?php echo $key; ?>buy">
													<?php echo $val['buy_links']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
					}
					?>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Subscription Section -->
<section class="page-section" id="subscription">
    <div class="container relative">
        <h2 class="section-title font-alt mb-70 mb-sm-40">
			<?php the_field( 'subscription_title' ); ?>
        </h2>
    </div>
</section>
<!-- End Subscription Section -->

<!-- Call Action Section -->
<section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="<?php echo get_template_directory_uri(); ?>/images/background2.jpg">
    <div class="container relative">

        <div class="row">

            <div class="col-sm-6">

                <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                    <div class="banner-content">
                        <h3 class="banner-heading font-alt"><?php the_field( 'subscription_subtitle' ); ?></h3>
                        <div class="banner-decription"><?php the_field( 'subscription_content' ); ?></div>
                        <div class="local-scroll subscribe-buttons">
							<?php the_field( 'subscription_buttons_html' ); ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 banner-image wow fadeInUp">
                <img src="<?php the_field( 'subscription_image' ); ?>" alt=""/>
            </div>

        </div>

    </div>
</section>
<!-- End Call Action Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
			<?php the_field( 'contact_title' ); ?>
        </h2>

        <div class="row mb-60 mb-xs-40">

            <div class="col-md-8 col-md-offset-2">
                <div class="row">

					<?php foreach ( get_field( 'contact_tabs' ) as $key => $val ): ?>
                        <div class="col-sm-4 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa <?php echo $val['icon_class']; ?>"></i>
                                </div>
                                <div class="ci-title font-alt">
									<?php echo $val['title']; ?>
                                </div>
                                <div class="ci-text">
									<?php echo $val['text']; ?>
                                </div>
                            </div>
                        </div>
					<?php endforeach; ?>

                </div>
            </div>

        </div>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
				<?php echo do_shortcode( '[contact-form-7 id="' . get_field( 'contact_form_id' ) . '" html_class="form contact-form"]' ); ?>
            </div>
        </div>
        <!-- End Contact Form -->

    </div>
</section>
<!-- End Contact Section -->