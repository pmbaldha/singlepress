<!-- Start for our powerful skills-->
<section id="powerful-skills" class="highlight">
	<div class="head-icon">
    	<?php
		if( !empty( $header_icon )  )
			echo siteorigin_widget_get_icon($header_icon, array());
		?>
    </div>
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 text-center">
        		<h3 class="heading start"><span class="start-left"></span><?php echo wp_kses_post($title_prefix);?><span><?php echo wp_kses_post($title);?></span><span class="start-right"></span></h3>
                <p class="heading-tag-line">
                	<?php echo wp_kses_post($desc);?>					
                </p>
                <div class="row">
                	<?php foreach($skills as $skill):?>
                	<div class="col-xs-6 col-sm-2">
                    	<div class="chart" data-percent="<?php echo intval($skill['per']);?>">
                            <div class="percent">
                            	<span class="percent-inner"></span>
                                <span class="percent-symbol">%</span>
                            </div>
                        </div>
                        <h5><?php echo wp_kses_post($skill['title']);?></h5>
                    </div>
                    <?php endforeach;?>
               </div>
             </div>	
        </div>
    </div>
</section>
<!-- End for our powerful skills-->