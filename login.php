
<?php //include('header.php') ?>
<br>
<br>
<br>
<br>
<br>
<br>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>تسجيل الدخول</title>
	<link rel="stylesheet" href="css/loggg.css">
</head>

<body>

	<?php 
	if(!isset($_POST['submit']))
	{?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
<!--     صورة-->
    </div>

    <!-- Login Form -->
    <form method="post" action="login.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="اسم المستخدم">
  <input type="password" id="password" class="fadeIn third" name="password" placeholder="كلمة المرور">
   <!--<a href="cp/doctor_cp.php?=<?=$row['name'];?>">--> 
     <input type="submit" name="submit" class="fadeIn fourth" value="تسجيل الدخول"></a>
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">هل نسيت كلمة المرور؟</a>
    </div>

  </div>
</div>
	
	<?php }
	
else {
	include("conn/conn.php");

	$username = trim(mysqli_escape_string($con,$_POST['username']));
	$password=mysqli_escape_string($con,$_POST['password']);
	
	$query = "SELECT `u_id`, `u_name`, `pass`, `phone`, `email`, `u_type` FROM `user` WHERE u_name='$username' and  pass ='$password'";
	$res = mysqli_query($con,$query)  or die('Could not connect with database');
	//echo $query;
	$row = mysqli_fetch_assoc($res);
	$type=$row['u_type'];
	if(mysqli_num_rows($res) > 0) {
	
		session_start();
		$_SESSION['user'] = $username;
		$_SESSION['user_id'] = $row['u_id'];
		$_SESSION['type'] =$row['u_type'];
		//header('location:index.php');
		echo $type;
		if($type==0)
		{
			header('location:index.php');
			}  
			
			else if($type==1)
		{
			header('location:aboutus.php');
			$_SESSION['user_id'] = $row['u_id'];
			}   
			
				else if($type==2)
		{
			header('location:index.php');
			} 
			 else
			 {
				 header('location:logout.php');
				 }   
	
	
	}
	else echo "user name or password not correct";

}?>

</body>
</html>
