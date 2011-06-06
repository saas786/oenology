<?php
/**
 * Oenology Theme Custom Hooks
 *
 * This file defines custom action and filter hooks for the Oenology Theme.
 *
 * The first section defines action hooks, which are used to append to Oenology Theme
 * template locations, and which are generally defined using terms descriptive of their
 * location, and suffixed with "_before" or "_after".
 *
 * The second section defines filter hooks, which are used to add to or to replace content
 * generated by Oenology Theme, and which are generally defined using terms descriptive of
 * their content function/location.
 *
 * In almost all cases, a given filter hook will have accompanying "_before" and "_after"
 * action hooks. This arrangement facilitates appending content before and/or after
 * Theme-generated content, or to change and/or replace entirely all Theme-generated content.
 *
 * For more information on hooks, actions, and filters, 
 * see {@link http://codex.wordpress.org/Plugin_API Plugin API}.
 * 
 * @package 	Oenology
 * @copyright	Copyright (c) 2011, Chip Bennett
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		Oenology 2.0
 */

/**
 * Define custom action hooks
 */

/**
 * Action hook after content within div#extent
 * 
 * This action hook fires after content is output in the div#extent container. It
 * can be used to add content after any other content is output.
 * 
 * Template file: footer.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_extent_after() {
	do_action( 'oenology_hook_extent_after' );
}

/**
 * Action hook before content within div#extent
 * 
 * This action hook fires before content is output in the div#extent container. It
 * can be used to add content before any other content is output.
 * 
 * Template file: header.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_extent_before() {
	do_action( 'oenology_hook_extent_before' );
}

/**
 * Action hook after content within div#loop-footer
 * 
 * This action hook fires after Loop footer content is output in the div#loop-footer container. It
 * can be used to add content after the Loop footer content is output.
 * 
 * Template file: loop.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_loop_footer_after() {
	do_action( 'oenology_hook_loop_footer_after' );
}

/**
 * Action hook before content within div#loop-footer
 * 
 * This action hook fires before Loop footer content is output in the div#loop-footer container. It
 * can be used to add content before the Loop footer content is output.
 * 
 * Template file: loop.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_loop_footer_before() {
	do_action( 'oenology_hook_loop_footer_before' );
}

/**
 * Action hook after content within div#loop-header
 * 
 * This action hook fires after Loop header content is output in the div#loop-header container. It
 * can be used to add content after the Loop header text is output.
 * 
 * Template file: loop.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_loop_header_after() {
	do_action( 'oenology_hook_loop_header_after' );
}

/**
 * Action hook before content within div#loop-header
 * 
 * This action hook fires before Loop header content is output in the div#loop-header container. It
 * can be used to add content before the Loop header text is output.
 * 
 * Template file: loop.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_loop_header_before() {
	do_action( 'oenology_hook_loop_header_before' );
}

/**
 * Action hook after content within div.post
 * 
 * This action hook fires after content is output in the div.post container. It
 * can be used to add content after post content is output.
 * 
 * Template file: loop.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_after() {
	do_action( 'oenology_hook_post_after' );
}

/**
 * Action hook before content within div.post
 * 
 * This action hook fires before content is output in the div.post container. It
 * can be used to add content before post content is output.
 * 
 * Template file: loop.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_before() {
	do_action( 'oenology_hook_post_before' );
}

/**
 * Action hook after content within div#comments
 * 
 * This action hook fires after content is output in the div#comments container. It
 * can be used to add content after post comments content is output.
 * 
 * Template file: comments.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_comments_after() {
	do_action( 'oenology_hook_post_comments_after' );
}

/**
 * Action hook before content within div#comments
 * 
 * This action hook fires before content is output in the div#comments container. It
 * can be used to add content before post comments content is output.
 * 
 * Template file: comments.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_comments_before() {
	do_action( 'oenology_hook_post_comments_before' );
}

/**
 * Action hook after content within div.post-entry
 * 
 * This action hook fires after content is output in the div.post-entry container. It
 * can be used to add content after post entry content is output.
 * 
 * Template file: post.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_entry_after() {
	do_action( 'oenology_hook_post_entry_after' );
}

/**
 * Action hook before content within div.post-entry
 * 
 * This action hook fires before content is output in the div.post-entry container. It
 * can be used to add content before post entry content is output.
 * 
 * Template file: post.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_entry_before() {
	do_action( 'oenology_hook_post_entry_before' );
}

/**
 * Action hook after content within div.post-footer
 * 
 * This action hook fires after content is output in the div.post-footer container. It
 * can be used to add content after post footer content is output.
 * 
 * Template file: post.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_footer_after() {
	do_action( 'oenology_hook_post_footer_after' );
}

/**
 * Action hook before content within div.post-footer
 * 
 * This action hook fires before content is output in the div.post-footer container. It
 * can be used to add content before post footer content is output.
 * 
 * Template file: post.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_footer_before() {
	do_action( 'oenology_hook_post_footer_before' );
}

/**
 * Action hook after content within div.post-header
 * 
 * This action hook fires after content is output in the div.post-header container. It
 * can be used to add content after post header content is output.
 * 
 * Template file: post.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_after() {
	do_action( 'oenology_hook_post_header_after' );
}

/**
 * Action hook before content within div.post-header
 * 
 * This action hook fires before content is output in the div.post-header container. It
 * can be used to add content before post header content is output.
 * 
 * Template file: post.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_before() {
	do_action( 'oenology_hook_post_header_before' );
}

/**
 * Action hook after content within div#footer
 * 
 * This action hook fires after content is output in the div#footer container. It
 * can be used to add content after site footer content is output.
 * 
 * Template file: footer.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_site_footer_after() {
	do_action( 'oenology_hook_site_footer_after' );
}

/**
 * Action hook before content within div#footer
 * 
 * This action hook fires before content is output in the div#footer container. It
 * can be used to add content before site footer content is output.
 * 
 * Template file: footer.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_site_footer_before() {
	do_action( 'oenology_hook_site_footer_before' );
}

/**
 * Action hook after content within div#site-header-text
 * 
 * This action hook fires after content is output in the div#site-header-text container. It
 * can be used to add content after site header text is output.
 * 
 * Template file: header.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_site_header_after() {
	do_action( 'oenology_hook_site_header_after' );
}

/**
 * Action hook before content within div#site-header-text
 * 
 * This action hook fires before content is output in the div#site-header-text container. It
 * can be used to add content before site header text is output.
 * 
 * Template file: header.php
 * 
 * @uses do_action()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_site_header_before() {
	do_action( 'oenology_hook_site_header_before' );
}


/**
 * Define custom action hooks
 */

