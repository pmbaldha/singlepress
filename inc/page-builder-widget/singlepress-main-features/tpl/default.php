<!-- Start for Features -->
<section id="features">
	<div class="head-icon">
    	<?php
        if( !empty( $header_icon )  )
			echo siteorigin_widget_get_icon($header_icon, array());
		?>
    </div>
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 text-center">
        		<h3 class="heading start"><span class="start-left"></span><?php echo wp_kses_post($title_prefix);?>  <span><?php echo wp_kses_post($title);?></span><span class="start-right"></span></h3>
                <p class="heading-tag-line">
                	<?php echo wp_kses_post($desc);?>	
                </p>
                <div class="row feature-cont">
                	<div class="col-xs-12 col-sm-4">
                    	<?php
						foreach( $features as $feature):
                        ?>
                    	<div class="feature-item">
                        	<div class="icon">
                        		<?php
                                if( !empty( $feature['icon'] )  )
                                    echo siteorigin_widget_get_icon($feature['icon'], array());
                                ?>
                            </div>
                            <div class="desc text-left">
                            	<h5><?php echo !empty($feature['title']) ? wp_kses_post($feature['title']): '';?></h5>
                                <p><?php echo !empty($feature['desc']) ? wp_kses_post($feature['desc']): '';?></p>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-8">
					<?php
					if( !empty($image) ) 
					{
						$image = siteorigin_widgets_get_attachment_image_src(
									$image,
									'full',
									 ''
						);
						$img_src = $image[0];
					}
					else
					{
						$img_src = get_template_directory_uri().'/images/tablet.png';
					}
					?>
                    	<img class="img-responsive" src="<?php echo esc_url($img_src);?>" alt="<?php echo esc_attr( $title )?>" />
                     
                    </div>
                </div>
             </div>
       	</div>
   	</div>
</section>
<!-- End for Features -->