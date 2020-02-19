<?php
/*
Widget Name: Portfolio
Description: Portfolio for home page.
Author: ThemeCycle
Author URI: http://themecycle.com
Widget URI: http://themecycle.com
Video URI: http://themecycle.com
*/
?>
<?php
class Singlepress_Portfolio extends SiteOrigin_Widget {
	function __construct() {

    parent::__construct(
        'singlepress-portfolio',

        esc_html__('Portfolio', 'singlepress'),


        array(
            'description' => esc_html__('Portfolio', 'singlepress'),
			'panels_groups' => array('home'),
            'help'        => 'http://themecycle.com/',
			'has_preview' => false,
        ),

        array(
        ),
		
		false,

        plugin_dir_path(__FILE__)
    );
	}
	
	function get_widget_form() {
		return array(
			'title_prefix' => array(
				'type' => 'text',
				'label' => esc_html__('Title Prefix', 'singlepress'),				
				'default' => esc_html__('sample ', 'singlepress'),
			),
			'title' => array(
						'type' => 'text',
						'label' => esc_html__( 'Title', 'singlepress' ),
						
						'default' =>  'works',
					),
			
			'desc' => array(
				'type' => 'textarea',
				'label' => esc_html__( 'Description', 'singlepress' ),		
				'default' => esc_html__('Let’s take a look at some of the best of our works here, we love them and hope you too', 'singlepress'),			
			),
					
			'portfolios' => array(
				'type' => 'repeater',
				'label' => esc_html__( 'Portfolios' , 'singlepress' ),
				'item_name'  => esc_html__( 'Portfolio', 'singlepress' ),
				'item_label' => array(
					'selector'     => "[id*='title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'title' => array(
						'type' => 'text',
						'label' => esc_html__( 'Portfolio Title', 'singlepress' ),
						'default' =>  '',
					),
					'cat' => array(
						'type' => 'text',
						'label' => esc_html__( 'Category', 'singlepress' ),
						'default' =>  '',
					),
					'link' => array(
						'type' => 'link',
						'label' => esc_html__( 'Link URL', 'singlepress' ),
						'default' => '#',
						
					),
					'link_newwindow' => array(
						'type' => 'checkbox',
						'label' => esc_html__('Link Open in new window', 'singlepress'),
						'default' => false,
					),	
					'love_count' => array(
						'type' => 'number',
						'label' => esc_html__( 'Love Count', 'singlepress' ),
						'default' =>  '',
					),
					'image' => array(
						'type' => 'media',
						'library' => 'image',
						'label' => esc_html__('Image 317x250 px', 'singlepress'),
						'fallback' => true,
						'description' => esc_html__( 'Image size should have width of 317px and height of 250px', 'singlepress' ),
					),
				
			),
			
		),
			
			
			
        );	
	}
	
	
	function get_template_variables( $instance, $args ){
		return array(
			'title_prefix' => !empty($instance['title_prefix']) ? $instance['title_prefix'] : '',
			'title' => !empty($instance['title']) ? $instance['title'] : '',
					
			'portfolios' => !empty($instance['portfolios']) ? $instance['portfolios'] : array(),
		);
	}
	

  
}

siteorigin_widget_register('singlepress-portfolio', __FILE__, 'Singlepress_Portfolio');
?>