<?php
/**
 * travel Options Page
 * @ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'travel';
}

function optionsframework_options() {
	
	// add_filter( 'wp_default_editor', create_function('', 'return "html";') ); 
	
	$wp_editor_settings = array(
		'wpautop' => false, // Default
		'textarea_rows' => 5,
		'editor_css' => '<style>.wp-editor-tools, .quicktags-toolbar { visibility: hidden; height:0px;} </style>',
		'teeny' => true,
		'tinymce' => false,
		'quicktags' => false
	);	
	
	$wp_editor_settingst = array(
		'wpautop' => false, // Default
		'textarea_rows' => 2,
		'editor_css' => '<style>.wp-editor-tools, .quicktags-toolbar { visibility: hidden; height:0px;} </style>',
		'teeny' => true,
		'tinymce' => false,
		'quicktags' => false
	);	
	
	$alignpos = array ( 'left' => 'Left Position', 'center' => 'Center Position', 'right' => 'Right Position' );
	
	
// Maintenance Page Settings	
	$options[] = array(
		'name' => 'Maintenance Mode', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Activate Maintenance Mode',
		'desc' => 'Check it if you want to Activate Maintenance Mode', 
		'id' => 'mmactive',
		'std' => '0',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Timeline', 
		'desc' => 'Set the Timeline Year. Such As: '.date('Y'), 
		'id' => 'timeliney',
		'std' => date('Y'),
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'desc' => 'Set the Timeline Month. Such As: '.date('m'),  
		'id' => 'timelinem',
		'std' => date('m'),
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'desc' => 'Set the Timeline Day. Such As: '.date('d'),  
		'id' => 'timelined',
		'std' => date('d'),
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'name' => 'Heading Text',
		'desc' => 'Set the Heading Text',  
		'id' => 'uct1',
		'std' => 'We are working our butts off to finish this website',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Heading Description',
		'desc' => 'Set the Heading Description',  
		'id' => 'uct2',
		'std' => 'Our developers, are doing their best to finish this website before the counter, but we can not help them.',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'E-Mail Box Text',
		'desc' => 'Set the E-Mail Box Text',  
		'id' => 'uct3',
		'std' => 'Input your e-mail address here...',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'E-Mail Button Text',
		'desc' => 'Set the E-Mail Button Text',  
		'id' => 'uct4',
		'std' => 'Let Me Notified',
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'name' => 'Social Items Text',
		'desc' => 'Set the Social Items Text',  
		'id' => 'uct5',
		'std' => 'Learn More from our Social Pages',
		'type' => 'text');	
		
	
	
	
// General		
	$options[] = array(
		'name' => 'General',
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Site Favicon',
		'desc' => 'Upload an Icon for the Site Favicon. 16px X 16px image is recommended.',
		'id' => 'favicon',
		'std' => get_template_directory_uri() . '/images/favicon.ico',
		'type' => 'upload');	

	$options[] = array(
		'name' => 'Company Logo (If Logo is not present Site Title will be displayed)',
		'desc' => 'Upload an image for the Company Logo. 300px X 70px image is recommended. If you do not want to show the logo please leave the box blank. Thus your Site Title will be displayed.',
		'id' => 'site-logo',
		'std' => get_template_directory_uri() . '/images/logo.png',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Logo Position', 
		'desc' => 'Set top Logo Position. Default is <b>Left Position</b>', 
		'id' => 'logopos',
		'std' => 'left',
		'type' => 'radio',
		'options' => $alignpos );
		
	$options[] = array(
		'name' => 'Show Site Logo in Login Page',
		'desc' => 'Check it if you want to show Site Logo in Login Page', 
		'id' => 'login-logo',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Fixed Header/Main Menu during Scrolling ?',
		'desc' => 'Check it if you want to show Fixed Header/Main Menu during Scrolling', 
		'id' => 'header-fixed',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Post Featured Image Background',
		'desc' => 'Upload an image for the Common Background of Featured/ Thumbnail Image on every Post. 900px X 300px image is recommended. If your post has no featured image attached, this background will be displayed. Otherwise your post featured image will be displayed. You are recommended to attach the Featured Image during new Post Creation or Editing.',
		'id' => 'ft-back',
		'std' => get_template_directory_uri() . '/images/thumb-back.jpg',
		'type' => 'upload');
		
	$options[] = array(
		'name' => "Site Layout",
		'desc' => "You can set the Site Layout for Whole the Site.",
		'id' => "site-layout",
		'std' => "2c-r-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => get_template_directory_uri() . '/images/1col.png',
			'2c-l-fixed' => get_template_directory_uri() . '/images/2cl.png',
			'2c-r-fixed' => get_template_directory_uri() . '/images/2cr.png')
	);
	
	
	$options[] = array(
		'name' => 'Use Responsive Layout', 
		'desc' => 'Check the Box if you want the Responsive Layout of your Website', 
		'id' => 'responsive',
		'std' => '1',
		'type' => 'checkbox');	
		
	$site_background_defaults = array(
		'color' => '#E4E8E9',
		'image' => get_template_directory_uri() . '/images/background.jpg',
		'repeat' => 'no-repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );
		
	$options[] = array(
		'name' => 'Set Site Background', 
		'desc' => 'You can set the WebSite Background here. Defaults: <b>#E4E8E9  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '. get_template_directory_uri() . '/images/background.jpg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Repeat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Top Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scroll Normally </b>' ,
		'id' => 'website-back',
		'std' => $site_background_defaults,
		'type' => 'background' );
		
	$options[] = array(
		'name' => 'Custom Code within Head Area',
		'desc' => 'You can input any Custom Code Here like Google Analytics Code, CSS, Java Script etc.',
		'id' => 'headcode',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => 'Show Log In Panel on the Top',
		'desc' => 'Show Log In and Membership Panel to the Top.',
		'id' => 'lbox-check',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Show Search Box on the Top Right Corner',
		'desc' => 'Show Search Box on the Top Right Corner of the Site.',
		'id' => 'sbox-check',
		'std' => '1',
		'type' => 'checkbox' );		
		
	$contype = array( '1' => 'Full Content in Blog Page. Also Support Read More Button if inserted during Editing.', '2' => 'Some Words and Read More Button in the Blog Page' );
	
	$options[] = array(
		'name' => 'Select the Content Type in the Blog Page.',
		'desc' => 'Select whether you want to show the Full / Selected Content or Some Words and Read More Button Automatically.', 
		'id' => 'contype',
		'std' => '1',
		'type' => 'radio',
		'options' => $contype);
		
	$options[] = array(
		'name' => 'Copyright Notice',
		'desc' => 'You can input your copyright notice or other links like sitemap here.',
		'id' => 'copyright',
		'std' => '&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) . ', All Rights Reserved',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
		'name' => 'Author and WordPress Credit',
		'desc' => 'Hide Author and CMS Creadit from Footer',
		'id' => 'credit',
		'std' => '0',
		'type' => 'checkbox' );	
	
	$options[] = array(
		'name' => 'Featured/ Thumbnail Image in Pages',
		'desc' => 'Hide Featured/ Thumbnail Images from All Pages',
		'id' => 'tpage',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Meta Data like Date, Author Name, Tags, Categories etc. in Posts',
		'desc' => 'Hide the Meta Data like Date, Author Name, Tags, Categories etc. from all Posts',
		'id' => 'tmpost',
		'std' => '0',
		'type' => 'checkbox' );	
	
	$options[] = array(
		'name' => 'Featured/ Thumbnail Image in Posts and Pages',
		'desc' => 'Hide Featured/ Thumbnail Images from All Posts and Pages, This will also hide the Meta Dats like Date, Author Name, Tags, Categories etc.',
		'id' => 'tpost',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Post/Image Navigation',
		'desc' => 'Hide Post/Image Navigation from All Posts',
		'id' => 'navpost',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Comments Box',
		'desc' => 'Hide WordPress Comments Box from All Pages',
		'id' => 'cpage',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'desc' => 'Hide WordPress Comments Box from All Posts',
		'id' => 'cpost',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Hide Admin Bar',
		'desc' => 'Hide WordPress Admin Bar for Logged In Users',
		'id' => 'admin-bar',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$fposttype = array( '1' => 'Do not Show any Post or Page in the Front Page.', '2' => 'Show Posts or Page and Left/Right Sidebar.', '3' => 'Show Posts or Page Full Width without Left/Right Sidebar.' );
	
	$options[] = array(
		'name' => 'Front Page Post/Page Visibility', 
		'desc' => 'Select Option how you want to show or do not show Posts/Pages in the Front Page', 
		'id' => 'fpostex',
		'std' => '1',
		'type' => 'radio',
		'options' => $fposttype);
		
	$options[] = array(
		'name' => 'Show only the Selected Posts in Front Page',
		'desc' => 'Check this Box to Show only the Selected Posts in Front Page',
		'id' => 'sel-post',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Some Words and Read More Button in the Front Page Blog',
		'desc' => 'Show Some Words and Read More Button in the Front Page Blog',
		'id' => 'sfsw-check',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Front Page Recent News/Post Section Heading', 
		'desc' => 'First Part of Heading', 
		'id' => 'fnews01-title',
		'std' => 'Recent',
		'type' => 'text',
		'class' => 'mini');
	
	$options[] = array(
		'desc' => 'Second Part of Heading', 
		'id' => 'fnews02-title',
		'std' => 'News',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Contact Number',
		'desc' => 'Set Your Contact Number',
		'id' => 'contactnumber',
		'std' => '(000) 111-222',
		'type' => 'text',
		'class' => 'mini');
		
	
	$options[] = array(
		'desc' => '<span class="featured-area-title sub-item">Front Page Parts Ordering</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Activate This Ordering for Front Page Components', 
		'desc' => 'Check the Box if you want to activate This Ordering for Front Page Components', 
		'id' => 'fporder-check',
		'std' => '0',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
$fpoarray = array( 	'slide'=>'Main Slider',
					'featuredb'=>'Featured Boxes', 
					'gallery'=>'Gallery',
					'contact'=>'Contact Box',
					'wpblog'=>'Blog Index or Page',
					'clients'=>'Clients List', 
					'testimonial'=>'Clients Testimonials' 
				);
	
		
	$options[] = array(
		'name' => 'Front Page Parts Ordering',
		'desc' => 'Drag and Drop Parts to Reorder the Front Page Components. You can Hide/Disable any Part from the Settings Page of Specific Part',
		'id' => 'fporder',
		'std' => $fpoarray,
		'type' => 'sorter'
	);	
		
	
// Social Links	
	$options[] = array(
		'name' => 'Social Links', 
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Top Social Menu Bar Position', 
		'desc' => 'Set top Social Menubar Position. Default is <b>Center Position</b>', 
		'id' => 'topmbp',
		'std' => 'center',
		'type' => 'radio',
		'options' => $alignpos );
	

	$options[] = array(
		'name' => 'Number of Social Links', 
		'desc' => 'Set the Number of Social Links you want.', 
		'id' => 'nslinks',
		'std' => '5',
		'type' => 'text',
		'class' => 'mini');
		
	$numslinks = of_get_option('nslinks', '5');
	foreach (range(1, $numslinks ) as $numslinksn) {
		
	$options[] = array(
		'name' => 'Social Link - '. $numslinksn, 
		'desc' => 'Input Your Social Page Link. Example: <b>http://facebook.com/d5creation</b>.  If you do not want to show anything here leave the box blank.', 
		'id' => 'sl' . $numslinksn,
		'std' => '#',
		'type' => 'text');	
		
	}
	
	
	$options[] = array(
		'name' => 'Hero Slider', 
		'type' => 'heading');

	$options[] = array(
		'name' => 'Hero Slide Count', 
		'desc' => 'Set the Hero Slide Count', 
		'id' => 'hero-slide-count',
		'std' => '1',
		'type' => 'select',
		'options' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3'
		));

	$slideCount = of_get_option('hero-slide-count', '1');
	foreach (range(1, $slideCount ) as $slide ) {
		$options[] = array(
			'desc' => '<span class="featured-area-title sub-item">Hero Slide - '.$slide.'</span>', 
			'type' => 'info');

		$options[] = array(
			'name' => 'Hero Slide - '.$slide,
			'desc' => 'Set the Hero Slide - '.$slide, 
			'id' => 'hero-slide-'.$slide,
			'std' => get_template_directory_uri() . '/images/hero-slide-'.$slide.'.jpg',
			'type' => 'upload' );
	}


	$options[] = array(
		'name' => 'Location Slider', 
		'type' => 'heading');

	$options[] = array(
		'name' => 'Locations', 
		'desc' => 'Set the Locations("," seperated)', 
		'id' => 'locations',
		'std' => 'Location1,Location2',
		'type' => 'text'
	);

	$locations = explode(',',of_get_option('locations', 'Location1,Location2'));
	foreach ($locations as $location) {
		$locationsName = $location;
		$location = str_replace(' ', '-', strtolower($location));
		
		$options[] = array(
			'desc' => '<span class="featured-area-title sub-item">'.$locationsName.'</span>', 
			'type' => 'info');

		$options[] = array(
			'name' => $locationsName.' Image',
			'desc' => 'Set the '.$locationsName.' Image', 
			'id' => $location.'-image',
			'std' => get_template_directory_uri() . '/images/'.$location.'-image.jpg',
			'type' => 'upload' );

		$options[] = array(
			'name' => $locationsName.' Link', 
			'desc' => 'Set the '.$locationsName.' Link', 
			'id' => $location.'-link',
			'std' => '#',
			'type' => 'text'
		);
	}

	return $options;
}
