<?php
include('../conn/conn.php');

function getWithImage(string $table_name)
{
    global $con;
    $arr = array();
    $result = mysqli_query($con, "SELECT * FROM `{$table_name}`");
    if ($result) {
        while ($r = $result->fetch_assoc()) {
            $re = mysqli_query($con, "SELECT * FROM `image` where `id`={$r['img_id']}");
            $r["img_url"] = $re->fetch_assoc()["url"];
            array_push($arr, $r);
        }
    }
    return $arr;
}
function getOne(string $table_name, $id)
{
    global $con;
    $result = mysqli_query($con, "SELECT * FROM `{$table_name}` where `pr_id`={$id}");
    if ($result) {
        $r = $result->fetch_assoc();
        $re = mysqli_query($con, "SELECT * FROM `image` where `id`={$r['img_id']}");
        $r["img_url"] = $re->fetch_assoc()["url"];
    }
    return $r;
}
function hello(){
    return 'hello World';
}