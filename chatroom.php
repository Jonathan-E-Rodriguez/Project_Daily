 <?php
    session_start();
    //echo $_POST['username'];
$_SESSION['username'] = $_POST['username'];
    ?>

<html>
<head>
    <title>
        Test
    </title>
</head>
    <FRAMESET cols= "200,*">
        <FRAME src="sidebar.php">
        <FRAMESET rows ="*,200">
            <FRAME src="messages.php">       
            </FRAME>
            <FRAME src="new_message.php">        
            </FRAME>          
            </FRAMESET>
        </FRAME>
    </FRAMESET>
</html>
<?php
echo $_POST['username'];
?>