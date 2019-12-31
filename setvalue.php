
<?php


session_start();
if(!isset($_SESSION['sid']))
header("location:index.php");
elseif($_SESSION['sid']==session_id())
{
	
?>
<html>
<body>
<a href="logout.php" style="float:right;background-color:tomato;">Logout</a>
<center><h2>
<?php
echo "Welcome  ".  $_SESSION['name'];
?>
</h2>
</center>

</body>
<?php
}
?>
</html>