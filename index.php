<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Polyfill Web Components support for older browsers -->
	<script src="./webcomponentsjs/webcomponents-lite.js"></script>
	<link rel="import" href="./polymer/polymer.html">
	<script src="./jquery.min.js"></script>
	<script>
		function shadowQuerySelector(htmlElement, strArray){
		//console.log(strArray);
			for (var i=0; i < strArray.length; i++){
				var string = strArray[i];
				//console.log(i,'==>', strArray.length);
				//console.log(htmlElement,'==>', string);
				htmlElement = Polymer.dom(htmlElement.root).querySelector(string);
			}
			return htmlElement;
		}
		
		$(document.body).keydown(function(event) {
			console.log(event.which);
			console.log(event.currentTarget.nodeName);
		});

		function filter (elementsArray){
			var notAllowed = " BR HR X-RIGHE ";
			var filtered = [];
			for (var i=0; i < elementsArray.length; i++){
				var element = elementsArray[i];
				//console.log(element.nodeName);
				//console.log(notAllowed);
				//console.log(-1*notAllowed.indexOf(' '+element.nodeName+' '))
				if ((-1*notAllowed.indexOf(' '+element.nodeName+' '))>0){
					filtered.push(element);
					//console.log('allowed ',element)
				}else{
					//console.log('NOT allowed ',element)
				}
			}
			return filtered;
		};
		var myfocus = function (){
			//alert('received fosus:'+this.nodeName);
			//console.log('received focus ',this.nodeName, this);
			//reset the current status
			this.focusedID = -1;
			this.focusNext();
		};
		var focusNext = function () {

			//console.log('focus management is now assigned to: '+this.nodeName);
			//console.log(this.nodeName);

			this.focusedID = this.focusedID + 1;
			var focusable = this.getFocusAble();
console.log('this       ===>',this);
console.log('focusables ===>',focusable);
			if(this.focusedID < focusable.length){
console.log('focuseid   ===>',this.focusedID);
console.log('tobefocused===>',focusable[this.focusedID]);
				focusable[this.focusedID].myfocus();
				console.log('focusing from=> ',this.nodeName,' To=> ' , focusable[this.focusedID].nodeName)
				return false;
			}else{
				if(typeof this.onleaving === 'function'){
					return this.onleaving();
				}
				//console.log('nothing else to focus...giving up',this.nodeName);
				return true;
			}
		};
		var getFocusAble = function (){
			var element = this.focusAbleContainer;
			var childrens = filter(element.children);
			return childrens;
		}

		//Recusively up-traverse the "dom" (and the "shadowdom") to get the relative position of an element from the document body.
		
		var getOffset = function (el, callback, offset){
			if(offset === undefined){
				offset = {top:0,left:0}
			}
		
			offset.top += el.offsetTop;
			offset.left += el.offsetLeft;
			
			if (el.offsetParent!=null){
				getOffset(el.offsetParent, callback, offset);
			}else if(el.host!=null){
				getOffset(el.host, callback, offset);
			}else{
				callback(offset);
				return;
			}
		}
		
		window.addEventListener('WebComponentsReady', function() {
			document.body.style.opacity = 1; // show body now that registration is done.
			document.body.innerHTML += '<x-ddt></x-ddt>'
		});
	</script>
	
	<?php
	$testAllComponents='';
		function loadComponentsFromDir ($dir){
		global $testAllComponents;
			// create a handler for the directory
			$handler = opendir($dir);
			
			// open directory and walk through the filenames
			while ($file = readdir($handler)) {
				if (strpos($file, '.html')) {
					echo "\n".'<link rel="import" href="./'.$dir.'/'.$file.'">';
					$testAllComponents.= "\n<br><br><br><br><br><hr>".$file."<br> <".str_replace('.html','',$file).'></'.str_replace('.html','',$file).'>';
				}
			}
		};
		
		loadComponentsFromDir('components');
		//loadComponentsFromDir('toolkit/components');
	?>
<!--
<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
-->
<style>
input {
	color:black;
	border: 1px solid #a1a1a1;
	background-color: white;
	font-size:1em;
	font-family: 'Inconsolata', sans-serif;
}

body{
	font-size:1em;
	line-height: 2;
}


label {
	color:black;
	font-size:1em;
	background-color: #F2F2F2;
	PADDING:0.5em;
	width:0px;
	/*visibility:hidden;*/
}
input {
color:blue;
}

</style>
</head>
<body>

<?php
//echo $testAllComponents;
?>
</body>
</html>