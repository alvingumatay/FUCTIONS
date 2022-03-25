<?php
$server_name='localhost';
$username='root';
$password='';
$db_name='home_activity';
$con= mysqli_connect($server_name, $username, $password, $db_name);
if(mysqli_connect_errno())
{
    echo 'Failed..!!'.mysqli_connect_errno();
}    

$result= mysqli_query($con, "SELECT * FROM home_tasks WHERE status=1");
$display = (mysqli_num_rows($result) == 1);
$disable = $display?'':'disabled="disabled"';
?>
<html>
<body>
    <form name="f1" method="post" action="test2.php">
    	  <input type="text" value="<?php echo $fetch['activity']?>">
        <input type="button" name="A"  <?php echo $disable; ?> />     
    </form>
</body>
</html>