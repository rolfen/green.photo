<?php

function get_dir_files($dir, $glob = '*') {
	$files = [];
	foreach(glob($dir.'/'.$glob) as $filename){
		array_push($files, $filename); 
	}
	return($files);
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
			<a id="photoEl" href="photo/DSC08960.jpg">
				<img src="photo/DSC08960.jpg">
			</a>
			<h2>Buildings</h2>
<?php
				foreach(get_dir_files('photo/buildings', '*.jpg') as $fileName) {
					echo "\t\t\t".'<img src="'.$fileName.'">'."\n";
				}
?>
		</div>
	</body>
</html>