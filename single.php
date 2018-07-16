<?php get_header();?>
<?php if( have_posts() ) : while( have_posts() ) : the_post();?>
    <!--Main Slider-->
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-1.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-2.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-3.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-4.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-5.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End -->

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title();?></h2>
                       <?php the_content();?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>

                               
                              <?php comments_template( '', true ); ?>
                                

                            </div>
                        </div>
                    </div>
                </div>

               <?php get_template_part('sidebar');?>

                </div>
            </div>
        </div>
    </div>
    <!-- /news table  -->
      <?php endwhile;?>
   <?php endif;?>

<?php get_footer();?>