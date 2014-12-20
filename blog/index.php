<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>
<style type="text/css">
<!--
#apDiv3 {	position:absolute;
	width:35px;
	height:35px;
	z-index:4;
	left: 715px;
	top: 100px;
}
-->
</style>
<ul>
  <div id="apDiv3">
    <script type="text/javascript" src="http://cdn.socialtwist.com/2010020634838/script.js"></script>
    <a class="st-taf" href="http://tellafriend.socialtwist.com:80" onclick="return false;" style="border:0;padding:0;margin:0;"><img alt="SocialTwist Tell-a-Friend" style="border:0;padding:0;margin:0;" src="http://images.socialtwist.com/2010020634838/button.png"onmouseout="STTAFFUNC.hideHoverMap(this)" onmouseover="STTAFFUNC.showHoverMap(this, '2010020634838', window.location, document.title)" onclick="STTAFFUNC.cw(this, {id:'2010020634838', link: window.location, title: document.title });"/></a> </div>
</ul>