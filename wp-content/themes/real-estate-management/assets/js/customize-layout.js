/*
** Scripts within the customizer controls window.
*/

(function( $ ) {
	wp.customize.bind( 'ready', function() {

	/*
	** Reusable Functions
	*/
		var optPrefix = '#customize-control-real_estate_management_options-';
		
		// Label
		function real_estate_management_customizer_label( id, title ) {

			// Colors

			if ( id === 'real_estate_management_theme_color' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Header

			if ( id === 'real_estate_management_email_text' || id === 'real_estate_management_topbar_btn_text' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// General Setting

			if ( id === 'real_estate_management_preloader_hide' || id === 'real_estate_management_sticky_header' || id === 'real_estate_management_scroll_hide' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Latest Properties

			if ( id === 'real_estate_management_projects_short_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'real_estate_management_top_slider_page1' || id === 'real_estate_management_phone_text' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'real_estate_management_footer_text_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Post Setting

			if ( id === 'real_estate_management_single_post_thumb' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-real_estate_management_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}


	/*
	** Tabs
	*/

		// Colors
		real_estate_management_customizer_label( 'real_estate_management_theme_color', 'Theme Color' );
		real_estate_management_customizer_label( 'background_color', 'Colors' );
		real_estate_management_customizer_label( 'background_image', 'Image' );

		// Site Identity
		real_estate_management_customizer_label( 'custom_logo', 'Logo Setup' );
		real_estate_management_customizer_label( 'site_icon', 'Favicon' );

		// Header
		real_estate_management_customizer_label( 'real_estate_management_email_text', 'Email' );
		real_estate_management_customizer_label( 'real_estate_management_topbar_btn_text', 'Button' );

		// General Setting
		real_estate_management_customizer_label( 'real_estate_management_preloader_hide', 'Preloader' );
		real_estate_management_customizer_label( 'real_estate_management_sticky_header', 'Sticky Header' );
		real_estate_management_customizer_label( 'real_estate_management_scroll_hide', 'Scroll To Top' );

		// Latest Properties
		real_estate_management_customizer_label( 'real_estate_management_projects_short_title', 'Latest Properties' );

		//Slider
		real_estate_management_customizer_label( 'real_estate_management_top_slider_page1', 'Slider' );
		real_estate_management_customizer_label( 'real_estate_management_phone_text', 'Phone' );

		//Header Image
		real_estate_management_customizer_label( 'header_image', 'Header Image' );

		//Footer
		real_estate_management_customizer_label( 'real_estate_management_footer_text_setting', 'Footer' );

		//Post Setting
		real_estate_management_customizer_label( 'real_estate_management_single_post_thumb', 'Single Post Setting' );
	

	}); // wp.customize ready

})( jQuery );
