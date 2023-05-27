<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>تعديل فندق</title>
</head>
<link rel="stylesheet" href="../css/main.css">
<body>
	<?php
	//  include("head.php"); 

	if(isset($_REQUEST['id']) )
	{
		$id=$_REQUEST['id'];
		include("../conn/conn.php");
		include("../conn/function2.php");
	$query="select `name`,`email`,PASSWORD(`pass`),`u_type` from user where u_id=$id";
		$res=mysqli_query($con,$query);
	if(mysqli_num_rows ($res) >0)
	{
		
		$row=mysqli_fetch_assoc($res);
	
?>
	<div class="containe">
  <form  method="post" action="edituser.php"   >
    <div class="row">
      
      <div class="col-75">
        <input type="text" id="name" name="name" value="<?=$row['u_name'];?> " dir="rtl">
      </div>
		<div class="col-25">
        <label for="u_name">اسم المستخدم</label>
      </div>
    </div>
	   <div class="row">
      
      <div class="col-75">
        <input type="password" id="pass" name="pass" value="<?=$row['pass'];?> " dir="rtl">
      </div>
		<div class="col-25">
        <label for="pass">كلمة المرور </label>
      </div>
    </div>
	   <div class="row">
      
      <div class="col-75">
        <input type="password" id="pass" name="sh_pass" value="<?=$row['PASSWORD(pass)'];?> " dir="rtl">
      </div>
		<div class="col-25">
        <label for="pass">تأكيد كلمة المرور </label>
      </div>
    </div>
	  <div class="row">
      
       
      <div class="col-75">
        مدير موقع&nbsp;<input type="radio" value="<?=$row['u_type'];?>" name="type" checked>
		  
			مدير فندق&nbsp;<input type="radio" value="<?=$row['u_type'];?>" name="type" >
		
      
      </div>
		<div class="col-25">
        <label for="type">نوع المستخدم </label>
      </div>
    </div>
	  <div class="row">
      
      <div class="col-75">
        <input type="text" id="name" name="email" value="<?=$row['email'];?> " dir="rtl">
      </div>
		<div class="col-25">
        <label for="email">الإيميل </label>
      </div>
    </div>
		<div class="row">
      
      <div class="col-75">
        <input type="hidden" id="name"  name="us_id" value="<?php echo $_GET['id'];?>" >
      </div>
    </div>	
	<div class="row">
      <input type="submit" name="submit" value="تعديل" >
    </div>
			
  

</form>
	
	
	
	
	
<!--	/////////////////////////////////////////////////////////-->
	
	<?php
	}
		
		
		
		else if (!isset($_REQUEST['id']))
		{
			echo 'لم يتم استلام اي رقم';
		}
		mysqli_free_result($res);
	mysqli_close($con);
	}

	 if(isset($_POST['submit']))
	{
	
	include("../conn/conn.php");
		 include("../conn/function.php");
  $id=$_POST['u_id'];
		//  $sh_pass=$_POST['sh_pass'];
		$pass=$_POST['pass'];
	$u_name=$_POST['name'];
	$u_type=$_POST['type'];
	$email=$_POST['email'];
	
	
	
w_update("user","u_name='$u_name',u_type='$u_type',`pass`= 'PASSWORD('$pass')',email='$email'" ,"where u_id=".$id,$con);
		?><!--		<meta http-equiv="Refresh" content="0;URL=manguser.php"/>	--><?
		 else{echo 'تأكد من كلمة المرور';}

   ?>


<?php }
	
	?>
   
	


























   
		 
		 
	
		
	
	
	
</body>
</html>