<?php
$isPost=false;
$username="";
$firstName="";
$lastName="";
$password="";
$emailAdress="";
$genderCheck="";
$skillCheck="";
$addressCheck="";
if(isset($_POST["btnRegister"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	if($_POST["firstname"]!="")
		$firstName=$_POST["firstname"];
	if($_POST["lastname"]!="")
		$lastName=$_POST["lastname"];
    if($_POST['pass']!="")
        $password=$_POST["pass"];
    if($_POST['email']!="")
        $emailAdress=$_POST["email"];
	if(isset($_POST['gender']))
		$genderCheck=$_POST['gender'];
	if(isset($_POST['skills']))
		$skillCheck=$_POST['skills'];
	if($_POST["address"]!="")
		$addressCheck=$_POST["address"];
	}

?>
<form action="#" method="post">

	<!-- First Name -->
First Name:<input type="text" id="firstname" name="firstname">
	<?php
		if ($isPost==true && !preg_match("/^[a-zA-Z-' ]*$/",$firstName)) 
			echo "<span style='color:red;'><small>*Only letters and white space allowed</small></span>";
		elseif($isPost==true &&  $firstName=="")
			echo "<span style='color:red;'><small>*Required</small></span>";

	?>
	<br><br>
	<!-- Last Name -->
Last Name :<input type="text" id="lastname" name="lastname">	
	<?php 
	if ($isPost==true && !preg_match("/^[a-zA-Z-' ]*$/",$lastName)) 
			echo "<span style='color:red;'><small>*Only letters and white space allowed</small></span>";
		elseif($isPost==true &&  $lastName=="")
			echo "<span style='color:red;'><small>*Required</small></span>";
	?>
<br><br>	
	<!-- User Name  -->
Username:<input type="text" id="uname" name="uname">
	
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>*Required</small></span>";
}

?>
<br><br>

	<!-- Password  -->
Password:<input type="password" id="pass" name="pass">
<?php
    if($isPost==true && $password=="")
    {
        echo "<span style='color:red;'><small>*Required</small></span>";
    }
?>
<br><br>
	<!-- Email Address  -->

Email:<input type="text" name="email">	
    <?php
    if($isPost==true && !filter_var($emailAdress,FILTER_VALIDATE_EMAIL))
	{
		echo "<span style='color:red;'><small>*Invalid Email Format</small></span>";
	}
	
    ?>
	<br><br>
	<!-- Gender  -->
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
    if($isPost==true && $genderCheck=="")
	{
		echo "<span style='color:red;'><small>*Required</small></span>";
	}
	
    ?>
<br><br>
	<!-- Skills  -->

Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python
	<?php
    if($isPost==true && $skillCheck =="")
	{
		echo "<span style='color:red;'><small>*Required</small></span>";
	}
	
    ?>
	<br><br>
	<!-- Department  -->
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>
<br><br>
	<!-- Address  -->
Address:<textarea name="address" rowspan="4" colspan="30"></textarea>
<?php
    if($isPost==true && $addressCheck =="")
	{
		echo "<span style='color:red;'><small>*Required</small></span>";
	}
	
    ?>
	<br><br>
	
<input type="submit" value="Register" name="btnRegister">

</form>