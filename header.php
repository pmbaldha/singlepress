<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package singlepress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if( is_front_page() && true == get_theme_mod( 'is_above_header', false) ):
?>
<!-- Start for header image-->
<?php
$image = get_theme_mod( 'above_header_bg_image' );
?>
<section id="header-img" <?php if( !empty($image) ):?>style="background-image: url('<?php echo esc_url( $image );?>')"<?php endif;?>>
	<div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
            	
                <p class="top"><?php echo esc_html( get_theme_mod(
				'above_header_title_above_text' , esc_html__('what are you waiting for ?', 'singlepress')) );?>
                </p>
                <h2>
                <?php echo esc_html( get_theme_mod(
				'above_header_title_text' , esc_html__("let’s be creative !", 'singlepress')) );?>                
                </h2>
                <p class="bottom">
                <span>                
                	<?php echo esc_html( get_theme_mod(
				'above_header_tagline_prefix' , esc_html__('Singlepress,', 'singlepress')) );?> 
                </span> 
                
                	<?php echo wp_kses_post( get_theme_mod(
				'above_header_tagline' , esc_html__('next generation & highly flexible wordpress theme', 'singlepress')) );?> 
                
                </p>
                <div class="start">
                	<span class="start-left"></span>
                    	<span>
                        	<?php echo esc_html( get_theme_mod(
				'above_header_above_btn_text' , esc_html__('start doing that', 'singlepress')) );?>
                        
                        </span>
                    <span class="start-right"></span>
                </div>
                
                <a href="<?php echo esc_url( get_theme_mod(
				'above_header_btn_url' , '') );?>" <?php if(true == get_theme_mod( 'above_header_btn_new_tab', false)):?>target="_blank"<?php endif;?> ><span class="above_header_btn fa <?php echo esc_attr(get_theme_mod( 'above_header_btn_icon', 'fa-arrow-down' ) )?>"></span></a>
             </div>
        </div> <!-- row end -->
    </div> <!-- Container End-->
</section>
<!-- End for header image-->
<?php
endif;
?>

<!-- Start for header -->
<header>
	<div class="container">
		<div class="row">
        	<div class="col-xs-8 col-sm-3 header_heading_part">
            	<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo get_bloginfo( 'name' );?></a>
                </h1>
                <h5 class="tagline">
                    <?php echo get_bloginfo( 'description' );?>
                </h5>
            </div>
            <div class="col-xs-12 col-sm-9">
            	<nav class="navbar <?php if( wp_is_mobile() ):?>pull-center<?php else:?>pull-right<?php endif;?>">
                    <div class="navbar-header">
                      <button aria-expanded="false" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only"><?php esc_html_e('Toggle navigation','singlepress');?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div> <!-- navbar-header end -->
                    <!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav',
                                'menu_id' => 'main-menu',
                                'walker' => new SinglePress_WP_Bootstrap_Navwalker()
                            )
                    ); ?>
                </nav>
            </div>
       	</div><!-- Row end -->
      </div><!-- Container end-->
</header>


<hr class="after-header" />

<div id="page" class="hfeed site">
    