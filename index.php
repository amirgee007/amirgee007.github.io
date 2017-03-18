<!DOCTYPE html>
<!-- saved from url=(0057)https://nextpress.co/ipndpeyyaw4p0fo/wp-admin/#ninja-demo -->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar gr__nextpress_co" lang="en-US">
<!--<![endif]-->
<head>
	<?php require 'root.inc.php'; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Material Custom Template </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="dns-prefetch" href="https://s.w.org/">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo BASE_URL ;?>/files/load-styles.php" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo BASE_URL ;?>/files/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="thickbox-css" href="<?php echo BASE_URL ;?>/files/thickbox.css" type="text/css" media="all">
	<link rel="stylesheet" id="material-wp_admin-styles-css" href="<?php echo BASE_URL ;?>/files/paradox.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="material-wp-css" href="<?php echo BASE_URL ;?>/files/material-wp.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="material-wp_dynamic-css" href="<?php echo BASE_URL ;?>/files/dynamic.min.css" type="text/css" media="all">
	<script src="<?php echo BASE_URL ;?>/files/release.min.js.download" type="text/javascript" defer=""></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/load-scripts.php"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/scripts.min.js.download"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/ace.js.download"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/theme-chrome.js.download"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/mode-scss.js.download"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/wp-color-picker-alpha-min.js.download"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/monitor.js.download"></script>
	<script>

		jQuery(document).ready(function($) {
			"use strict";

			$('.tf-number input[type=number]').each(function() {
				if ( ! $(this).prev().is('.number-slider') ) {
					return;
				}
				$(this).prev().slider({
					max: Number( $(this).attr('max') ),
					min: Number( $(this).attr('min') ),
					step: Number( $(this).attr('step') ),
					value: Number( $(this).val() ),
					animate: "fast",
					change: function( event, ui ) {
						$(ui.handle).parent().next().val(ui.value).trigger('change');
					},
					slide: function( event, ui ) {
						$(ui.handle).parent().next().val(ui.value).trigger('change');
					}
				}).disableSelection();
			});
			$('.tf-number input[type=number]').on('keyup', function() {
				$(this).prev().slider('value', $(this).val());
			});
		});
	</script>

	<script type="text/javascript">var _wpColorScheme = {"icons":{"base":"#82878c","focus":"#00a0d2","current":"#fff"}};</script>
	<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>


<body class="wp-admin wp-core-ui js  material-wp-menu-left index-php auto-fold admin-bar branch-4-7 version-4-7-3 admin-color-fresh locale-en-us multisite customize-support svg" data-gr-c-s-loaded="true">

<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

