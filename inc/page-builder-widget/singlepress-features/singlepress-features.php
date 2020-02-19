<?php
/*
Widget Name: Creative Studio Features With Icon 
Description: More Features for home page.
Author: ThemeCycle
Author URI: http://themecycle.com
Widget URI: http://themecycle.com
Video URI: http://themecycle.com
*/
?>
<?php
class Singlepress_More_Features extends SiteOrigin_Widget {
	function __construct() {

    parent::__construct(
        'singlepress-features',

        esc_html__('More Features', 'singlepress'),


        array(
            'description' => esc_html__('More Features', 'singlepress'),
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
					'tagline' => array(
						'type' => 'text',
						'label' => esc_html__( 'Feature Tagline', 'singlepress' ),
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
			'features' => !empty($instance['features']) ? $instance['features'] : array(),
		);
	}
	

  
}

siteorigin_widget_register('singlepress-features', __FILE__, 'Singlepress_More_Features');
?>