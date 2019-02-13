<html>
<head>
    <meta http-equiv="refresh" content="2">
    </head>
<body>
	<script>
		/*/Set Var A
		var myDat = localStorage['obj'];
		 //localStorage.removeItem('obj');
		 var fD = myDat;
		 alert('fD' + fD);*/
		</script>
	
    <?php
	session_start();
	
    $link = mysqli_connect('localhost', 'imuser','imuser', 'im');
    //$group = $_GET['agroup'];
    if(!$link){
        die('could not connect' .mysql_error());
    }

	//$table = $_GET['w1'];
	
	$table = $_SESSION['recchat'];
	//echo $table;
    $query = "SELECT * FROM $table";
    
   if($result = mysqli_query($link, $query)){
       while($row = mysqli_fetch_row($result)){
           echo $row['3'].' : '.$row['1'].'</br>';
       }
       mysqli_free_result($result);
   }
    mysqli_close($link);
    ?>
	
    </body>
</html>