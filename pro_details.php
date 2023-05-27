<?php
include('include/header.php');

?>
<div class="details_pro">
    <?php
    include('conn/conn.php');
    include('function/get.php');
    $pro = getOne("product", $_GET['id']);
    echo "<img src='{$pro["img_url"]}' alt=''>"
    ?>

    <div class="desc">
        <div class="name">
            <p>الاسم</p>
            <?php
            echo "<p>{$pro['pname']}</p>";
            ?>
        </div>
        <div class="description">
            <p>الوصف</p>
            <?php
            echo "<p>{$pro['details']}</p>";
            ?>
        </div>
        <div class="price">
            <p>السعر</p>
            <?php
            echo "<p>{$pro['price']}</p>";
            ?>
        </div>
        <div class="company-name">
            <p>الشركة</p>
            <?php
            echo "<p>{$pro['camp_id']}</p>";
            ?>
        </div>
        <div class="group-name">
            <p>المجموعة</p>
            <?php
            echo "<p>{$pro['g_id']}</p>";
            ?>
        </div>
    </div>
</div>
<?php
include('include/footer2.php');
include('include/footer.php');
?>