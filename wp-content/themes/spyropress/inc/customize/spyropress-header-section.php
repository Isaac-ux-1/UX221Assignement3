<?php
function spyropress_header_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Navigation
	=========================================*/
	$wp_customize->add_section(
        'header_navigation',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header Navigation','spyropress'),
			'panel'  		=> 'header_section',
		)
    );
	
	
	// Social Head
	$wp_customize->add_setting(
		'nav_social_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'nav_social_head',
		array(
			'type' => 'hidden',
			'label' => __('Social Icon','spyropress'),
			'section' => 'header_navigation',
			'priority'  => 1
		)
	);	
	
	// Social Icons Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hs_nav_social' , 
			array(
			'default' => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hs_nav_social' , 
		array(
			'label'          => __( 'Hide / Show Section', 'spyropress' ),
			'section'        => 'header_navigation',
			'type'           => 'radio',
			'choices'        => 
			array(
				'1' => __( 'Show', 'spyropress' ),
				'0' => __( 'Hide', 'spyropress' )
			)
		) 
	);
	
	// Social Icon Link One // 
	$wp_customize->add_setting(
    	'nav_facebook_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_facebook_link',
		array(
		    'label'   		=> __('Facebook','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);


	// Social Icon Link Two // 
	$wp_customize->add_setting(
    	'nav_linkedin_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_linkedin_link',
		array(
		    'label'   		=> __('LinkedIn','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);


	// Social Icon Link Three // 
	$wp_customize->add_setting(
    	'nav_twitter_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_twitter_link',
		array(
		    'label'   		=> __('Twitter','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Four // 
	$wp_customize->add_setting(
    	'nav_googleplus_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_googleplus_link',
		array(
		    'label'   		=> __('GooglePlus','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Five // 
	$wp_customize->add_setting(
    	'nav_instagram_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_instagram_link',
		array(
		    'label'   		=> __('Instagram','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Six // 
	$wp_customize->add_setting(
    	'nav_dribble_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_dribble_link',
		array(
		    'label'   		=> __('Dribble','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Seven // 
	$wp_customize->add_setting(
    	'nav_github_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_github_link',
		array(
		    'label'   		=> __('Github','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Eight // 
	$wp_customize->add_setting(
    	'nav_bitbucket_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_bitbucket_link',
		array(
		    'label'   		=> __('Bitbucket','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Nine // 
	$wp_customize->add_setting(
    	'nav_skype_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_skype_link',
		array(
		    'label'   		=> __('Skype','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Ten // 
	$wp_customize->add_setting(
    	'nav_skype_action_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_skype_action_link',
		array(
		    'label'   		=> __('Skype Action','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Eleven // 
	$wp_customize->add_setting(
    	'nav_email_link',
    	array(
			'sanitize_callback' => 'sanitize_email',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_email_link',
		array(
		    'label'   		=> __('Email','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);
	
	// Social Icon Link Twlve // 
	$wp_customize->add_setting(
    	'nav_vk_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_vk_link',
		array(
		    'label'   		=> __('Vkontakte','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);
	
	// Social Icon Link Thirteen // 
	$wp_customize->add_setting(
    	'nav_pinterest_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_pinterest_link',
		array(
		    'label'   		=> __('Pinterest','spyropress'),
		    'section' 		=> 'header_navigation',
		)  
	);
	
	
	
	// Contact Info Head
	$wp_customize->add_setting(
		'nav_contact_info_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
			'priority'  => 3
		)
	);

	$wp_customize->add_control(
	'nav_contact_info_head',
		array(
			'type' => 'hidden',
			'label' => __('Contact Info','spyropress'),
			'section' => 'header_navigation',
		)
	);
	
	//  Hide/Show  // 
	$wp_customize->add_setting( 
		'hs_nav_contact_info' , 
			array(
			'default' => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
			'priority'      => 4,
		) 
	);
	
	$wp_customize->add_control( 
	'hs_nav_contact_info', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'spyropress' ),
			'section'     => 'header_navigation',
			'type'        => 'radio', // light, ios, flat
			'choices'        => 
			array(
				'1' => 'Show',
				'0'  => 'Hide'
			) 
		) 
	);		
	
	// Header Contact Number Setting // 
	
	$wp_customize->add_setting(
    	'hdr_nav_contact_icon',
    	array(
	        'default'			=> 'fa-phone',
			'sanitize_callback' => 'specia_sanitize_html',
			'capability' => 'edit_theme_options',
			'priority'      => 5,

		)
	);	
	
	$wp_customize->add_control(
		'hdr_nav_contact_icon',
		array(
		    'label'   		=> __('Icon','spyropress'),
			'type' => 'text',
		    'section' 		=> 'header_navigation',
		)  
	);
	
	$wp_customize->add_setting(
    	'hdr_nav_contact_ttl',
    	array(
			'sanitize_callback' => 'specia_sanitize_html',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'hdr_nav_contact_ttl',
		array(
		    'label'   => __('Title','spyropress'),
		    'section' => 'header_navigation',
			'type' => 'text',
		)  
	);
}

add_action( 'customize_register', 'spyropress_header_setting' );

// Header selective refresh
function spyropress_home_header_section_partials( $wp_customize ){
	
	//hdr_nav_contact_ttl
	$wp_customize->selective_refresh->add_partial( 'hdr_nav_contact_ttl', array(
		'selector'            => '.header-info .widget_info span',
		'settings'            => 'hdr_nav_contact_ttl',
		'render_callback'  => 'spyropress_hdr_nav_contact_ttl_render_callback',	
	) );
	
	}
add_action( 'customize_register', 'spyropress_home_header_section_partials' );

// hdr_nav_contact_ttl
function spyropress_hdr_nav_contact_ttl_render_callback() {
	return get_theme_mod( 'hdr_nav_contact_ttl' );
}