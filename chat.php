<html>
<head>
    <title>
        Test
    </title>
</head>
	<script>
	//alert(localStorage['obj']);
	
	</script>
    <?php
    session_start();
	
	$_SESSION['recchat'] = $_POST['trgchat'];
	
    ?>
    
    <body align = "center" valign = "middle">
    <form action="chatroom.php" method="post">
        Enter Username: <br>
        <input type="text" name="username">
        <input type="submit" name="Enter">
        </form>
    
    </body>
</html>