<div id="wpwrap">
	<div id="adminmenumain" role="navigation" aria-label="Main menu">
		<div id="adminmenuback"></div>
		<div id="adminmenuwrap">
			<ul id="adminmenu" title="Main Menu">
				<li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last wpbd-menu-item wpbd-id-index.php active" id="menu-dashboard">
					<a href="#" class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last wpbd-menu-item wpbd-id-index.php active collapsible-header">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-dashboard"><br></div>
						<div class="wp-menu-name">Dashboard</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="display: block;">
						<li class="wp-submenu-head" aria-hidden="true">Dashboard</li>
						<li class="wp-first-item current"><a href="#" class="wp-first-item current">Home</a></li>
						<li><a href="#">My Sites</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="index.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[index.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[index.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="index.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>

				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first wpbd-menu-item wpbd-id-edit.php" id="menu-posts">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first wpbd-menu-item wpbd-id-edit.php collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-post"><br></div>
						<div class="wp-menu-name">Posts</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Posts</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">All Posts</a></li>
						<li><a href="#">Add New</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Tags</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="edit.php">
                    <input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[edit.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[edit.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="edit.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media wpbd-menu-item wpbd-id-upload.php" id="menu-media">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media wpbd-menu-item wpbd-id-upload.php collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-media"><br></div>
						<div class="wp-menu-name">Media</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Media</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">Library</a></li>
						<li><a href="#">Add New</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="upload.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[upload.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[upload.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="upload.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page wpbd-menu-item wpbd-id-edit.php?post_type=page" id="menu-pages">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page wpbd-menu-item wpbd-id-edit.php?post_type=page collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-page"><br></div>
						<div class="wp-menu-name">Pages</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Pages</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">All Pages</a></li>
						<li><a href="#">Add New</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="edit.php?post_type=page"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[edit.php?post_type=page][rename]" value=""><input type="hidden" name="wpbd-menus-edits[edit.php?post_type=page][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="edit.php?post_type=page"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-not-current-submenu menu-top menu-icon-comments wpbd-menu-item wpbd-id-edit-comments.php" id="menu-comments">
					<a href="#" class="wp-not-current-submenu menu-top menu-icon-comments wpbd-menu-item wpbd-id-edit-comments.php">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-comments"><br></div>
						<div class="wp-menu-name">Comments <span class="awaiting-mod count-2"><span class="pending-count">2</span></span></div>
					</a>
					<input type="hidden" name="wpbd-menu[]" value="edit-comments.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[edit-comments.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[edit-comments.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="edit-comments.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first wpbd-menu-item wpbd-id-themes.php" id="menu-appearance">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first wpbd-menu-item wpbd-id-themes.php collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-appearance"><br></div>
						<div class="wp-menu-name">Appearance</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Appearance</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">Themes</a></li>
						<li class="hide-if-no-customize"><a href="#" class="hide-if-no-customize">Customize</a></li>
						<li><a href="#">Widgets</a></li>
						<li><a href="#">Menus</a></li>
						<li class="hide-if-no-customize"><a href="#" class="hide-if-no-customize">Header</a></li>
						<li class="hide-if-no-customize"><a href="#" class="hide-if-no-customize">Background</a></li>
						<li><a href="#">Header</a></li>
						<li><a href="#">Background</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="themes.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[themes.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[themes.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="themes.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users wpbd-menu-item wpbd-id-users.php" id="menu-users">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users wpbd-menu-item wpbd-id-users.php collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-users"><br></div>
						<div class="wp-menu-name">Users</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Users</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">All Users</a></li>
						<li><a href="#">Add New</a></li>
						<li><a href="#">Your Profile</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="users.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[users.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[users.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="users.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools wpbd-menu-item wpbd-id-tools.php" id="menu-tools">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools wpbd-menu-item wpbd-id-tools.php collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-tools"><br></div>
						<div class="wp-menu-name">Tools</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Tools</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">Available Tools</a></li>
						<li><a href="#">Import</a></li>
						<li><a href="#">Export</a></li>
						<li><a href="#">Delete Site</a></li>
						<li><a href="#">Domain Mapping</a></li>
						<li><a href="#">Email Log</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="tools.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[tools.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[tools.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="tools.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last wpbd-menu-item wpbd-id-options-general.php" id="menu-settings">
					<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last wpbd-menu-item wpbd-id-options-general.php collapsible-header" aria-haspopup="true">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-admin-settings"><br></div>
						<div class="wp-menu-name">Settings</div>
					</a>
					<ul class="wp-submenu wp-submenu-wrap collapsible-body" style="">
						<li class="wp-submenu-head" aria-hidden="true">Settings</li>
						<li class="wp-first-item"><a href="#" class="wp-first-item">General</a></li>
						<li><a href="#">Writing</a></li>
						<li><a href="#">Reading</a></li>
						<li><a href="#">Discussion</a></li>
						<li><a href="#">Media</a></li>
						<li><a href="#">Permalinks</a></li>
						<li><a href="#">Hide Your Theme</a></li>
						<li><a href="#">Postman SMTP</a></li>
					</ul>
					<input type="hidden" name="wpbd-menu[]" value="options-general.php"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[options-general.php][rename]" value=""><input type="hidden" name="wpbd-menus-edits[options-general.php][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="options-general.php"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-not-current-submenu menu-top toplevel_page_material-wp_settings menu-top-first menu-top-last wpbd-menu-item wpbd-id-material-wp_settings" id="toplevel_page_material-wp_settings">
					<a href="#" class="wp-not-current-submenu menu-top toplevel_page_material-wp_settings menu-top-first menu-top-last wpbd-menu-item wpbd-id-material-wp_settings">
						<div class="wp-menu-arrow">
							<div></div>
						</div>
						<div class="wp-menu-image dashicons-before dashicons-art"><br></div>
						<div class="wp-menu-name">Material WP</div>
					</a>
					<input type="hidden" name="wpbd-menu[]" value="material-wp_settings"><input type="text" class="wpbd-rename-field" name="wpbd-menus-edits[material-wp_settings][rename]" value=""><input type="hidden" name="wpbd-menus-edits[material-wp_settings][hidden]" value="0">
					<div class="wpbd-hide-menu wpbd-ignore" data-menu="material-wp_settings"><span class="dashicons dashicons-visibility"></span></div>
				</li>
				<li class="wp-not-current-submenu wpbd-ignore wpbd-separator" aria-hidden="true">
					<div class="separator"></div>
				</li>
				<li id="wpbd-edit-menu" class="hide-if-no-js wpbd-menu-actions wpbd-ignore wpbd-edit">
					<a href="#" class="menu-top" title="Edit Menu">
						<div class="wp-menu-image dashicons-before dashicons-edit"></div>
						<div class="wp-menu-name">Edit Menu</div>
					</a>
				</li>
				<li id="wpbd-save-menu" class="hide-if-no-js wpbd-menu-actions wpbd-ignore wpbd-save">
					<a href=#" class="menu-top" title="Save Menu">
						<div class="wp-menu-image dashicons-before dashicons-yes"></div>
						<div class="wp-menu-name wpbd-default">Save Menu</div>
						<div class="wp-menu-name wpbd-saving" style="display: none;">Saving...</div>
						<div class="wp-menu-name wpbd-saved" style="display: none;">Saved!</div>
					</a>
				</li>
				<li id="wpbd-restore-menu" class="hide-if-no-js wpbd-menu-actions wpbd-ignore wpbd-restore">
					<a href="#" class="menu-top" title="Restore Menu">
						<div class="wp-menu-image dashicons-before dashicons-no"></div>
						<div class="wp-menu-name">Restore Menu</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="wpcontent">
		<div id="wpadminbar" class="">
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
					<li id="wp-admin-bar-my-site-logo" class="custom-site-logo"><a class="ab-item" href="#"><img class="material-wp-logo" src="<?php echo BASE_URL ;?>/files/logo.png"></a>		</li>
					<li id="wp-admin-bar-menu-toggle"><a class="ab-item" href="#" aria-expanded="false"><span class="ab-icon"></span><span class="screen-reader-text">Menu</span></a>		</li>


				</ul>
				<ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
					<li id="wp-admin-bar-mwp-logout" class="force-mdi tooltiped tooltip-ajust" data-tooltip="Logout"><a class="ab-item" href="#"><i class="mdi-action-exit-to-app"></i></a>		</li>
					<li id="wp-admin-bar-mwp-settings" class="force-mdi tooltiped tooltip-ajust" data-tooltip="Settings"><a class="ab-item" href="#"><i class="mdi-action-settings"></i></a>		</li>
				</ul>
			</div>
			<a class="screen-reader-shortcut" href="#">Log Out</a>
		</div>
		<div id="parallax-main-block" class="parallax-container">
			<div class="parallax">
				<img class="parallax-img" src="<?php echo BASE_URL ;?>/files/bg1.jpg" style="bottom: 0px; display: block; opacity: 0.8;">
				<div id="parallax-content">
					<div class="container"></div>
				</div>
			</div>
			<!-- Only displays if the setting is enebled -->
			<a href="#">
				<div id="mwp-user-card" class="tooltiped" data-tooltip="Edit your profile" data-position="bottom">
					<div class="user-card-avatar">
						<img alt="" src="<?php echo BASE_URL ;?>/files/profile.jpg" srcset="https://secure.gravatar.com/avatar/5b6c988063f5a446885956c23a8cd50b?s=120&amp;d=mm&amp;r=g 2x" class=" avatar-60 photo" height="60" width="60">
					</div>
					<div class="user-card-info">
						<div class="user-card-name">Name of Admin</div>
						<div class="user-card-email">email@yahoo.com</div>
					</div>
				</div>
			</a>
		</div>
		<script type="text/javascript">
			jQuery('#adminmenu').attr('title', 'Main Menu');
		</script>
		<div id="wpbody" role="main">
			<div id="wpbody-content" aria-label="Main content" tabindex="0" style="overflow: hidden;">
				<div id="screen-meta" class="metabox-prefs">
					<div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Contextual Help Tab">
						<div id="contextual-help-back"></div>
						<div id="contextual-help-columns">
							<div class="contextual-help-tabs">
								<ul>
									<li id="tab-link-overview" class="active">
										<a href="#" aria-controls="tab-panel-overview">
											Overview								</a>
									</li>
									<li id="tab-link-help-navigation">
										<a href="#" aria-controls="tab-panel-help-navigation">
											Navigation								</a>
									</li>
									<li id="tab-link-help-layout">
										<a href="https://nextpress.co/ipndpeyyaw4p0fo/wp-admin/#tab-panel-help-layout" aria-controls="tab-panel-help-layout">
											Layout								</a>
									</li>
									<li id="tab-link-help-content">
										<a href="#" aria-controls="tab-panel-help-content">
											Content								</a>
									</li>
								</ul>
							</div>
							<div class="contextual-help-sidebar">
								<p><strong>For more information:</strong></p>
								<p><a href="#">Documentation on Dashboard</a></p>
								<p><a href="#">Support Forums</a></p>
							</div>
							<div class="contextual-help-tabs-wrap">
								<div id="tab-panel-overview" class="help-tab-content active">
									<p>Welcome to your WordPress Dashboard! This is the screen you will see when you log in to your site, and gives you access to all the site management features of WordPress. You can get help for any screen by clicking the Help tab above the screen title.</p>
								</div>
								<div id="tab-panel-help-navigation" class="help-tab-content">
									<p>The left-hand navigation menu provides links to all of the WordPress administration screens, with submenu items displayed on hover. You can minimize this menu to a narrow icon strip by clicking on the Collapse Menu arrow at the bottom.</p>
									<p>Links in the Toolbar at the top of the screen connect your dashboard and the front end of your site, and provide access to your profile and helpful WordPress information.</p>
								</div>
								<div id="tab-panel-help-layout" class="help-tab-content">
									<p>You can use the following controls to arrange your Dashboard screen to suit your workflow. This is true on most other administration screens as well.</p>
									<p><strong>Screen Options</strong> — Use the Screen Options tab to choose which Dashboard boxes to show.</p>
									<p><strong>Drag and Drop</strong> — To rearrange the boxes, drag and drop by clicking on the title bar of the selected box and releasing when you see a gray dotted-line rectangle appear in the location you want to place the box.</p>
									<p><strong>Box Controls</strong> — Click the title bar of the box to expand or collapse it. Some boxes added by plugins may have configurable content, and will show a “Configure” link in the title bar if you hover over it.</p>
								</div>
								<div id="tab-panel-help-content" class="help-tab-content">
									<p>The boxes on your Dashboard screen are:</p>
									<p><strong>At A Glance</strong> — Displays a summary of the content on your site and identifies which theme and version of WordPress you are using.</p>
									<p><strong>Activity</strong> — Shows the upcoming scheduled posts, recently published posts, and the most recent comments on your posts and allows you to moderate them.</p>
									<p><strong>Quick Draft</strong> — Allows you to create a new post and save it as a draft. Also displays links to the 5 most recent draft posts you've started.</p>
									<p><strong>WordPress News</strong> — Latest news from the official WordPress project and the <a href="#">WordPress Planet</a>.</p>
									<p><strong>Welcome</strong> — Shows links for some of the most common tasks when setting up a new site.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div id="screen-meta-links">

				</div>
				<div class="wrap">
					<h1>Dashboard</h1>
					<div class="update-nag">
						<p>Any text  will be <em>here</em> </p>
					</div>

					<div id="welcome-panel" class="welcome-panel hidden">

                        <a class="welcome-panel-close" href="#" aria-label="Dismiss the welcome panel">Dismiss</a>
						<div class="welcome-panel-content">
							<h2>Welcome my Template!</h2>
							<p class="about-description">We’ve assembled some links to get you started:</p>
							</div>
						</div>
					</div>

					<div id="dashboard-widgets-wrap">
						<div id="dashboard-widgets" class="metabox-holder">

                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                            Where does it come from?
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

                            Where can I get some?
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.

                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                            Where does it come from?
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

                            Where can I get some?
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.




						</div>

					</div>
					<!-- dashboard-widgets-wrap -->
				</div>
				<!-- wrap -->
				<div class="clear"></div>
			</div>
			<!-- wpbody-content -->
			<div class="clear"></div>
		</div>
		<!-- wpbody -->
		<div class="clear"></div>
	</div>
	<!-- wpcontent -->

	<div id="wpfooter" role="contentinfo">
		<p id="footer-left" class="alignleft">
		</p>
		<p id="footer-upgrade" class="alignright">
		</p>
		<div class="clear"></div>
	</div>
	<script>
		jQuery(document).ready(function($) {
			"use strict";
			$('.tf-colorpicker').wpColorPicker();
		});
	</script>
	<script type="text/javascript">list_args = {"class":"WP_Comments_List_Table","screen":{"id":"dashboard","base":"dashboard"}};</script>
	<script type="text/javascript">list_args = {"class":"WP_Comments_List_Table","screen":{"id":"dashboard","base":"dashboard"}};</script>

	<script type="text/javascript">  ///for expansion
		/* <![CDATA[ */
		var commonL10n = {"warnDelete":"You are about to permanently delete the selected items.\n  'Cancel' to stop, 'OK' to delete.","dismiss":"Dismiss this notice.","expandLabel":"Expand \/ Compress Stage"};
		/* ]]> */
	</script>

	<script type="text/javascript" src="<?php echo BASE_URL ;?>/files/common.min.js.download"></script>
	<div class="clear"></div>

</body>
</html>