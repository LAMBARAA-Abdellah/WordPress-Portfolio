<?php
/**
 * Header Image Display Options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_menu_display_options
 *
 */
if ( !function_exists('portfolio_web_menu_display_options') ) :
	function portfolio_web_menu_display_options() {
		$portfolio_web_menu_display_options =  array(
			'menu-default'      => esc_html__( 'Default', 'portfolio-web' ),
			'menu-classic'      => esc_html__( 'Classic', 'portfolio-web' ),
			'header-transparent'      => esc_html__( 'Transparent', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_menu_display_options', $portfolio_web_menu_display_options );
	}
endif;

/**
 * Menu and Logo Display Options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_header_image_display
 *
 */
if ( !function_exists('portfolio_web_header_image_display') ) :
	function portfolio_web_header_image_display() {
		$portfolio_web_header_image_display =  array(
			'hide'              => esc_html__( 'Hide', 'portfolio-web' ),
			'bg-image'          => esc_html__( 'Background Image', 'portfolio-web' ),
			'normal-image'      => esc_html__( 'Normal Image', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_header_image_display', $portfolio_web_header_image_display );
	}
endif;

/**
 * Menu Right Button Link Options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_menu_right_button_link_options
 *
 */
if ( !function_exists('portfolio_web_menu_right_button_link_options') ) :
	function portfolio_web_menu_right_button_link_options() {
		$portfolio_web_menu_right_button_link_options =  array(
			'disable'       => esc_html__( 'Disable', 'portfolio-web' ),
			'booking'       => esc_html__( 'Popup Widgets ( Booking Form )', 'portfolio-web' ),
			'link'          => esc_html__( 'One Link', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_menu_right_button_link_options', $portfolio_web_menu_right_button_link_options );
	}
endif;

/**
 * Header top display options of elements
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_header_top_display_selection
 *
 */
if ( !function_exists('portfolio_web_header_top_display_selection') ) :
	function portfolio_web_header_top_display_selection() {
		$portfolio_web_header_top_display_selection =  array(
			'hide'          => esc_html__( 'Hide', 'portfolio-web' ),
			'left'          => esc_html__( 'on Top Left', 'portfolio-web' ),
			'right'         => esc_html__( 'on Top Right', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_header_top_display_selection', $portfolio_web_header_top_display_selection );
	}
endif;

/**
 * Feature slider text align
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $portfolio_web_slider_text_align
 *
 */
if ( !function_exists('portfolio_web_slider_text_align') ) :
	function portfolio_web_slider_text_align() {
		$portfolio_web_slider_text_align =  array(
			'alternate'     => esc_html__( 'Alternate', 'portfolio-web' ),
			'text-left'     => esc_html__( 'Left', 'portfolio-web' ),
			'text-right'    => esc_html__( 'Right', 'portfolio-web' ),
			'text-center'   => esc_html__( 'Center', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_slider_text_align', $portfolio_web_slider_text_align );
	}
endif;

/**
 * Featured Slider Image Options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_fs_image_display_options
 *
 */
if ( !function_exists('portfolio_web_fs_image_display_options') ) :
	function portfolio_web_fs_image_display_options() {
		$portfolio_web_fs_image_display_options =  array(
			'full-screen-bg' => esc_html__( 'Full Screen Background', 'portfolio-web' ),
			'responsive-img' => esc_html__( 'Responsive Image', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_fs_image_display_options', $portfolio_web_fs_image_display_options );
	}
endif;

/**
 * Feature Info number
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_feature_info_number
 *
 */
if ( !function_exists('portfolio_web_feature_info_number') ) :
	function portfolio_web_feature_info_number() {
		$portfolio_web_feature_info_number =  array(
			1               => esc_html__( '1', 'portfolio-web' ),
			2               => esc_html__( '2', 'portfolio-web' ),
			3               => esc_html__( '3', 'portfolio-web' ),
			4               => esc_html__( '4', 'portfolio-web' ),
		);
		return apply_filters( 'portfolio_web_feature_info_number', $portfolio_web_feature_info_number );
	}
endif;

/**
 * Footer copyright beside options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_footer_copyright_beside_option
 *
 */
if ( !function_exists('portfolio_web_footer_copyright_beside_option') ) :
	function portfolio_web_footer_copyright_beside_option() {
		$portfolio_web_footer_copyright_beside_option =  array(
			'hide'          => esc_html__( 'Hide', 'portfolio-web' ),
			'social'        => esc_html__( 'Social Links', 'portfolio-web' ),
			'footer-menu'   => esc_html__( 'Footer Menu', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_footer_copyright_beside_option', $portfolio_web_footer_copyright_beside_option );
	}
endif;

/**
 * Button design options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_button_design
 *
 */
if ( !function_exists('portfolio_web_button_design') ) :
	function portfolio_web_button_design() {
		$portfolio_web_button_design =  array(
			'rectangle'         => esc_html__( 'Rectangle', 'portfolio-web' ),
			'rounded-rectangle' => esc_html__( 'Rounded Rectangle', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_button_design', $portfolio_web_button_design );
	}
endif;

/**
 * Sidebar layout options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_sidebar_layout
 *
 */
if ( !function_exists('portfolio_web_sidebar_layout') ) :
    function portfolio_web_sidebar_layout() {
        $portfolio_web_sidebar_layout =  array(
	        'right-sidebar' => esc_html__( 'Right Sidebar', 'portfolio-web' ),
	        'left-sidebar'  => esc_html__( 'Left Sidebar' , 'portfolio-web' ),
	        'both-sidebar'  => esc_html__( 'Both Sidebar' , 'portfolio-web' ),
	        'middle-col'    => esc_html__( 'Middle Column' , 'portfolio-web' ),
	        'no-sidebar'    => esc_html__( 'No Sidebar', 'portfolio-web' )
        );
        return apply_filters( 'portfolio_web_sidebar_layout', $portfolio_web_sidebar_layout );
    }
endif;

/**
 * Blog layout options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_blog_archive_feature_layout
 *
 */
if ( !function_exists('portfolio_web_blog_archive_feature_layout') ) :
    function portfolio_web_blog_archive_feature_layout() {
        $portfolio_web_blog_archive_feature_layout =  array(
            'left-image'    => esc_html__( 'Show Image', 'portfolio-web' ),
            'no-image'      => esc_html__( 'No Image', 'portfolio-web' )
        );
        return apply_filters( 'portfolio_web_blog_archive_feature_layout', $portfolio_web_blog_archive_feature_layout );
    }
endif;

/**
 * Blog content from
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_blog_archive_content_from
 *
 */
if ( !function_exists('portfolio_web_blog_archive_content_from') ) :
	function portfolio_web_blog_archive_content_from() {
		$portfolio_web_blog_archive_content_from =  array(
			'excerpt'    => esc_html__( 'Excerpt', 'portfolio-web' ),
			'content'    => esc_html__( 'Content', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_blog_archive_content_from', $portfolio_web_blog_archive_content_from );
	}
endif;

/**
 * Image Size
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_get_image_sizes_options
 *
 */
if ( !function_exists('portfolio_web_get_image_sizes_options') ) :
	function portfolio_web_get_image_sizes_options( $add_disable = false ) {
		global $_wp_additional_image_sizes;
		$choices = array();
		if ( true == $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'portfolio-web' );
		}
		foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
			$choices[ $_size ] = $_size . ' ('. get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
		}
		$choices['full'] = esc_html__( 'full (original)', 'portfolio-web' );
		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {

			foreach ($_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key . ' ('. $size['width'] . 'x' . $size['height'] . ')';
			}
		}
		return apply_filters( 'portfolio_web_get_image_sizes_options', $choices );
	}
endif;

/**
 * Pagination Options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array portfolio_web_pagination_options
 *
 */
if ( !function_exists('portfolio_web_pagination_options') ) :
	function portfolio_web_pagination_options() {
		$portfolio_web_pagination_options =  array(
			'default'  => esc_html__( 'Default', 'portfolio-web' ),
			'numeric'  => esc_html__( 'Numeric', 'portfolio-web' )
		);
		return apply_filters( 'portfolio_web_pagination_options', $portfolio_web_pagination_options );
	}
endif;

/**
 * Breadcrumb Options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array portfolio_web_breadcrumb_options
 *
 */
if ( !function_exists('portfolio_web_breadcrumb_options') ) :
	function portfolio_web_breadcrumb_options() {
		$portfolio_web_breadcrumb_options =  array(
			'hide'  => esc_html__( 'Hide', 'portfolio-web' ),
		);
		if ( function_exists('yoast_breadcrumb') ) {
			$portfolio_web_breadcrumb_options['yoast'] = esc_html__( 'Yoast', 'portfolio-web' );
		}
		if ( function_exists('bcn_display') ) {
			$portfolio_web_breadcrumb_options['bcn'] = esc_html__( 'Breadcrumb NavXT', 'portfolio-web' );
		}
		return apply_filters( 'portfolio_web_pagination_options', $portfolio_web_breadcrumb_options );
	}
endif;