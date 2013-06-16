<!DOCTYPE html>
<html>
<head>
	<script src="./jquery.min.js"></script>
	
	<script src="polymer/polymer.js"></script>
	<script>
	document.addEventListener('focus',function(e){console.log(e)}, true);
	
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
		var focus= function (){
			console.log('received focus ',this.nodeName, this);
			//reset the current status
			this.focusedID = -1;
			this.focusNext();
		};
		var focusNext= function () {
			this.focusedID = this.focusedID + 1;
			var focusable = this.getFocusAble();
			if(this.focusedID < focusable.length){
				focusable[this.focusedID].focus();
				console.log('focusing from=> ',this,' To=> ' , focusable[this.focusedID])
				return false;
			}else{
				if(typeof this.onleaving === 'function'){
					return this.onleaving();
				}
				console.log('nothing else to focus...giving up',this.nodeName, this);
				return true;
			}
		};
		var getFocusAble = function (){
			element = this.focusAbleContainer;
			var childrens = filter(element.children);
			//console.log(childrens);
			return childrens;
		}

		/*
			Recusively up-traverse the "dom" (and the "shadowdom") to get the relative position of an element from the document body.
		*/
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

	</script>

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
		};
		

		loadComponentsFromDir('components');
		//loadComponentsFromDir('toolkit/components');
	?>
<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
<style>
input {
	color:red;
	border: 0px solid #a1a1a1;
	background-color: #e1e1e1;
	font-size:1em;
	font-family: 'Inconsolata', sans-serif;
}

body{
	font-size:1em;
	line-height: 2;
}


label {
	font-size:1em;
	background-color: #F2F2F2;
	PADDING:0.5em;
	width:0px;
	visibility:hidden;
}

</style>
</head>
<body>
<x-gestioneddt></x-gestioneddt>
<!--
<x-query-window params='{"_type":"causalispedizione","codice":["!=",""]}'><x-query-window>
-->
</body>
</html>