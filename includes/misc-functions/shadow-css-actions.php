<?php 
/**
 * Firefox Shadows can't be added to style tags in the body. So we add it to the CSS in MP Stacks the way we normally do. 
 * Hopefully webkit browsers speed up their drop shadow handling soon so we can do webkit shadows this way too. 
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
 * Filter CSS Output for Content-Type 1 for the container (double weight)
 */
function mp_stacks_shadows_ct1_double_weight($css_output, $post_id ){
		
	//Should we show the shadow?
	$show_shadow = mp_core_get_post_meta( $post_id, 'brick_ct1_shadow_enabled', '' );
	
	if ( $show_shadow ){
		
		//Check if the shadow weight is set to be double_weight
		$shadow_weight = mp_core_get_post_meta( $post_id, 'brick_ct1_shadow_weight', 'normal_weight' );
		
		//If we should apply the shadow again (doubled) on the container
		if ( $shadow_weight == 'double_weight' ){
			$shadow_css = !empty( $show_shadow ) ? mp_core_drop_shadow_css( $post_id, 'brick_ct1_' ) : NULL;
			
			//Return new CSS
			return $css_output . $shadow_css;
		}
		
		//Return CSS as-is
		return $css_output;
		
	}
	else{
		//Return CSS as-is
		return $css_output;
	}

}
add_filter('mp_brick_first_container_css', 'mp_stacks_shadows_ct1_double_weight', 10, 2);


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

/**
 * Filter CSS Output for Content-Type 2 for the container (double weight)
 */
function mp_stacks_shadows_ct2_double_weight($css_output, $post_id ){
		
	//Should we show the shadow?
	$show_shadow = mp_core_get_post_meta( $post_id, 'brick_ct2_shadow_enabled', '' );
	
	if ( $show_shadow ){
		
		//Check if the shadow weight is set to be double_weight
		$shadow_weight = mp_core_get_post_meta( $post_id, 'brick_ct2_shadow_weight', 'normal_weight' );
		
		//If we should apply the shadow again (doubled) on the container
		if ( $shadow_weight == 'double_weight' ){
			$shadow_css = !empty( $show_shadow ) ? mp_core_drop_shadow_css( $post_id, 'brick_ct2_' ) : NULL;
			
			//Return new CSS
			return $css_output . $shadow_css;
		}
		
		//Return CSS as-is
		return $css_output;
			
	}
	else{
		//Return CSS as-is
		return $css_output;
	}

}
add_filter('mp_brick_second_container_css', 'mp_stacks_shadows_ct2_double_weight', 10, 2);
