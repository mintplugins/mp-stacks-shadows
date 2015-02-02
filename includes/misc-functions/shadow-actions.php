<?php 
/**
 * Filter CSS Output for Content-Type 1
 */
function mp_stacks_shadows_ct1($css_output, $post_id ){
		
	//Should we show the shadow?
	$show_shadow = mp_core_get_post_meta( $post_id, 'brick_ct1_shadow_enabled', '' );
	
	if ( $show_shadow ){
		$shadow_css = !empty( $show_shadow ) ? mp_core_drop_shadow_css( $post_id, 'brick_ct1_' ) : NULL;
			
		//Return new CSS
		return $css_output . $shadow_css;
	}
	else{
		//Return CSS as-is
		return $css_output;
	}

}
add_filter('mp_brick_first_content_type_css_filter', 'mp_stacks_shadows_ct1', 10, 2);


/**
 * Filter CSS Output for Content-Type 1
 */
function mp_stacks_shadows_ct2($css_output, $post_id ){
		
	//Should we show the shadow?
	$show_shadow = mp_core_get_post_meta( $post_id, 'brick_ct2_shadow_enabled', '' );
	
	if ( $show_shadow ){
		$shadow_css = !empty( $show_shadow ) ? mp_core_drop_shadow_css( $post_id, 'brick_ct2_' ) : NULL;
			
		//Return new CSS
		return $css_output . $shadow_css;
	}
	else{
		//Return CSS as-is
		return $css_output;
	}

}
add_filter('mp_brick_second_content_type_css_filter', 'mp_stacks_shadows_ct2', 10, 2);
