<?php
/**
 * This page contains the functions to make a metabox for Shadows
 *
 * @link http://mintplugins.com/doc/metabox-class/
 * @since 1.0.0
 *
 * @package    MP Stacks + Shadows
 * @subpackage Functions
 *
 * @copyright   Copyright (c) 2015, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */
 
/**
 * Function which creates new Meta Box
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/metabox-class/
 * @see      MP_CORE_Metabox
 * @return   void
 */
function mp_stacks_shadows_create_meta_box(){	

	//Array which stores all info about the new metabox
	$mp_stacks_shadows_add_meta_box = array(
		'metabox_id' => 'mp_stacks_shadows_metabox', 
		'metabox_title' => __( 'Shadow Settings', 'mp_stacks'), 
		'metabox_posttype' => 'mp_brick', 
		'metabox_context' => 'side', 
		'metabox_priority' => 'low' 
	);
	
	
	//Array which stores all info about the options within the metabox
	$mp_stacks_shadows_items_array = array(
		
		array(
			'field_id'			=> 'brick_ct1_dropshadow_showhider',
			'field_title' 	=> __( 'Content-Type 1\'s Drop Shadow', 'mp_stacks_shadow'),
			'field_description' 	=> 'Set the Drop Shadow for Content-Type 1.',
			'field_type' 	=> 'showhider',
			'field_value' => '0',
		),
			array(
				'field_id'			=> 'brick_ct1_shadow_enabled',
				'field_title' 	=> __( 'Enable Drop Shadow', 'mp_stacks'),
				'field_description' 	=> 'Do you want to enable the drop shadow for Content-Type 1?',
				'field_type' 	=> 'checkbox',
				'field_value' => '',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct1_shadow_x',
				'field_title' 	=> __( 'X Offset', 'mp_stacks'),
				'field_description' 	=> 'Set the shadow offset horizontally. 50 is directly beneath the icon horizontally.',
				'field_type' 	=> 'input_range',
				'field_value' => '50',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct1_shadow_y',
				'field_title' 	=> __( 'Y Offset', 'mp_stacks'),
				'field_description' 	=> 'Set the shadow offset vertically. 50 is directly beneath the icon vertically.',
				'field_type' 	=> 'input_range',
				'field_value' => '50',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct1_shadow_blur',
				'field_title' 	=> __( 'Shadow Blur', 'mp_stacks'),
				'field_description' 	=> 'Set the shadow\'s blurriness.',
				'field_type' 	=> 'input_range',
				'field_value' => '50',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct1_shadow_color',
				'field_title' 	=> __( 'Shadow Color', 'mp_stacks'),
				'field_description' 	=> 'Set the color of the shadow.',
				'field_type' 	=> 'colorpicker',
				'field_value' => '#000',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct1_shadow_opacity',
				'field_title' 	=> __( 'Shadow Opacity', 'mp_stacks'),
				'field_description' 	=> 'Set the opacity of the shadow.',
				'field_type' 	=> 'input_range',
				'field_value' => '100',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct1_shadow_weight',
				'field_title' 	=> __( 'Shadow Weight', 'mp_stacks'),
				'field_description' 	=> 'Set the weight of the shadow.',
				'field_type' 	=> 'select',
				'field_select_values' => array( 
					'normal_weight' => __( 'Normal Weight', 'mp_stacks_shadows' ),
					'double_weight' => __( 'Double Weight', 'mp_stacks_shadows' ),
				),
				'field_value' => 'normal_weight',
				'field_showhider' => 'brick_ct1_dropshadow_showhider',
			),
		array(
			'field_id'			=> 'brick_ct2_dropshadow_showhider',
			'field_title' 	=> __( 'Content-Type 2\'s Drop Shadow', 'mp_stacks_shadow'),
			'field_description' 	=> 'Set the Drop Shadow for Content-Type 2.',
			'field_type' 	=> 'showhider',
			'field_value' => '0',
		),
			array(
				'field_id'			=> 'brick_ct2_shadow_enabled',
				'field_title' 	=> __( 'Enable Drop Shadow', 'mp_stacks'),
				'field_description' 	=> 'Do you want to enable the drop shadow for Content-Type 2?',
				'field_type' 	=> 'checkbox',
				'field_value' => '',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct2_shadow_x',
				'field_title' 	=> __( 'X Offset', 'mp_stacks'),
				'field_description' 	=> 'Set the shadow offset horizontally. 50 is directly beneath the icon horizontally.',
				'field_type' 	=> 'input_range',
				'field_value' => '50',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct2_shadow_y',
				'field_title' 	=> __( 'Y Offset', 'mp_stacks'),
				'field_description' 	=> 'Set the shadow offset vertically. 50 is directly beneath the icon vertically.',
				'field_type' 	=> 'input_range',
				'field_value' => '50',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct2_shadow_blur',
				'field_title' 	=> __( 'Shadow Blur', 'mp_stacks'),
				'field_description' 	=> 'Set the shadow\'s blurriness.',
				'field_type' 	=> 'input_range',
				'field_value' => '50',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct2_shadow_color',
				'field_title' 	=> __( 'Shadow Color', 'mp_stacks'),
				'field_description' 	=> 'Set the color of the shadow.',
				'field_type' 	=> 'colorpicker',
				'field_value' => '#000',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct2_shadow_opacity',
				'field_title' 	=> __( 'Shadow Opacity', 'mp_stacks'),
				'field_description' 	=> 'Set the opacity of the shadow.',
				'field_type' 	=> 'input_range',
				'field_value' => '100',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
			array(
				'field_id'			=> 'brick_ct2_shadow_weight',
				'field_title' 	=> __( 'Shadow Weight', 'mp_stacks'),
				'field_description' 	=> 'Set the weight of the shadow.',
				'field_type' 	=> 'select',
				'field_select_values' => array( 
					'normal_weight' => __( 'Normal Weight', 'mp_stacks_shadows' ),
					'double_weight' => __( 'Double Weight', 'mp_stacks_shadows' ),
				),
				'field_value' => 'normal_weight',
				'field_showhider' => 'brick_ct2_dropshadow_showhider',
			),
		
	);
	
	
	//Custom filter to allow for add-on plugins to hook in their own data for add_meta_box array
	$mp_stacks_shadows_add_meta_box = has_filter('mp_stacks_shadows_meta_box_array') ? apply_filters( 'mp_stacks_shadows_meta_box_array', $mp_stacks_shadows_add_meta_box) : $mp_stacks_shadows_add_meta_box;
	
	//Custom filter to allow for add on plugins to hook in their own extra fields 
	$mp_stacks_shadows_items_array = has_filter('mp_stacks_shadows_items_array') ? apply_filters( 'mp_stacks_shadows_items_array', $mp_stacks_shadows_items_array) : $mp_stacks_shadows_items_array;
	
	//Create Metabox class
	global $mp_stacks_shadows_meta_box;
	$mp_stacks_shadows_meta_box = new MP_CORE_Metabox($mp_stacks_shadows_add_meta_box, $mp_stacks_shadows_items_array);
}
add_action('mp_brick_metabox', 'mp_stacks_shadows_create_meta_box');