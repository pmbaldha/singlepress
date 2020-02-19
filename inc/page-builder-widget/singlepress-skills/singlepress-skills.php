<?php
/*
Widget Name: Skills 
Description: Skills for home page.
Author: ThemeCycle
Author URI: http://themecycle.com
Widget URI: http://themecycle.com
Video URI: http://themecycle.com
*/
?>
<?php
class Singlepress_Skills extends SiteOrigin_Widget {
	function __construct() {

    parent::__construct(
        'singlepress-skills',

        esc_html__('Skills', 'singlepress'),


        array(
            'description' => esc_html__('Skills', 'singlepress'),
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
						'default' =>  'ionicons-bag',
					),
			'title_prefix' => array(
				'type' => 'text',
				'label' => esc_html__('Title Prefix', 'singlepress'),				
				'default' => esc_html__('our powerful ', 'singlepress'),
			),
			'title' => array(
						'type' => 'text',
						'label' => esc_html__( 'Title', 'singlepress' ),
						
						'default' =>  esc_html__('skills', 'singlepress'),
					),
			
			'desc' => array(
				'type' => 'textarea',
				'label' => esc_html__( 'Description', 'singlepress' ),		
				'default' => esc_html__("We’re good and experienced at different things and areas and we promise about qulity of our works", 'singlepress'),			
			),
			'skills' => array(
				'type' => 'repeater',
				'label' => esc_html__( 'Skills' , 'singlepress' ),
				'item_name'  => esc_html__( 'Feature', 'singlepress' ),
				'item_label' => array(
					'selector'     => "[id*='title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					
					'title' => array(
						'type' => 'text',
						'label' => esc_html__( 'Skill Title', 'singlepress' ),
						'default' =>  '',
					),
					'per' => array(
						'type' => 'text',
						'label' => esc_html__( 'Skill Percentage (in %)', 'singlepress' ),
						'default' =>  '',
					),
					
				
			),
			
		),
			
			
			
        );	
	}
	
	
	function get_template_variables( $instance, $args ){
		return array(
			'header_icon' => !empty($instance['header_icon']) ? $instance['header_icon'] : '',
			'title_prefix' => !empty($instance['title_prefix']) ? $instance['title_prefix'] : '',
			'title' => !empty($instance['title']) ? $instance['title'] : '',	
			'desc' => !empty($instance['desc']) ? $instance['desc'] : '',						
			'skills' => !empty($instance['skills']) ? $instance['skills'] : array(),
		);
	}
	

  
}

siteorigin_widget_register('singlepress-skills', __FILE__, 'Singlepress_Skills');
?>