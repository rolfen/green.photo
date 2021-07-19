<?php

function get_dir_files($dir, $glob = '*') {
	$files = [];
	foreach(glob($dir.'/'.$glob) as $filename){
		array_push($files, $filename); 
	}
	return($files);
}

function imageMarkup($fileName) {
	return ("\t\t\t<a href=\"$fileName\"><img src=\"$fileName\"></a>\n");
}
?>
<html>
	<head>
		<title></title>
		<script type="text/javascript">
			document.addEventListener("DOMContentLoaded", (e) => {
			}); 
		</script>
		<style>
			#photos {
			}
			#photos img {
				max-width: 98%;
				max-height: 98vh;
				margin:auto;
				padding:1em;
				display:block;
			}
		</style>
	</head>
	<body>
		<div id="photos">

			<h2>Buildings</h2>
<?php
				foreach(get_dir_files('resized/photo/buildings', '*.jpg') as $fileName) {
						echo imageMarkup($fileName);
					}
?>
		</div>
	</body>
</html>
