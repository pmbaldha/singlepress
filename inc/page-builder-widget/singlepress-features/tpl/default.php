<!-- Start for More Features -->
<section id="more-features">
	<div class="container">
    	<div class="row">
        	<?php
			foreach( $features as $feature):
			?>
            <div class="col-xs-12 col-sm-4 more-feature-item-parent">
            	<div class="feature-icon-bg">
                	<?php
					if( !empty( $feature['icon'] )  )
						echo siteorigin_widget_get_icon($feature['icon'], array());
					?>
                </div>
                <div class="more-feature-item">
                    <h3><?php echo !empty($feature['title']) ? wp_kses_post($feature['title']): '';?></h3>
                    <h5><?php echo !empty($feature['tagline']) ? wp_kses_post($feature['tagline']): '';?></h5>
                    <p><?php echo !empty($feature['desc']) ? wp_kses_post($feature['desc']): '';?></p>
                </div>
            </div>
            <?php
			endforeach;
			?>
            
        </div>
    </div>
</section>