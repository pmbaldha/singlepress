<!-- Start for portolio -->
<section id="portfolio" class="simple-section">
	<div class="container-fluid">
    	<div class="row">
        	<div class="col-xs-12 text-center">
        		<h3 class="heading start"><span class="start-left"></span><?php echo wp_kses_post($title_prefix);?> <span><?php echo wp_kses_post($title);?> </span><span class="start-right"></span></h3>
                <p class="heading-tag-line"><?php echo wp_kses_post($desc);?></p>
                
                <div class="portfolio-inner">
                	<?php 
					$i = 0;
					foreach($portfolios as $key=>$portfolio ):
						?>
                	<div class="col-xs-12 col-sm-3 text-center portfolio-item">
                    	<div class="img-cont">
                        	<?php
                            if( !empty($image) ) {
								$image = siteorigin_widgets_get_attachment_image_src(
											$image,
											'full',
											 ''
								);
								$img_src = $image[0];
							}
							else
							{
								$img_src = 	get_template_directory_uri().'/images/portfoilio.png';
							}
							?>
	                        <img src="<?php echo esc_url($img_src);?>" alt="<?php echo esc_attr( $portfolio['title'] );?>">
                        </div>
                        <div class="overlay">
                        	<?php 
							if( !empty( $portfolio['link'] ) )
							{?> 
                            <a href="<?php echo esc_url($portfolio['link']);?>" class="port-links" <?php if( isset($portfolio['link_newwindow']) && $portfolio['link_newwindow']): ?>target="_blank"<?php endif;?>>
                            <?php
							}
							?>
                            	<img src="<?php echo get_template_directory_uri();?>/images/posrt-links.png" alt="<?php echo esc_attr( $portfolio['title'] );?>">
                            <?php 
							if( !empty( $portfolio['link'] ) )
							{?> 
                            </a>
                            <?php 
							}
							?>
                            <h5><?php echo esc_html($portfolio['title']);?></h5>
                            <p><?php echo esc_html($portfolio['cat']);?></p>
                            <div class="port-love-count">
                            	<span class="icon-heart"></span>
                                <span class="count"><?php echo esc_html($portfolio['love_count']);?></span>
                            </div>
                        </div>
                    </div>
    	                <?php
						$i++;
	                    if( $i  == 4)
						{
							$i = 0;
						?>
                            <div class="clearfix">
                            </div>
                        <?php
						}
						?>
                    <?php 
					endforeach;
					?>                    
                </div> <!--portfolio inner end--->
                
            
          
                
            </div>
        </div>  <!-- End of container-fluid-->
    </div> <!-- End of container-fluid-->
    
    <div class="container">
    	<a href="#" class="btn btn-primary btn-full-width">view all works</a>
    </div>
</section>
<!-- End for portolio -->