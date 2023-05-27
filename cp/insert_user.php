<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" defer></script>
    <script src="js/all.min.js" defer></script>
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <title>شركة سام مسعد لقطع الغيار</title>
    <link rel="shortcut icon" href="images/logo-t.png" type="image/x-icon">
</head>

<body class="dashboard">

 <!-- Start Users -->
      
 <div class="users" style="display: none;">
                <div class="table-user">
                    <div class="search-user">
                        <input type="search" placeholder="ابحث عن مستخدم ..." id="search-user">
                        
                        <a href="add_users.php">
                        <button  >مستخدم جديد</button>
                    </a>
                    </div>
                    <div class="scroll-tb">
                        <table class="tb-users">
                            <thead>
                                <th>الاسم</th>
                                <th>الايميل</th>
                                <th>تاريخ التسجيل</th>
                                <th>النوع</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </thead>
                            <tbody>
                            <?php
    include('conn/conn.php');
    $result = mysqli_query($con, 'SELECT * FROM `user`');
    if ($result) {
        while ($r = $result->fetch_assoc()) {
            
            echo '<tr>';
            echo "<td data-name='sam_u'>$r[name]</td>";
            echo "<td data-name='sam_u'>$r[email]</td>";
            echo "<td data-name='sam_u'>$r[date]</td>";
            echo "<td data-name='sam_u'>$r[type]</td>";
            echo " <td><button class='edit-btn-user' data-id='5'>تعديل</button></td>";
            echo " <td><button class='delete-user-btn' data-id='8'>حذف</button></td>";

            echo '</tr>';
     
        }
       
    }
    ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
   
	

            <!-- End Users -->

            <!-- End Users -->

    <?php
    include('function/get.php');
    include('model/product_model.php');
    ?>

<?php 
	if(! isset($_POST["submit"]))
	{
	?>
    <div class="frame add-user-frame" style="display: none;">
        <form method="post" class="edit-frame">
            <input type="hidden" name="id">
            <div class="name">
                <label for="name">الاسم</label>
                <input type="text" name="name" value="">
            </div>
            <div class="email">
                <label for="email">الايميل</label>
                <input type="email" name="email" value="">
            </div>
            <div class="password">
                <label for="pass">كلمة السر </label>
                <input type="password" name="pass">
            </div>
            <div class="type">
                <label for="type">النوع</label>
                <div class="check">
                    <label for="type-check1">مدير</label>
                    <input type="radio" name="type" value="1">
                    <label for="type-check2">مستخدم</label>
                    <input type="radio" name="type" value="0">
                </div>
            </div>
           
            <div class="btn-form">
            <input type="submit" name="submit"  value="اضافة">
                <button id="close-add-frame">الغاء</button>
            </div>
        </form>
    </div>
    <?php
	}
	else
	{
		
	include("conn/conn.php");
	 include("conn/function2.php");
		

	$user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$user_password=$_POST['pass'];
    $user_date=DATE("yyyy-MM-DD");
	$type=$_POST['type'];
	//$user_privilge=$_POST['priv'];
	
	
if(	w_insert("user","  `name`,`email`, `pass`,`date`,`type`","'$user_name','$user_email', PASSWORD('$user_password'),' $user_date','$type'",$con));

{
    ?>
     <meta http-equiv="Refresh" content="0; URL=dashboard.php"/> 
    <?php
}

	}
	
	
	?>
   