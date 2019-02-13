<script>
		//Set Var A
		var myDat = localStorage['obj'];
		 //localStorage.removeItem('obj');
		 var fD = myDat;
		 alert('fD' + fD);
</script>

<?php
//$table = "<script>document.writeln(fD);</script>";

session_start();
$table = $_SESSION['recchat'];

if(ISSET($table))
{
    

$link = mysqli_connect('localhost', 'imuser','imuser', 'im');
    
    if(!$link){
        die('could not connect' .mysql_error());
    }    
    else{       
    }
    
$message = mysqli_real_escape_string($link, $_POST['message']);
    
$username = mysqli_real_escape_string($link, $_SESSION['username']);
    
$sql = "INSERT INTO messages(message, username) VALUES('$message', '$username')";

$result = mysqli_query($link, $sql);
    
mysqli_close($link);
}
echo '<html>';
echo '<head></head><body>';

echo '<form action = "new_message.php" method = "POST">';
echo '<input type="text" name ="message">';
echo '<input type="submit" name="Send">';
echo '</form>';
echo '</body></html>';
?>