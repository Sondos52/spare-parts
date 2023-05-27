<?php
include("include/header.php");
session_start();
?>
<section class="contact-img" style="background-blend-mode: hard-light;background-color: #212529a1;">
    <div class="contact-details">
        <form>
            <label for="search-product">ابحث عن منتج</label>
            <br>
            <input type="search" name="search-product" id="search-product" placeholder="ادخل اسم المنتج">
            <input type="submit" value="بحث">
        </form>
    </div>
</section>
<section class="product-group">
    <h3>المجموعات</h3>
    <?php
    include('model/group_model.php');
    include('function/get.php');
    $allGroup = getWithImage("group");
    $count = count($allGroup);
    if ($count > 4) $width =  $count * 25 . "%";
    else $width = '100% + 105px';
    echo '<button id="gp-next-btn"><i class="fa-solid fa-chevron-left"></i></button>';
    echo '<button id="gp-pervious-btn"><i class="fa-solid fa-chevron-right"></i></button>';
    echo '<div class="slider-group">';
    echo "<div class='cont' data-num='{$count}' style='width: calc(" . $width . ");'>";
    for ($i = 0; $i < count($allGroup); $i++) {
        $group = new GroupModel($allGroup[$i]);
        echo "<div class='main-card'>";
        echo "<img src='{$group->image_url}' alt='{$group->name}'>";
        echo "<a href='#'>";
        echo "<h3>{$group->name}</h3>";
        echo "</a>";
        echo "</div>";
    }
    echo '</div>';
    ?>
    </div>
</section>

<div class="products">
    <?php
    include('conn/conn.php');
    $result = mysqli_query($con, 'SELECT * FROM `product`');
    if ($result) {
        while ($r = $result->fetch_assoc()) {
            $re = mysqli_query($con, "SELECT * FROM `image` where `id`={$r['img_id']}");
            $img = $re->fetch_assoc();
            echo "<a href='pro_details.php?id={$r['pr_id']}'>";
            echo '<div class="product-card">';
            echo "<img src={$img['url']} alt=''>";
            echo "<h3 class='card-title'>{$r['pname']}</h3>";
            echo "<p>{$r['details']}</p>";
            echo "<hr>";
            echo "<div class='card-footer'>";
            echo '<i class="fa-regular fa-heart"></i>';
            echo "<h5>\${$r['price']}.00</h5>";
            echo '</div>';
            echo '</div>';
            echo "</a>";
        }
    }
    ?>
</div>
<?php
include("include/footer2.php");
include("include/footer.php");
?>
<script src="js/product.js"></script>