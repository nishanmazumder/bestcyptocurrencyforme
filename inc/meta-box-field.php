<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
   
    // Background area
  $meta_boxes[] = array(
		'id' => 'cd_short_bg',
		'title' => esc_html__( 'Short Page Background', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_short_page_bg',
				'name' => esc_html__( 'Page background', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#38A4BC',
			),
			array(
				'id' => $prefix . 'cd_short_content_header_bg',
				'name' => esc_html__( 'Content Header BG', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_post_bg',
				'name' => esc_html__( 'Content Desciption BG', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#09455D',
			),

		),
	);
   
  // Back Link
  $meta_boxes[] = array(
		'id' => 'cd_post_back_link',
		'title' => esc_html__( 'Back to page', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_back_page',
				'type' => 'text',
				'name' => esc_html__( 'Previous Page', 'metabox-online-generator' ),
				'size' => 80,
				'std' => '&#8656;  Previous Question',
			),
			array(
				'id' => $prefix . 'cd_back_page_link',
				'type' => 'url',
				'name' => esc_html__( 'Previous Page link', 'metabox-online-generator' ),
				'size' => 80,
				'std' => 'https://www.google.com',
			),
			array(
				'id' => $prefix . 'cd_back_page_color',
				'name' => esc_html__( 'Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#09455d',
			),

		),
	);
   
   // Main title area
  $meta_boxes[] = array(
		'id' => 'cd_main_title_short',
		'title' => esc_html__( 'Main Title', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_main_title_color',
				'name' => esc_html__( 'Main title Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),

		),
	);
   
  // Round title area
  $meta_boxes[] = array(
		'id' => 'cd_run_start_up',
		'title' => esc_html__( 'Round title option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_startup_text',
				'type' => 'text',
				'name' => esc_html__( 'Round Text', 'metabox-online-generator' ),
				'std' => 'Run a startup',
			),
			array(
				'id' => $prefix . 'cd_header_text_color',
				'name' => esc_html__( 'Round Text Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_header_text_bg_color',
				'name' => esc_html__( 'Round Text Background', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#0C8FB3',
			),
		),
	);
  
  // Main Post area
  $meta_boxes[] = array(
		'id' => 'cd_main_post_area_short',
		'title' => esc_html__( 'Main Post option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_post_title',
				'type' => 'text',
				'name' => esc_html__( 'Post Headings', 'metabox-online-generator' ),
				'std' => 'Swift',
			),
			array(
				'id' => $prefix . 'cd_post_description',
				'name' => esc_html__( 'Post Description', 'metabox-online-generator' ),
				'type' => 'wysiwyg',
				'std' => 'If you want to develop native iOS or Mac OS apps, then you basically need to learn Swift. Native apps outperform cross-platform hybrid apps, and the built-in SpriteKit makes it easier than ever to build 2D games with Swift.',
			),

		),
	);
  
  
   // Social link area
	$meta_boxes[] = array(
		'id' => 'cd_short_meta',
		'title' => esc_html__( 'Social link Option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_social_color',
				'name' => esc_html__( 'Social Button Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#186677',
			),
			array(
				'id' => $prefix . 'cd_social_color_bg',
				'name' => esc_html__( 'Social Button Background', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_social_color_bg_hover',
				'name' => esc_html__( 'Social Button Hover', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#CDD9DE',
			),
		),
	);
	
  // Post Button
  $meta_boxes[] = array(
		'id' => 'cd_btn_area',
		'title' => esc_html__( 'Post Button', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_btn_text',
				'type' => 'text',
				'name' => esc_html__( 'Related Post', 'metabox-online-generator' ),
				'size' => 80,
				'std' => 'Learn WHY Swift is the best for you   &#8658;',
			),
			array(
				'id' => $prefix . 'cd_btn_text_link',
				'type' => 'url',
				'name' => esc_html__( 'Related Post Link', 'metabox-online-generator' ),
				'std' => 'https://www.google.com',
			),
			array(
				'id' => $prefix . 'cd_btn_text_color',
				'name' => esc_html__( 'Button text Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#186677',
			),
			array(
				'id' => $prefix . 'cd_btn_bg',
				'name' => esc_html__( 'Button Bg', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_btn_bg_hover',
				'name' => esc_html__( 'Button Bg Hover Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#CDD9DE',
			),

		),
	);
	
 // Post Direction
  $meta_boxes[] = array(
		'id' => 'cd_post_direction',
		'title' => esc_html__( 'Post Direction', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_start_again_text',
				'type' => 'text',
				'name' => esc_html__( 'Start again', 'metabox-online-generator' ),
				'std' => 'Start Again !',
			),
			array(
				'id' => $prefix . 'cd_start_again_link',
				'type' => 'url',
				'size' => 80,
				'name' => esc_html__( 'Start again link', 'metabox-online-generator' ),
				'std' => 'https://www.google.com',
			),
			array(
				'id' => $prefix . 'cd_start_again_color',
				'name' => esc_html__( 'Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#007bff',
			),
			array(
				'id' => $prefix . 'cd_start_again_color_hover',
				'name' => esc_html__( 'Hover Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#0056B0',
			),
		),
	);
	
  // Advertisement area 
  $meta_boxes[] = array(
		'id' => 'cd_ad_area_short',
		'title' => esc_html__( 'Advertisement', 'metabox-online-generator' ),
		'post_types' => array( 'cd-short' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_add_img',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Embed your addv.', 'metabox-online-generator' ),
			),

		),
	);
  
  
  //////////////////////////////////////////////
   // Long Answer page
   
   // Background area
  $meta_boxes[] = array(
		'id' => 'cd_long_bg',
		'title' => esc_html__( 'Long Page Background', 'metabox-online-generator' ),
		'post_types' => array( 'cd-long' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_long_page_bg',
				'name' => esc_html__( 'Page background', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#09455D',
			),
			array(
				'id' => $prefix . 'cd_long_content_header_bg',
				'name' => esc_html__( 'Content Header BG', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#042C3C',
			),
			array(
				'id' => $prefix . 'cd_long_post_bg',
				'name' => esc_html__( 'Content Desciption BG', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),

		),
	);
  
   // Header area
  $meta_boxes[] = array(
		'id' => 'cd_long_answer_option',
		'title' => esc_html__( 'Header Option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-long'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_post_meta_long',
				'type' => 'text',
				'name' => esc_html__( 'Post date', 'metabox-online-generator' ),
				'size' => 80,
				'std' => 'All data used in this article is as of January 6, 2016',
			),
			array(
				'id' => $prefix . 'cd_main_title_color_long',
				'name' => esc_html__( 'Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_post_description_long',
				'name' => esc_html__( 'Header Text', 'metabox-online-generator' ),
				'type' => 'wysiwyg',
				'std' => '<p style="color: #fff;">If you want to develop native iOS or Mac OS apps, then you basically need to learn Swift. Native apps outperform cross-platform hybrid apps, and the built-in SpriteKit makes it easier than ever to build 2D games with Swift</p>',
			),
			array(
				'id' => $prefix . 'cd_post_description_long_link',
				'type' => 'text',
				'name' => esc_html__( 'Title Link', 'metabox-online-generator' ),
				'size' => 80,
				'std' => 'If you want to RUN A STARTUP, this is the language for you &#8827;',
			),
			array(
				'id' => $prefix . 'cd_post_description_long_link_color',
				'name' => esc_html__( 'Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#0056B3',
			),
			array(
				'id' => $prefix . 'cd_post_description_long_link_color_hover',
				'name' => esc_html__( 'Hover', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#042C3C',
			),

		),
	);
	
// Long Answer post area
  $meta_boxes[] = array(
		'id' => 'cd_long_answer',
		'title' => esc_html__( 'Post Details', 'metabox-online-generator' ),
		'post_types' => array( 'cd-long'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_post_description_long_2',
				'name' => esc_html__( 'Main Description', 'metabox-online-generator' ),
				'type' => 'wysiwyg',
				'std' => 'If you want to develop native iOS or Mac OS apps, then you basically need to learn Swift. Native apps outperform cross-platform hybrid apps, and the built-in SpriteKit makes it easier than ever to build 2D games with Swift.',
			),
			array(
				'id' => $prefix . 'cd_tst_img',
				'name' => esc_html__( 'Image', 'metabox-online-generator' ),
				'type' => 'image_advanced',
			),

		),
	);
	
	// Social link area
	$meta_boxes[] = array(
		'id' => 'cd_short_meta_long',
		'title' => esc_html__( 'Social link Option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-long'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_social_color_long',
				'name' => esc_html__( 'Social Button Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#186677',
			),
			array(
				'id' => $prefix . 'cd_social_color_bg_long',
				'name' => esc_html__( 'Social Button Background', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_social_color_bg_hover_long',
				'name' => esc_html__( 'Social Button Hover', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#CDD9DE',
			),
		),
	);
  
	// Post Direction
  $meta_boxes[] = array(
		'id' => 'cd_post_direction_btn_long',
		'title' => esc_html__( 'Related Post Button', 'metabox-online-generator' ),
		'post_types' => array( 'cd-long'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_post_related_btn_long',
				'type' => 'text',
				'size' => 80,
				'name' => esc_html__( 'Related link button', 'metabox-online-generator' ),
				'std' => 'Ready to Learn? Click here for free lesson',
			),
			array(
				'id' => $prefix . 'cd_post_related_btn_link_long',
				'type' => 'url',
				'size' => 80,
				'name' => esc_html__( 'Post Link', 'metabox-online-generator' ),
				'std' => 'https://www.twitter.com',
			),
			array(
				'id' => $prefix . 'cd_post_related_btn_color_long',
				'name' => esc_html__( 'Button Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#38A4BF',
			),
			array(
				'id' => $prefix . 'cd_post_related_btn_txt_color_long',
				'name' => esc_html__( 'Button Text Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_post_related_btn_link_hover_long',
				'name' => esc_html__( 'Hover Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#73BFD2',
			),
		),
	);
	
// Post Link
  $meta_boxes[] = array(
		'id' => 'cd_post_direction_long',
		'title' => esc_html__( 'Post link', 'metabox-online-generator' ),
		'post_types' => array( 'cd-long'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_post_link_long',
				'type' => 'text',
				'size' => 80,
				'name' => esc_html__( 'Link Text', 'metabox-online-generator' ),
				'std' => 'What is the best programming language for me?',
			),
			array(
				'id' => $prefix . 'cd_post_link_long_link_long',
				'type' => 'url',
				'size' => 80,
				'name' => esc_html__( 'Link url', 'metabox-online-generator' ),
				'std' => 'https://www.twitter.com',
			),
			array(
				'id' => $prefix . 'cd_post_related_btn_color_long',
				'name' => esc_html__( 'Link Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#007bff',
			),
			array(
				'id' => $prefix . 'cd_post_related_btn_link_hover_long',
				'name' => esc_html__( 'Link Hover Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#0056B0',
			),
		),
	);
	
	// Block Page area
	
	// Page Background
	
	  $meta_boxes[] = array(
			'id' => 'cd_bg_block',
			'title' => esc_html__( 'Page Background', 'metabox-online-generator' ),
			'post_types' => array( 'cd-block'),
			'context' => 'advanced',
			'priority' => 'default',
			'autosave' => true,
			'fields' => array(
				array(
					'id' => $prefix . 'cd_block_bg',
					'name' => esc_html__( 'Title', 'metabox-online-generator' ),
					'type' => 'color',
					'std' => '#fff',
				),
			),
		);
	
	// Social link area
	$meta_boxes[] = array(
		'id' => 'cd_block_meta',
		'title' => esc_html__( 'Social link Option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-block' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
		
			array(
				'id' => $prefix . 'cd_social_color_block',
				'name' => esc_html__( 'Social Button Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#186677',
			),
			array(
				'id' => $prefix . 'cd_social_color_block_hover',
				'name' => esc_html__( 'Social Button Hover', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#CDD9DE',
			),
		),
	);
	
	
	// Title
	  $meta_boxes[] = array(
			'id' => 'cd_title_block',
			'title' => esc_html__( 'Title Color', 'metabox-online-generator' ),
			'post_types' => array( 'cd-block'),
			'context' => 'advanced',
			'priority' => 'default',
			'autosave' => true,
			'fields' => array(
				array(
					'id' => $prefix . 'cd_title_color_block',
					'name' => esc_html__( 'Title Color', 'metabox-online-generator' ),
					'type' => 'color',
					'std' => '#186677',
				),
			),
		);
	
	// Block sub Page area
	
	// Page Background
	
		  $meta_boxes[] = array(
				'id' => 'cd_bg_block_sub',
				'title' => esc_html__( 'Background', 'metabox-online-generator' ),
				'post_types' => array( 'cd-sub-block'),
				'context' => 'advanced',
				'priority' => 'default',
				'autosave' => true,
				'fields' => array(
					array(
						'id' => $prefix . 'cd_block_bg',
						'name' => esc_html__( 'Page Background', 'metabox-online-generator' ),
						'type' => 'color',
						'std' => '#fff',
					),
					array(
						'id' => $prefix . 'cd_block_sub_page_bg',
						'name' => esc_html__( 'Page Border Background', 'metabox-online-generator' ),
						'type' => 'color',
						'std' => '#0C8FB3',
					),
				),
			);
	
		// Title
	  $meta_boxes[] = array(
			'id' => 'cd_title_block_sub',
			'title' => esc_html__( 'Title', 'metabox-online-generator' ),
			'post_types' => array( 'cd-sub-block'),
			'context' => 'advanced',
			'priority' => 'default',
			'autosave' => true,
			'fields' => array(
				array(
					'id' => $prefix . 'cd_title_color_block_sub',
					'name' => esc_html__( 'Title Color', 'metabox-online-generator' ),
					'type' => 'color',
					'std' => '#186677',
				),
				array(
					'id' => $prefix . 'cd_title_border_color_block_sub',
					'name' => esc_html__( 'Title Border Color', 'metabox-online-generator' ),
					'type' => 'color',
					'std' => '#186677',
				),
			),
		);
	
	
		// Previous Link
		
		$meta_boxes[] = array(
			'id' => 'cd_prv_text_block_sub',
			'title' => esc_html__( 'Previous Link', 'metabox-online-generator' ),
			'post_types' => array( 'cd-sub-block'),
			'context' => 'advanced',
			'priority' => 'default',
			'autosave' => true,
			'fields' => array(
				array(
					'id' => $prefix . 'cd_prv_block_sub',
					'type' => 'text',
					'name' => esc_html__( 'Previous Page', 'metabox-online-generator' ),
					'size' => 80,
					'std' => '&#8656;  Previous Question',
				),
				array(
					'id' => $prefix . 'cd_prv_link_sub',
					'type' => 'url',
					'name' => esc_html__( 'Previous Page link', 'metabox-online-generator' ),
					'size' => 80,
					'std' => 'https://www.google.com',
				),
				array(
					'id' => $prefix . 'cd_prv_txt_color_sub',
					'name' => esc_html__( 'Color', 'metabox-online-generator' ),
					'type' => 'color',
					'std' => '#0C8FB3',
				),
			),
		);
	
	
		// Round title area
		$meta_boxes[] = array(
		'id' => 'cd_run_start_up_block_sub',
		'title' => esc_html__( 'Round title option', 'metabox-online-generator' ),
		'post_types' => array( 'cd-sub-block' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cd_startup_text_sub_block',
				'type' => 'text',
				'name' => esc_html__( 'Round Text', 'metabox-online-generator' ),
				'std' => 'Run a startup',
			),
			array(
				'id' => $prefix . 'cd_header_text_color_sub_block',
				'name' => esc_html__( 'Round Text Color', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#fff',
			),
			array(
				'id' => $prefix . 'cd_header_text_bg_color_sub_block',
				'name' => esc_html__( 'Round Text Background', 'metabox-online-generator' ),
				'type' => 'color',
				'std' => '#0C8FB3',
			),
		),
	);
	
	
	
	
    return $meta_boxes;
}
	
	


