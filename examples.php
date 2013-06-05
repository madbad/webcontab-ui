<!DOCTYPE html>
<html>
<head>
	<script src="./jquery.min.js"></script>
	<script src="toolkit/toolkit.js"></script>
	
	<?php
		function loadComponentsFromDir ($dir){
			// create a handler for the directory
			$handler = opendir($dir);

			// open directory and walk through the filenames
			while ($file = readdir($handler)) {
//echo "\n".$file;
				// if file isn't this directory or its parent, add it to the results
				//if ($file != "." && $file != "..") {
				if (strpos($file, '.html')) {
					echo "\n".'<link rel="import" href="./'.$dir.'/'.$file.'">';
				}
			}		
		}
	
		loadComponentsFromDir('components');
		//loadComponentsFromDir('toolkit/components');
		

	?>
<!--
<link rel="import" href="./toolkit/components/g-animation-group.html">
<link rel="import" href="./toolkit/components/g-animation.html">
-->

<link rel="import" href="./toolkit/components/g-ajax.html">
<link rel="import" href="./toolkit/components/g-xhr.html">	
<link rel="import" href="./toolkit/components/g-app.html">
<link rel="import" href="./toolkit/components/g-jsonp.html">
<link rel="import" href="./toolkit/components/g-icon-button.html">
<link rel="import" href="./toolkit/components/g-icon.html">
<link rel="import" href="./toolkit/components/g-menu-button.html">
<link rel="import" href="./toolkit/components/g-menu-item.html">
<link rel="import" href="./toolkit/components/g-menu.html">
<link rel="import" href="./toolkit/components/g-overlay.html">
<link rel="import" href="./toolkit/components/g-panels.html">
<link rel="import" href="./toolkit/components/g-ratings.html">
<link rel="import" href="./toolkit/components/g-ribbon.html">
<link rel="import" href="./toolkit/components/g-selection.html">
<link rel="import" href="./toolkit/components/g-selector.html">
<link rel="import" href="./toolkit/components/g-toolbar.html">
<link rel="import" href="./toolkit/components/g-tabs.html">
<link rel="import" href="./toolkit/components/g-togglebutton.html">
</head>
<body>

<x-gestioneddt></x-gestioneddt>

<g-tabs selected="0">
	<span>One dasdjasiojdioasjdiajsodjasidji</span>
	<span>Two</span>
	<span>Three</span>
	<span>Four</span>
</g-tabs>

<g-menu selected="email">
	<g-menu-item name="post" src="./toolkit/components/images/comment.png">Post a Comment</g-menu-item>
	<g-menu-item name="share" src="./toolkit/components/images/hangout.png">Share Link</g-menu-item>
	<g-menu-item name="email" src="./toolkit/components/images/mail.png">Email Link</g-menu-item>
	<g-menu-item name="favorite" src="./toolkit/components/images/favorite.png">Add to Favorites</g-menu-item>
</g-menu>

<g-overlay class="g-overlay-scale-slideup">
	<h2>Dialog</h2>
	<input placeholder="say something..." autofocus"></input>
	<div>I agree with this wholeheartedly.</div>
	<button overlay-toggle>OK</button>
</g-overlay>

<g-ribbon selected="0" label="Google">
	<g-menu-item src="home.png">Home</g-menu-item>
	<g-menu-item src="topics.png">Topics</g-menu-item>
	<g-menu-item src="accounts.png">Accounts</g-menu-item>
	<g-menu-item src="explore.png">Explore</g-menu-item>
</g-ribbon>

<g-panels selected="bar" transition="keyframe" class="g-panels-explode">
	<section name="foo">Panel 1</section>
	<section name="bar">Panel 2</section>
	<section name="baz">Panel 3</section>
</g-panels>

<g-ratings value="3" count="10"></g-ratings>

<g-togglebutton value="true"></g-togglebutton>

<g-toolbar>
	<g-icon-button src="menu.png" on-click="menuAction"></g-icon-button>
	<div class="flex">Title</div>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
	<g-icon-button src="more.png" on-click="moreAction"></g-icon-button>
</g-toolbar>

<g-ajax auto url="http://gdata.youtube.com/feeds/api/videos/" 
params='{"alt":"json", "q":"chrome"}'
handleAs="json"
on-response="handleResponse">
</g-ajax>

<g-app>
	<header>Simple App</header>
	<section class="content flex">Content</section>
	<footer>more...</footer>
</g-app>

<g-jsonp url="https://clients1.google.com/finance/info?q=GOOG&client=ig&callback="
 on-response="handleResponse"></g-jsonp>
</body>
</html>