/**
 * Hook to filter content displayed in the Loop footer
 * 
 * This hook can be used to filter to content that is 
 * output in the div#loop-footer container.
 * 
 * Template file: loop.php
 * 
 * @uses function_name()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_loop_footer() {	
	$loop_footer = oenology_get_paginate_archive_page_links( 'list', 1, 3 );
	echo apply_filters( 'oenology_hook_loop_footer', $loop_footer );
}

/**
 * Hook to filter content displayed on Error 404 pages
 * 
 * This hook can be used to filter to content that is 
 * output in the div#post-entry container on Error
 * 404 pages.
 * 
 * Template file: 404.php
 * 
 * @uses apply_filters()
 * @uses get_avatar()
 * @uses get_the_author_meta()
 * @uses is_page()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_404() {	
	$post_404 = oenology_get_404_content();
	echo apply_filters( 'oenology_hook_post_404', $post_404 );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_avatar()
 * @uses get_the_author_meta()
 * @uses is_page()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_footer_avatar() {	
	$post_footer_avatar = '';
	// don't display the author's avatar on Pages
	if (! is_page() ) { 
		$post_footer_avatar .= '<span class="post-footer-gravatar">';
		// display a 20px avatar, to fit inside the post footer
		$post_footer_avatar .= get_avatar( get_the_author_meta('email'), $size = '20' ); 
		$post_footer_avatar .= '</span>';
	}
	echo apply_filters( 'oenology_hook_post_footer_avatar', $post_footer_avatar );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container. To
 * use this hook, simply pass a string containing the license text. This string is automatically
 * wrapped in the appropriate container <span class="post-footer-license"></span> tags. If nothing
 * is passed to this filter, then nothing is output by default.
 * 
 * Template file: post-footer.php
 * 
 * @return	string
 * 
 * @uses 	apply_filters()
 * 
 * @since 	Oenology 2.0
 */
