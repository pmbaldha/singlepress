<?php
function singlepress_pb_get_url( $pb_url )
{
	if( stripos( $pb_url, ': ' ) !== false)	
	{
		$temp_array = explode( ': ',  $pb_url);
		
		$post_id_url = trim($temp_array[1]);
		$post_id_url = intval($post_id_url);
		
		return get_post_permalink( $post_id_url );
	}
	elseif( !empty( $pb_url ) )
	{
		return $pb_url;
	}
	else
	{
		return false;	
	}
}

// Add Widgets
function singlepress_add_widgets_collection($folders){
    $folders[] = get_template_directory() . '/inc/page-builder-widget/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'singlepress_add_widgets_collection');

function singlepress_add_widget_tab($tabs) {
    $tabs[] = array(
        'title' => esc_html__('Home Page', 'singlepress'),
        'filter' => array(
            'groups' => array('home')
        )
    );
	
	
    return $tabs;
}
add_filter('siteorigin_panels_widget_dialog_tabs', 'singlepress_add_widget_tab', 20);


function singlepress_remove_widgets($widgets){
    //unset($widgets['SiteOrigin_Widget_PriceTable_Widget']);
	/*
	unset($widgets['singlepress_Search_Cat_Filter_Widget']);
	unset($widgets['singlepress_Search_Lang_Filter_Widget']);
	unset($widgets['singlepress_Search_Price_Filter_Widget']);
	unset($widgets['singlepress_Course_Search_Widget']);
	unset($widgets['singlepress_Courses_Widget']);
	unset($widgets['singlepress_Recent_Events_Widget']);
	unset($widgets['singlepress_Recent_Posts_Widget']);
	unset($widgets['singlepress_Similar_Courses_Widget']);
	*/
    return $widgets;
}
add_filter('siteorigin_panels_widgets', 'singlepress_remove_widgets');

function singlepress_unregister_widgets()
{
	global $pagenow;
	if ($pagenow == 'widgets.php'){
		unregister_widget('SiteOrigin_Widget_PriceTable_Widget');
		unregister_widget('Singlepress_Main_Features');
		unregister_widget('Singlepress_Features');
		unregister_widget('Singlepress_Skills');
		unregister_widget('Singlepress_Portfolio');
		unregister_widget('Singlepress_What_We_Offer');
		unregister_widget('Singlepress_What_We_Offer');
		
	}
}
add_action( 'widgets_init','singlepress_unregister_widgets', 11 );

function singlepress_filter_active_widgets($active){
	$active['singlepress-what-we-offer'] = true;
	$active['singlepress-main-features'] = true;
	$active['singlepress-features'] = true;
	$active['singlepress-skills'] = true;
	$active['singlepress-portfolio'] = true;
	$active['singlepress-what-we-offer'] = true;
	
	
	
	return $active;
}
add_filter('siteorigin_widgets_active_widgets', 'singlepress_filter_active_widgets');


?>