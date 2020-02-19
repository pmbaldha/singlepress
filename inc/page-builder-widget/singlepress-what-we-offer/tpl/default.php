<!-- Start for Services -->
<section id="services">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 text-center">
        		<h3 class="heading start">
                	<span class="start-left"></span>
              		 <?php echo wp_kses_post($title_prefix);?> <span><?php echo wp_kses_post($title);?></span>
                	<span class="start-right"></span>
                </h3>
                <p class="heading-tag-line"><?php echo wp_kses_post($desc);?></p>
                
                <div class="services-inner row">
                	<?php 
					foreach($offers as $offer):
					?>
                	<div class="col-xs-12 col-sm-4 text-center service-item">
                    	<div class="round-icon responsive">
                        	<?php
                                if( !empty( $offer['icon'] )  )
                                    echo siteorigin_widget_get_icon($offer['icon'], array());
                                ?>
                        </div>
                        <h5>
							<?php echo wp_kses_post( $offer['title'] );?>
                        </h5>
                        <p><?php echo wp_kses_post( $offer['desc'] );?></p>
                        
                        
                        <?php
						if (singlepress_pb_get_url( $offer['btn_url'] ) )
						{?>
							<a class="btn btn-default" <?php if( isset( $offer['btn_newwindow'] ) && $offer['btn_newwindow']  ) { ?> target="_blank" <?php } ?> href="<?php echo esc_url(singlepress_pb_get_url( $offer['btn_url'] ) );?>"><?php echo esc_html($offer['btn_text']);?></a>
						<?php
						}
						?>
                       
                    </div>
        			<?php
					endforeach;
					?>     
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End for Services -->