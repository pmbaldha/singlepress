<?php
/*
Widget Name: Main Features
Description: Main Features for home page.
Author: ThemeCycle
Author URI: http://themecycle.com
Widget URI: http://themecycle.com
Video URI: http://themecycle.com
*/
?>
<?php
class Singlepress_Main_Features extends SiteOrigin_Widget {
	function __construct() {

    parent::__construct(
        'singlepress-main-features',

        esc_html__('Main Features', 'singlepress'),


        array(
            'description' => esc_html__('Main Features', 'singlepress'),
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
			'header_icon' => array(
						'type' => 'icon',
						'label' => esc_html__( 'Header Icon', 'singlepress' ),
						'default' =>  'elegantline-key',
					),
			'title_prefix' => array(
				'type' => 'text',
				'label' => esc_html__('Title Prefix', 'singlepress'),				
				'default' => esc_html__('Amazing ', 'singlepress'),
			),
			'title' => array(
						'type' => 'text',
						'label' => esc_html__( 'Title', 'singlepress' ),
						
						'default' =>  esc_html__('Features', 'singlepress'),
					),
			
			'desc' => array(
				'type' => 'textarea',
				'label' => esc_html__( 'Description', 'singlepress' ),		
				'default' => esc_html__('With unlimited features that we offer, we promise it’s possible to make everything that was impossible for you !', 'singlepress'),			
			),
					
			'image' => array(
				'type' => 'media',
				'library' => 'image',
				'label' => esc_html__('Image 691x477 px', 'singlepress'),
				'fallback' => true,
				'desc' => esc_html__( 'Image size should have width of 691px and height of 477px', 'singlepress' ),
				'default' => get_template_directory_uri().'/images/tablet.png',
			),
			
			'features' => array(
				'type' => 'repeater',
				'label' => esc_html__( 'Features' , 'singlepress' ),
				'item_name'  => esc_html__( 'Feature', 'singlepress' ),
				'item_label' => array(
					'selector'     => "[id*='title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'icon' => array(
						'type' => 'icon',
						'label' => esc_html__( 'Icon', 'singlepress' ),
						'default' =>  '',
					),
					'title' => array(
						'type' => 'text',
						'label' => esc_html__( 'Feature Title', 'singlepress' ),
						'default' =>  '',
					),
					'desc' => array(
						'type' => 'textarea',
						'label' => esc_html__('Feature Description', 'singlepress'),
						'default' => esc_html('Proin in magna a ipsum viverra scelerisq enec turp, nunc vestibulum.'),
						
						),
				
			),
			
		),
			
			
			
        );	
	}
	
	
	function get_template_variables( $instance, $args ){
		return array(
			'header_icon' => $instance['header_icon'],
			'title_prefix' => !empty($instance['title_prefix']) ? $instance['title_prefix'] : '',
			'title' => !empty($instance['title']) ? $instance['title'] : '',
					
			'features' => !empty($instance['features']) ? $instance['features'] : array(),
		);
	}
	

  
}

siteorigin_widget_register('singlepress-main-features', __FILE__, 'Singlepress_Main_Features');
?>