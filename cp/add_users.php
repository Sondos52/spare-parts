<?php 
	// session_start();
	// if(!isset($_SESSION['user']))
	// header('location:../login.php');

	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة مستخدم</title>
<link rel="stylesheet" type="text/css" href="css/indx_style.css" >
<?php //include("head.php"); ?>
</head>

<body>
<?php
    // include('conn/function2.php');
    // include('model/product_model.php');
    ?>

<?php
	
	if(isset($_REQUEST['id']) )
	{
		$id=$_REQUEST['id'];
		include("conn/conn.php");
		include("conn/function2.php");
	    $query="SELECT * FROM `user` where u_id=$id";
		$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res) >0)
	{
		
		$row=mysqli_fetch_assoc($res);
	
?>

   <div class="container">
  <form method="post">
  <div class="row">
  
    <div class="col-75">
      <input type="text" id="fname" name="name">
    </div>
      <div class="col-25">
      <label for="fname">   اسم المستخدم   </label>
    </div>
  </div>
  
  <!-- <div class="col-75">
      <input type="text" id="fname" name="phone">
    </div>
      <div class="col-25">
      <label for="fname">   phone    </label>
    </div>
  </div> -->


  
    <div class="col-75">
      <input type="text" id="fname" name="email">
    </div>
      <div class="col-25">
      <label for="fname">  البريد الالكتروني   </label>
    </div>
  </div>


  
    <div class="col-75">
      <input type="text" id="fname" name="password" >
    </div>
      <div class="col-25">
      <label for="fname">   كلمة المرور   </label>
    </div>
  </div>
  <div class="col-75">
      <input type="text" id="password" name="pass">
    </div>
      <div class="col-25">
      <label for="fname">   password </label>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="country">نوع المستخدم</label>
    </div>
    <div class="col-75">
        <input type="radio" value="0" name="type" checked> <label for="Admin">Admin</label>
      <br>
        <br>
        
               <input type="radio" value="1" name="type"  >  <label for="user">user</label>
              <br>
                
        <br>
    </div>
  </div>


 <br>
 <br>
  
  
      

  <div class="row">
    <input type="submit" name="submit" value="ادخال">
  </div>
  </form>
</div>
</div>

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
	$name=$_POST['name'];
	$user_email=$_POST['email'];
	$user_password=$_POST['password'];
	$user_type=$_POST['type'];
    
		 
if(w-update("user","name='$name',email='$user_email',pass=PASSWORD('$user_password'),type='$user_statu'" ,"where u_id=$id",$con))
{
   ?>
			<!-- <meta http-equiv="Refresh" content="0; URL=manage_user.php"/> -->

<?php }
	else
	echo "خطأ";
	?>
   
	
		 
		 
		<?php  

		
	} ?>
		




</body>
</html>