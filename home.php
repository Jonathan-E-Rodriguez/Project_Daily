<html>
<head>
	<link rel="stylesheet" href="home.css">
	</head>
<body>
	<div>
		<?php
		
	
		if($_POST['data_post'] == 'circle1'){
			echo '<div class="container">
			<div class="l-side">
			Image
			</div>
			
			<div class="r-side">
			<div class="row1">
			<span>Title: Event 1</span>
			<span>User/Org: </span>
			<span>Time: </span>
			</div>
			<div class="row2_content">
			Description
			</div>
			<div class="row3_hash">
			hash
			</div>
			<div class="row4_opc">
			Icons
			</div>
			</div>
			</div>';
		}
		else{
			echo 'No Events Available';
		}
	?>
</div>

	
	
	</body>
</html>