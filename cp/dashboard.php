<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js" defer></script>
    <script src="../js/all.min.js" defer></script>
    <script src="../js/bootstrap.bundle.min.js" defer></script>
    <script src="../js/main.js" defer></script>
    <title>شركة سام مسعد لقطع الغيار</title>
    <link rel="shortcut icon" href="../images/logo-t.png" type="image/x-icon">
</head>

<body class="dashboard">
    <?php
    include('../function/get.php');
    include('../model/product_model.php');
    ?>

    <!-- Start Dashboard Navbar -->
    <nav class="d-nav">
        <div class="nav-dash">
            <ul>
                <li>
                    <div class="right-nav">
                        <div class="logo"><img src="../images/logo-t.png" alt=""></div>
                        <div class="nav-btn"><button id="menu-btn-dash"><i class="fa-solid fa-bars"></i></button></div class="nav-btn">
                    </div>
                </li>
                <li>
                    <button class="logout">
                        <span>خروج</span>

                    </button>
                    <div class="btn-help">
                        <div class="msg" data-num="20"><i class="fa-regular fa-envelope">
                            </i>
                        </div>
                    </div>
                    <div class="profile">
                        <img src="../images/Brake.jpg" alt="">
                        <p>samm</p>
                    </div>

                </li>
            </ul>
        </div>
    </nav>
    <!-- End Dashboard Navbar -->
    <div class="dash-container">
        <!-- Start Dashboard Right Slider -->
        <div class="right-slide">
            <ul>
                <li class="btn-control">
                    <button id="control-btn">
                        <i class="fa-solid fa-house"></i>
                        <span>لوحة التحكم</span>
                    </button>
                </li>
                <li class="btn-users">
                    <button id="users-btn">
                        <i class="fa-solid fa-users"></i>
                        <span>المسنتخدمين</span>
                    </button>
                </li>
                <li class="btn-product">
                    <button id="product-btn">
                        <i class="fa-solid fa-store"></i>
                        <span>المنتجات</span>
                    </button>
                </li>
                <li class="btn-groups">
                    <button id="groups-btn">
                        <i class="fa-solid fa-grip"></i>
                        <span>المجموعات</span>
                    </button>
                </li>
                <li class="btn-category">
                    <button id="category-btn">
                        <i class="fa-solid fa-shapes"></i>
                        <span>الاصناف</span>
                    </button>
                </li>
                <li>
                    <button id="company-btn">
                        <i class="fa-solid fa-building"></i>
                        <span>الشركات</span>
                    </button>
                </li>
                <li>
                    <button id="msg-btn">
                        <i class="fa-solid fa-envelope"></i>
                        <span>الرسائل</span>
                    </button>
                </li>
            </ul>
        </div>
        <!-- Start Dashboard Right Slider -->
        <div class="left-slide">
            <!-- Start Control Panel -->
            <div class="control-panel">
                <div class="control-top">
                    <div class="card-dash">
                        <h5> جميع المسنتخدمين</h5>
                        <div class="body-card">
                            <i class="fa-solid fa-users"></i>
                            <p>2000</p>
                        </div>
                    </div>
                    <div class="card-dash">
                        <h5>المسنتخدمين الجدد</h5>
                        <div class="body-card">
                            <i class="fa-solid fa-users"></i>
                            <p>2000</p>
                        </div>
                    </div>
                    <div class="card-dash">
                        <h5>المفضلة</h5>
                        <div class="body-card">
                            <i class="fa-solid fa-users"></i>
                            <p>2000</p>
                        </div>
                    </div>
                    <div class="card-dash">
                        <h5>المنتجات</h5>
                        <div class="body-card">
                            <i class="fa-solid fa-users"></i>
                            <p>2000</p>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="tb-users control-table">
                        <thead>
                            <tr>
                                <th>اسم المنتج</th>
                                <th>عدد مرات الاضافة للمفضلة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>منتج 1</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>منتج 1</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>منتج 1</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>منتج 1</td>
                                <td>50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- End Control Panel -->
            <!-- Start Users -->
      
            <div class="users" style="display: none;">
                <div class="table-user">
                    <div class="search-user">
                        <input type="search" placeholder="ابحث عن مستخدم ..." id="search-user">
                        <button class="btn-user" >مستخدم جديد</button>
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
    include('../conn/conn.php');
    $result = mysqli_query($con, 'SELECT * FROM `user`');
    if ($result) {
        while ($r = $result->fetch_assoc()) {
            
            echo '<tr>';
            echo "<td data-name='sam_u'>$r[name]</td>";
            echo "<td data-name='sam_u'>$r[email]</td>";
             $r['date']=DATE("y-m-d"); 
            echo "<td data-name='sam_u'>$r[date]</td>";
            if($r['type']==1)
            {
                echo "<td data-name='sam_u'>مدير</td>";
            }
            else{
                echo "<td data-name='sam_u'>مستخدم</td>";
            }
           
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
            <!-- Start Product -->
            <div class="product-dash" style="display: none;">
                <div class="search-user">
                    <form>
                        <input type="search" placeholder="ابحث عن منتج ..." id="search-product">
                        <!-- <input type="submit" name="" value="بحث"> -->
                    </form>
                    <button class="btn-add-product">منتج جديد</button>
                </div>
                <div class="scroll-pro">
                    <div class="all-product">
                        <?php
                        $pro = getWithImage('product');
                        for ($i = 0; $i < count($pro); $i++) {
                            $product = new ProductModel($pro[$i]);
                            echo '<div class="pro-card">';
                            echo "<img src='{$product->image_url}' alt='{$product->name}' data-img='{$product->image_url}'>";
                            echo "<h3 data-title='{$product->name}'>{$product->name}</h3>";
                            echo "<p data-desc='{$product->details}'>{$product->details}</p>";
                            echo "<hr>";
                            echo " <div class='card-footer'>";
                            echo "<button data-id='{$product->id}'  data-gid='{$product->group_id}' data-cid='{$product->category_id}' data-coid='{$product->company_id}'  class='edit-product-btn'><i class='fa-solid fa-pen'></i></button>";
                            echo "<h5 data-price='{$product->price}'>{$product->price}</h5>";
                            echo " </div>";
                            echo "<button data-id='{$product->id}' class='btn-delete-product'>حذف</button>";
                            echo ' </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- End Product -->
            <!-- Start Group -->
            <div class="group-dash" style="display: none;">
                <div class="search-user">
                    <form>
                        <input type="search" placeholder="ابحث عن مجموعة ..." id="search-group">
                        <!-- <input type="submit" name="" value="بحث"> -->
                    </form>
                    <button class="btn-add-group">مجموعة جديد</button>
                </div>
                <div class="scroll-pro">
                    <div class="all-group">
                        <div class="pro-card gp-item">
                            <img src="../../images/8765669_25656.jpg" alt="" data-img="../../images/8765669_25656.jpg">
                            <h3 data-title="hello">a</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="10" class="btn-delete-group">حذف</button>
                                <button data-id="10" data-caid="5" class="edit-group-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                        <div class="pro-card gp-item">
                            <img src="../../images/category.jpg" alt="" data-img="../../images/category.jpg">
                            <h3 data-title="hello">hello</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="10" class="btn-delete-group">حذف</button>
                                <button data-id="10" data-caid="5" class="edit-group-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Group -->
            <div class="category-dash" style="display: none;">
                <div class="search-user">
                    <form>
                        <input type="search" placeholder="ابحث عن صنف ..." id="search-ca">
                        <!-- <input type="submit" name="" value="بحث"> -->
                    </form>
                    <button class="btn-add-group" id="btn-add-ca">صنف جديد</button>
                </div>
                <div class="scroll-pro">
                    <div class="all-group all-category">
                        <div class="pro-card ca-item">
                            <img src="../images/van.png" alt="" data-img="../images/van.png">
                            <h3 data-title="hello">a</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="10" class="btn-delete-ca">حذف</button>
                                <button data-id="10" data-caid="5" class="edit-ca-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                        <div class="pro-card ca-item">
                            <img src="../images/truk.png" alt="" data-img="../images/truk.png">
                            <h3 data-title="hello">hello</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="10" class="btn-delete-ca">حذف</button>
                                <button data-id="10" data-caid="5" class="edit-ca-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                        <div class="pro-card ca-item">
                            <img src="../images/traIiler.png" alt="" data-img="../images/traIiler.png">
                            <h3 data-title="hello">hello</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="10" class="btn-delete-ca">حذف</button>
                                <button data-id="10" data-caid="5" class="edit-ca-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-dash" style="display: none;">
                <div class="search-user">
                    <form>
                        <input type="search" placeholder="ابحث عن شركة ..." id="search-cp">
                        <!-- <input type="submit" name="" value="بحث"> -->
                    </form>
                    <button class="btn-add-group" id="btn-add-cp">شركة جديد</button>
                </div>
                <div class="scroll-pro">
                    <div class="all-group all-company">
                        <div class="pro-card cp-item">
                            <img src="../images/logo_01.png" alt="" data-img="../images/8765669_25656.jpg">
                            <h3 data-title="hello">g</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="10" class="btn-delete-cp">حذف</button>
                                <button data-id="10" class="edit-cp-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                        <div class="pro-card cp-item">
                            <img src="../images/logo_02.png" alt="" data-img="../images/8765669_25656.jpg">
                            <h3 data-title="hello">hello</h3>
                            <hr>
                            <div class='card-footer'>
                                <button data-id="12" class="btn-delete-cp">حذف</button>
                                <button data-id="10" class="edit-cp-btn"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="msg-dash" style="display: none;">
                <div class="search-user search-msg">
                    <form>
                        <input type="search" placeholder="ابحث عن رسالة باسم المرسل ..." id="search-msg">
                        <!-- <input type="submit" name="" value="بحث"> -->
                    </form>
                </div>
                <div class="scroll-pro">
                    <div class="all-group all-msg">
                        <div class="card-msg">
                            <div class="full-name">
                                <span>رسالة من: </span>
                                <sapn class="name">يوسف </sapn>
                            </div>
                            <hr>
                            <div class="mail">
                                <span>الايميل :</span>
                                <a href="mailto:Yousif0180@gmail.com">Yousif0180@gmail.com</a>
                            </div>
                            <div class="phone">
                                <span>الهاتف :</span>
                                <a href="tel:+967 775 657 428">+967 775 657 428</a>
                            </div>
                            <hr>
                            <p>محتوى الرسالة :</p>
                            <div>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</div>
                        </div>
                        <div class="card-msg">
                            <div class="full-name">
                                <span>رسالة من: </span>
                                <sapn class="name">يوسف خالد</sapn>
                            </div>
                            <hr>
                            <div class="mail">
                                <span>الايميل :</span>
                                <a href="mailto:Yousif0180@gmail.com">Yousif0180@gmail.com</a>
                            </div>
                            <div class="phone">
                                <span>الهاتف :</span>
                                <a href="tel:+967 775 657 428">+967 775 657 428</a>
                            </div>

                            <hr>
                            <p>محتوى الرسالة :</p>
                            <div>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</div>
                        </div>
                        <div class="card-msg">
                            <div class="full-name">
                                <span>رسالة من: </span>
                                <sapn class="name">يوسف خالد</sapn>
                            </div>
                            <hr>
                            <div class="mail">
                                <span>الايميل :</span>
                                <a href="mailto:Yousif0180@gmail.com">Yousif0180@gmail.com</a>
                            </div>
                            <div class="phone">
                                <span>الهاتف :</span>
                                <a href="tel:+967 775 657 428">+967 775 657 428</a>
                            </div>

                            <hr>
                            <p>محتوى الرسالة :</p>
                            <div>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start User Process -->
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
		
	include("../conn/conn.php");
	include("../conn/function2.php");
		

	$user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$user_password=$_POST['pass'];
    $user_date=STRTOTIME("yy-mm-dd"); 
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
    <!-- ////////////////////////////////////////////////////////////////////////////update user -->

    <?php
	
    include("../conn/conn.php");
    include("../conn/function2.php");
	if(isset($_REQUEST['id']) )
	{
	$id=$_REQUEST['id'];
	$query="select `name`,`email`,PASSWORD(`pass`),`type`,`date` from user where u_id=$id";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows ($res) >0)
	{
		
		$row=mysqli_fetch_assoc($res);
	
?>
  
    <div class="frame edit-user-frame" style="display: none;">
        <form method="post" class="edit-frame">
            <input type="hidden" name="u_id" value="<?php echo $_GET['id'];?>">
            <div class="name">
                <label for="name">الاسم</label>
                <input type="text" value="<?=$row['name'];?> ">
            </div>
            <div class="email">
                <label for="email">الايميل</label>
                <input type="email" name="email" value="<?=$row['email'];?> ">
            </div>
            <div class="type">
                <label for="type">النوع</label>
                <div class="check">
                    <label for="type">مدير</label>
                    <input type="radio" name="type" value="<?=$row['type'];?>">
                    <label for="type">مستخدم</label>
                    <input type="radio" name="type" value="<?=$row['type'];?>">
                </div>
            </div>
            <div class="password">
                <label for="pass">كلمة السر الجديده</label>
                <input type="password" name="pass" value="<?=$row['pass'];?> ">
            </div>
            <div class="btn-form">
                <input type="submit" value="تعديل" name="submit">
                <button class="close-user">الغاء</button>
            </div>
        </form>
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
		 include("../conn/function2.php");
    $id=$_POST['u_id'];
	$pass=$_POST['pass'];
	$u_name=$_POST['name'];
	$u_type=$_POST['type'];
	$email=$_POST['email'];
	
	
	
w_update("user","name='$u_name',email='$email',`pass`= 'PASSWORD('$pass')',type='$u_type'" ,"where u_id=".$id,$con);
		?><!--		<meta http-equiv="Refresh" content="0;URL=dashboard.php"/>	--><?
		 else{echo 'تأكد من كلمة المرور';}

   ?>


<?php }
	?>

   <!-- update data/////////////////////////////////////////////////////////////////////////// -->



    <!-- End User Process -->

    <!-- Start Delete Process -->
    <!-- This delete For All Section -->
    <div class="frame delete-user-frame" style="display: none;">
        <div class="alter-user">
            <p>هل انت متاكد من الحذف؟</p>
            <div class="control-alter">
                <form>
                    <input type="hidden" value="test value" name="id">
                    <button id="no-delete">الغاء</button>
                    <input type="submit" id="yes-delete" value="نعم">
                </form>
            </div>
        </div>
    </div>
    <!-- END Delete Process -->

    <!-- Start Product Process -->
    <div class="frame add-product-frame" style="display: none;">
        <form class="add-product-form" id="form-add-product">
            <h3>منتج جديد</h3>
            <div class="title-pro">
                <label for="name">العنوان</label>
                <input type="text" value="">
            </div>
            <div class="description-pro">
                <label for="desc-add">الوصف</label>
                <textarea name="desc" id="desc-add"></textarea>
            </div>
            <div class="price-pro">
                <label for="price">السعر</label>
                <input type="number" name="price">
            </div>
            <div class="include-of">
                <label>ينتمي الى </label>
                <div class="include-element">
                    <div class="include-gp">
                        <p>المجموعة</p>
                        <input type='hidden' value='' name='ca_id'>
                        <ul>
                            <?php
                            $group = getWithImage('group');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['g_id']}'>{$group[$i]['name']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="include-cg">
                        <p>الصنف</p>
                        <input type='hidden' value='' name='ca_id'>
                        <ul>
                            <?php
                            $group = getWithImage('category');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['ca_id']}'>{$group[$i]['cname']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="include-cp">
                        <p>الشركة</p>
                        <input type='hidden' value='' name='c_id'>
                        <ul>
                            <?php
                            $group = getWithImage('campany');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['c_id']}'>{$group[$i]['name']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="image-pro-add">
                <p>الصورة</p>
                <label for="image-pro">اختار الصورة</label>
                <input type="file" name="image-p" value="اختار الصورة" id="image-pro" style="display: none;">
            </div>
            <div class="btn-form">
                <button>الغاء</button>
                <input type="submit" value="اضافة">
            </div>
        </form>
    </div>
    <div class="frame add-product-frame edit-product-frame" style="display: none;">
        <form class="add-product-form edit-product-form" id="form-edit-product">
            <input type="hidden" name="id" value="">
            <div class="title-pro">
                <label for="title">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="description-pro">
                <label for="desc">الوصف</label>
                <textarea name="desc" id="desc"></textarea>
            </div>
            <div class="price-pro">
                <label for="price">السعر</label>
                <input type="number" name="price">
            </div>
            <div class="include-of">
                <label>ينتمي الى </label>
                <div class="include-element">
                    <div class="include-gp">
                        <p>المجموعة</p>
                        <input type='hidden' value='' name='ca_id'>
                        <ul>
                            <?php
                            $group = getWithImage('group');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['g_id']}'>{$group[$i]['name']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="include-cg">
                        <p>الصنف</p>
                        <input type='hidden' value='' name='ca_id'>
                        <ul>
                            <?php
                            $group = getWithImage('category');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['ca_id']}'>{$group[$i]['cname']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="include-cp">
                        <p>الشركة</p>
                        <input type='hidden' value='' name='C_id'>
                        <ul>
                            <?php
                            $group = getWithImage('campany');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['C_id']}'>{$group[$i]['name']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="image-pro">
                <div class="before-img">
                    <p>الصورة</p>
                    <img src="" alt="NO IMG" width="200" height="200">
                </div>
                <div class="image-edit">
                    <label for="image-pp">اختار صورة جديده</label>
                    <input type="file" name="image-p" value="اختار الصورة" id="image-pp" style="display: none;">
                </div>
            </div>
            <div class="btn-form">
                <button class="close-frame-user">الغاء</button>
                <input type="submit" value="تعديل">
            </div>
        </form>
    </div>
    <!-- END Product Process -->

    <!-- Start Group Process -->
    <div class="frame add-group-frame" style="display: none;">
        <form class="add-product-form" id="form-add-group">
            <h3>مجموعة جديد</h3>
            <div class="title-pro title-gp">
                <label for="name">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="image-pro-add image-gp-add">
                <p>الصورة</p>
                <label for="image-gp">اختار الصورة</label>
                <input type="file" name="image-p" value="اختار الصورة" id="image-gp" style="display: none;">
            </div>
            <div class="include-of groups">
                <label>ينتمي الى </label>
                <div class="include-element">
                    <div class="include-cg">
                        <p>الصنف</p>
                        <input type='hidden' value='' name='ca_id'>
                        <ul>
                            <?php
                            $group = getWithImage('category');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['ca_id']}'>{$group[$i]['cname']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-form">
                <button class="close-gp-frame">الغاء</button>
                <input type="submit" value="اضافة">
            </div>
        </form>
    </div>
    <div class="frame edit-group-frame" style="display: none;">
        <form class="add-product-form" id="form-edit-group">
            <div class="title-pro title-gp">
                <label for="name">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="include-of groups">
                <label>ينتمي الى </label>
                <div class="include-element">
                    <div class="include-cg">
                        <p>الصنف</p>
                        <input type='hidden' value='' name='ca_id'>
                        <ul>
                            <?php
                            $group = getWithImage('category');
                            for ($i = 0; $i < count($group); $i++) {
                                echo "<li data-id='{$group[$i]['ca_id']}'>{$group[$i]['cname']} </li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="image-pro">
                <div class="before-img">
                    <p>الصورة</p>
                    <img src="" alt="NO IMG" width="200" height="200">
                </div>
                <div class="image-edit">
                    <label for="image-p">اختار صورة جديده</label>
                    <input type="file" name="image-p" value="اختار الصورة" id="image-p" style="display: none;">
                </div>
            </div>
            <div class="btn-form">
                <button class="close-gp-frame">الغاء</button>
                <input type="submit" value="اضافة">
            </div>
            <input type="hidden" value="20" name='id'>
        </form>
    </div>
    <!-- END Group Process -->
    <!-- Start Company Process -->
    <div class="frame add-company-frame" style="display: none;">
        <form class="add-product-form" id="form-add-company">
            <h3>شركة جديد</h3>
            <div class="title-pro title-cp">
                <label for="name">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="image-pro-add image-cp-add">
                <p>الصورة</p>
                <label for="image-cp">اختار الصورة</label>
                <input type="file" name="image-p" value="اختار الصورة" id="image-cp" style="display: none;">
            </div>
            <div class="btn-form">
                <button class="close-cp-frame">الغاء</button>
                <input type="submit" value="اضافة">
            </div>
        </form>
    </div>
    <div class="frame edit-company-frame" style="display: none;">
        <form class="add-product-form" id="form-edit-company">
            <div class="title-pro title-gp">
                <label for="name">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="image-pro">
                <div class="before-img">
                    <p>الصورة</p>
                    <img src="" alt="NO IMG" width="200" height="200">
                </div>
                <div class="image-edit">
                    <label for="image-cpp">اختار صورة جديده</label>
                    <input type="file" name="image-p" value="اختار الصورة" id="image-cpp" style="display: none;">
                </div>
            </div>
            <div class="btn-form">
                <button class="close-cp-frame">الغاء</button>
                <input type="submit" value="اضافة">
            </div>
            <input type="hidden" value="20" name='id'>
        </form>
    </div>
    <!-- END Company Process -->

    <!-- Start Category Process -->
    <div class="frame add-category-frame" style="display: none;">
        <form class="add-product-form" id="form-add-category">
            <h3>صنف جديد</h3>
            <div class="title-pro title-ca">
                <label for="name">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="image-pro-add image-ca-add">
                <p>الصورة</p>
                <label for="image-ca">اختار الصورة</label>
                <input type="file" name="image-p" value="اختار الصورة" id="image-ca" style="display: none;">
            </div>
            <div class="btn-form">
                <button class="close-ca-frame">الغاء</button>
                <input type="submit" value="اضافة">
            </div>
        </form>
    </div>
    <div class="frame edit-category-frame" style="display: none;">
        <form class="add-product-form" id="form-edit-category">
            <div class="title-pro title-ca">
                <label for="name">العنوان</label>
                <input type="text" value="" name="title">
            </div>
            <div class="image-pro">
                <div class="before-img">
                    <p>الصورة</p>
                    <img src="" alt="NO IMG" width="300" height="200">
                </div>
                <div class="image-edit">
                    <label for="image-cat">اختار صورة جديده</label>
                    <input type="file" name="image-p" value="اختار الصورة" id="image-cat" style="display: none;">
                </div>
            </div>
            <div class="btn-form">
                <button class="close-ca-frame">الغاء</button>
                <input type="submit" value="اضافة">
            </div>
            <input type="hidden" value="20" name='id'>
        </form>
    </div>
    <!-- END Company Process -->

</body>

</html>