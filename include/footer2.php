<?php
include('conn/conn.php');
$result = mysqli_query($con, 'SELECT * FROM `campany`');
echo '<div class="company" style="padding: 90px;">';
if ($result) {
    while ($r = $result->fetch_assoc()) {
        $re = mysqli_query($con, "SELECT * FROM `image` where `id`={$r['img_id']}");
        $img = $re->fetch_assoc();
        echo "<a href='#'><img src='{$img['url']}' alt='Company Logo'></a>";
    }
}
echo '</div>';
