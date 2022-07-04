<?php
$isPost=false;
$username="";
$password="";
if(isset($_POST["btnLogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	if($_POST['pass']!="")
        $password=$_POST["pass"];
}
?>
<form action="#" method="post">

Username:<input type="text" id="uname" name="uname">
	
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>*Required</small></span>";
}

?>
<br><br>

Password:<input type="password" id="pass" name="pass">
<?php
    if($isPost==true && $password=="")
    {
        echo "<span style='color:red;'><small>*Required</small></span>";
    }
?>
<br><br>
<input type="submit" value="Log in" name="btnlogin">
</form>
