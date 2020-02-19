<?php
/*
Widget Name: What We Offer
Description: What We Offer for home page.
Author: ThemeCycle
Author URI: http://themecycle.com
Widget URI: http://themecycle.com
Video URI: http://themecycle.com
*/
?>
<?php
class Singlepress_What_We_Offer extends SiteOrigin_Widget {
	function __construct() {

    parent::__construct(
        'singlepress_what_we_offer',

        esc_html__('What We Offer', 'singlepress'),


        array(
            'description' => esc_html__('What We Offer', 'singlepress'),
			'panels_groups' => array( 'home'),
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
				'default' => esc_html__('What We ', 'singlepress'),
			),
			'title' => array(
				'type' => 'text',
				'label' => esc_html__('Title', 'singlepress'),				
				'default' => esc_html__('Offer', 'singlepress'),
			),
			'desc' => array(
				'type' => 'textarea',
				'label' => esc_html__( 'Description', 'singlepress' ),		
				'default' => esc_html__('We offer our customers the best services & solutions, this is our main services list', 'singlepress'),			
				),
				
		
			'offers' => array(
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
						'default' =>  esc_html('Proin in magna a ipsum viverra scelerisq enec turp, Nunc vestibulum fringilla accumsan ornare quis.'),
					),
					'btn_text' => array(
						'type' => 'text',
						'label' => esc_html__( 'Button Text', 'singlepress' ),
						'default' => esc_html('Read More'),
					),
					'btn_url' => array(
								'type' => 'link',
								'label' => esc_html__( 'Button URL', 'singlepress' ),
								'default' => '#',								
								'description' => esc_html__( 'If you would not like to show button, please leave Button Url as empty', 'singlepress' )
								
							),
					'btn_newwindow' => array(
						'type' => 'checkbox',
						'label' => esc_html__('Button Open in new window', 'singlepress'),
						
						'default' => false,
					),	
				),
			
		),
			
			
			
        );	
	}
	
	
	function get_template_variables( $instance, $args ){
		return array(
			'title_prefix' => $instance['title_prefix'],		
			'title' => $instance['title'],		
			'desc' => $instance['desc'],			
			'offers' => !empty($instance['offers']) ? $instance['offers'] : array(),
		);
	}
  
}

siteorigin_widget_register('singlepress_what_we_offer', __FILE__, 'Singlepress_What_We_Offer');
?>