function oenology_hook_post_footer_license() {

	$license = '';
	$license = apply_filters( 'oenology_hook_post_footer_license', $license );
	if ( '' != $license ) { 
		$post_footer_license = '';
		$post_footer_license .= '<span class="post-footer-license">';
		$post_footer_license .= $license;
		$post_footer_license .= '</span>';
		echo $post_footer_license;
	}
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_bloginfo()
 * @uses get_comments_number()
 * @uses get_edit_post_link()
 * @uses get_option()
 * @uses get_permalink()
 * @uses get_post_format()
 * @uses get_post_format_link()
 * @uses get_post_format_string()
 * @uses get_the_author()
 * @uses get_the_date()
 * @uses get_the_time()
 * @uses has_post_format()
 * @uses is_page()
 * @uses is_user_logged_in()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_footer_metadata() {

	$post_footer_metadata = '';
	$post_footer_metadata .= '<span class="post-footer-meta">';
	if ( ! is_page() ) {
		$cbnet_post_format_type = ( get_post_format() ? '<a href="' . get_post_format_link( get_post_format() ) . '">' . get_post_format_string( get_post_format() ) . '</a>' : 'Posted' );
	
		$post_footer_metadata .= $cbnet_post_format_type;
		$post_footer_metadata .= ' by ' . get_the_author() . ' ';
	
		if ( has_post_format( 'aside' ) || has_post_format( 'link' ) || has_post_format( 'quote' ) || has_post_format( 'status' ) ) {
			$post_footer_metadata .= '<a href="' . get_permalink() . '">' . get_the_date( get_option( 'date_format' ) ) . ' at ' . get_the_time( get_option( 'time_format' ) ) . '</a>';
			// Display total number of post comments 
			$post_footer_metadata .= ' (' . get_comments_number() . ') '; 
			if ( is_user_logged_in() ) {
				// Display "Edit" link for logged-in Admin users
				$post_footer_metadata .= '<a href="' . get_edit_post_link() . '">Edit</a>'; 
			}
		} else {
			$post_footer_metadata .= get_the_date( get_option( 'date_format' ) ) . ' at ' . get_the_time( get_option( 'time_format' ) );
		}
	} else {
		$post_footer_metadata .= '&copy; ' . get_bloginfo( 'name' );
	}
	$post_footer_metadata .= '</span>';
	echo apply_filters( 'oenology_hook_post_footer_metadata', $post_footer_metadata );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_the_time()
 * @uses is_attachment()
 * @uses is_page()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_date() {	
	$post_header_date = '';

	// don't display timestamp on Pages
	if ( ! is_page() && ! is_attachment() ) {
		$post_header_date .= '<span class="post-date">';
		// Post Date: Year
		$post_header_date .= '<span class="post-date-year">' . get_the_time('Y') . '</span>'; 
		// Post Date: Weekday
		$post_header_date .= '<span class="post-date-weekday">' . get_the_time('D') . '</span>'; 
		// Post Date: Day of Month
		$post_header_date .= '<span class="post-date-day">' . get_the_time('d') . '</span>'; 
		// Post Date: Month
		$post_header_date .= '<span class="post-date-month">' . get_the_time('M') . '</span>'; 
		$post_header_date .= '</span>';
	}
	echo apply_filters( 'oenology_hook_post_header_date', $post_header_date );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_comments_number()
 * @uses get_edit_post_link()
 * @uses get_permalink()
 * @uses get_the_ID()
 * @uses get_the_title()
 * @uses get_trackback_url()
 * @uses is_attachment()
 * @uses is_page()
 * @uses is_singular()
 * @uses is_user_logged_in()
 * @uses wp_get_shortlink()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_metadata() {	

	$post_header_metadata = '';
	$permalink = '';
	$shortlink = '';
	$commentslink = '';
	$trackbacklink = '';
	$printlink = '';
	$editlink = '';
	
	// Post Permalink
	$permalink .= '<span id="post-' . get_the_ID() . '">';
	$permalink .= '<a href="' . get_permalink() . '" rel="bookmark" title="Permanent Link to ' . get_the_title() . '">Permalink</a>';
	$permalink .= '</span>';
	
	// Post Metadata Links
	if ( ! is_page() ) {
		if ( ! is_attachment() ) {
			// Shortlink
			$shortlink .= ' <strong>|</strong> ';
			$shortlink .= '<span id="post-' . get_the_ID() . '-shortlink"><a href="' . wp_get_shortlink() . '">Shortlink</a></span>';
		}
		// Comments Link
		$commentslink .= ' <strong>|</strong> ';
		$commentslink .= '<a href="'. get_comments_link() . '" target="_self" title="Comment on ' . get_the_title() . '">';
		$commentslink .= 'Comments (' . get_comments_number() . ')';
		$commentslink .= '</a> ';
		// Trackback
		$trackbacklink .= ' <strong>|</strong> ';
		$trackbacklink .= '<a href="' . get_trackback_url() . '" target="_self" title="Trackback to ' . get_the_title() . '">Trackback</a>';	
	}
	if ( is_singular() ) { // only display a Print link on single posts, pages, and attachments
		// Print Link
		$printlink .= ' <strong>|</strong> <a href="print" onclick="window.print();return false;">Print</a>';
	}
	if ( is_user_logged_in() ) {
		// Edit Post Link
		$editlink .= ' <strong>|</strong> ';
		$editlink .= '<a href="' . get_edit_post_link() . '">Edit</a>'; // Display "Edit" link for logged-in Admin users
	}	
	$post_header_metadata = '<span class="post-title-metadata">' . $permalink . $shortlink . $commentslink . $trackbacklink . $printlink . $editlink . '</span>';
	
	echo apply_filters( 'oenology_hook_post_header_metadata', $post_header_metadata );
}
	
/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_the_category_list()
 * @uses get_the_tag_list()
 * @uses is_page()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_taxonomies() {	

	$post_header_taxonomies = '';	
	$categorylist = '';
	$taglist = '';
	
	// Post Taxonomies
	if ( ! is_page() ) {
		// Category List
		$categorylist .= '<span class="post-title-category">Filed in ' . get_the_category_list( ', ' ) . '</span>';
		// Tag List
		$taglist .= '<span class="post-title-tags">Tags: ' . get_the_tag_list( '', ', ', '' ) . '</span>';
	}
	$post_header_taxonomies = '<span class="post-title-taxonomies">' . $categorylist . $taglist . '</span>';
	echo apply_filters( 'oenology_hook_post_header_taxonomies', $post_header_taxonomies );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_permalink()
 * @uses get_the_title()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_title() {
	$post_header_title = '';
	
	//link Post Headline (H1) to post permalink
	$post_header_title = '<h1><a href="' . get_permalink() . '">' . get_the_title() . '</a></h1>';

	echo apply_filters( 'oenology_hook_post_header_title', $post_header_title );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_post_format()
 * @uses get_the_post_thumbnail()
 * @uses has_post_thumbnail()
 * @uses is_attachment()
 * @uses is_home()
 * @uses is_page()
 * @uses is_single()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_post_header_thumbnail() {

	$post_header_thumbnail = '';
	
	// display the post thumbnail in the post header for search and archive pages, since they are excerpted
	// don't display for custom Post Formats, since icons are displayed
	if ( ( ! ( is_home() || is_single() || is_page() || is_attachment() ) ) && has_post_thumbnail() && ! get_post_format() ) { 
		global $post;
		$post_header_thumbnail .= '<span class="post-title-thumbnail">';
		$post_header_thumbnail .= get_the_post_thumbnail( $post->ID, 'post-title-thumbnail' );
		$post_header_thumbnail .= '</span>';
	}

	echo apply_filters( 'oenology_hook_post_header_thumbnail', $post_header_thumbnail );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses date()
 * @uses function_exists()
 * @uses get_bloginfo()
 * @uses get_template_directory_uri()
 * @uses home_url()
 * @uses oenology_copyright()
 * @uses oenology_get_footer_credit()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_site_footer() {
	
	$site_footer = array();

	$site_footer['copyright'] = '<span><a href="' . home_url() . '">' . get_bloginfo('name') . '</a></span> ';

	// if the oenology_copyright() function exists, 
	// use it to output the copyright date span
	// otherwise, just output the current year
	if ( function_exists( 'oenology_copyright' ) ) { 
		// function to output XXXX-YYYY, 
		// where 'XXXX' is the year of the oldest post, 
		// and 'YYYY' is the current year
		$site_footer['copyright'] .= oenology_copyright();  
	} else {  
		// current year
		$site_footer['copyright'] .= '&copy; ' . date('Y');
	}
	
	$site_footer['wordpress'] = 'Powered by <a href="http://wordpress.org" target="_new">WordPress ' . get_bloginfo('version') . '<img src="' . get_template_directory_uri() . '/images/iconsweets2/original/wordpress16.png" width="18px" height="17px" alt="WordPress" style="vertical-align:middle;" /></a>';
	
	global $oenology_options;
	if ( 'true' == $oenology_options['display_footer_credit'] ) { 
		// Disabled by default 
		$site_footer['themecredit'] = '<a href="http://www.chipbennett.net/themes/oenology">Oenology Theme</a>';  
	}
	echo implode( ' | ', apply_filters( 'oenology_hook_site_footer', $site_footer ) );
}

/**
 * Hook to filter content within div#postmetadata
 * 
 * This hook can be used to filter to content that is output in the div#postmetadata container.
 * 
 * Template file: post-footer.php
 * 
 * @uses apply_filters()
 * @uses get_bloginfo()
 * 
 * @since Oenology 2.0
 */
function oenology_hook_site_header() {
	
	$site_header = '';

	// Displays the blog name, as defined on the General Settings page in the administration panel
	$site_header .= '<div>' . get_bloginfo('name') . '</div>';
	// Displays the blog description, as defined on the General Settings page in the administration panel
	$site_header .= '<p>' . get_bloginfo('description') . '</p>';

	echo apply_filters( 'oenology_hook_site_header', $site_header );
} 