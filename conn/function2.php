
<?php
// function createThumb($new_width, $new_height, $image_path, $thumb_path, $filetype)
// {



//   if ($filetype == "image/jpeg") {
//     $imagecreate = "imagecreatefromjpeg";
//     $imageformat = "imagejpeg";
//   }

//   if ($filetype == "image/png") {
//     $imagecreate = "imagecreatefrompng";
//     $imageformat = "imagepng";
//   }

//   if ($filetype == "image/gif") {
//     $imagecreate = "imagecreatefromgif";
//     $imageformat = "imagegif";
//   }


//   $image_p = imagecreatetruecolor($new_width, $new_height);

//   $image = $imagecreate($image_path); //photo folder

//   list($width, $height) = getimagesize($image_path);
//   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//   $imageformat($image_p, $thumb_path); //thumb folder  


// }

//--------------------------------------------------
// function searchGrid($query, $updateOk = false, $editPage = "", $deleteOk = false, $returnPage = "")
// {
//   $result = mysql_query($query);
//   $tbl = '<table  
// class="table table-striped table-bordered table-hover" align="center" >
// 	<thead >';
//   $RowNum = mysql_num_fields($result);

//   for ($col = 0; $col < $RowNum; $col++)
//     $tbl .= ' <th style="text-align:right;">' . mysql_field_name($result, $col) . '</th>';
//   if ($updateOk) {
//     $tbl .= ' <th>edit</th>';
//   }
//   if ($deleteOk) {
//     $tbl .= ' <th>delete</th>';
//   }
//   $tbl .= ' </thead>';
//   $rowNow = 1;
//   while ($row = mysql_fetch_row($result)) {
//     $tbl .= '<tr bgcolor="#ccc">';
//     for ($col = 0; $col < $RowNum; $col++) {
//       $tbl .= " <td align='right' id='$row[$col]'><a href='test.php?val=$row[$col]'>$row[$col]</a></td> ";
//       $flags = mysql_field_flags($result, $col);
//       if (strpos($flags, "primary_key")) {
//         $PKCol2 = $col;
//       }
//     }
//     if ($updateOk) {
//       $tbl .= "<td><a href=$editPage?pkval=$row[$PKCol2]><img src='img/edit.png' width=20 height=20></a></td>";
//     }
//     if ($deleteOk) {
//       $table = mysql_field_table($result, 0);
//       $PKName = mysql_field_name($result, $PKCol);
//       $tbl .= "<td><a href=del.php?table=$table&PK=$PKName&pkval=$row[$PKCol]&page=$returnPage><img src='img/rmv.jpg' width=20 height=20></a></td>";
//     }

//     $tbl .= '</tr>';
//   }

//   if (mysql_errno() == 0)
//     return $tbl . '</table>';
//   else
//     return "error : " . mysql_error();
// }

//------------------------------------------------
function w_insert($tableName, $filds, $values, $conn)
{
  $insertSQL = "INSERT INTO $tableName ($filds) VALUES ($values)";
  echo $insertSQL . "<br>";

  if (mysqli_query($conn, $insertSQL)) {
    return mysqli_insert_id($conn);
  } else {

    return -1;
  }
}

//------------------------------------------------
// function runQuery($query, $conn)
// {

//   ///echo $query;

//   if (mysqli_query($conn, $query)) {
//     return true;
//   } else {

//     false;
//   }
// }
// //------------------------------------------------
// function get_linked_table($query, $id, $field, $head_title, $page, $conn)
// {

//   $result = $conn->query($query);

//   if ($result->num_rows > 0) {
//     // output data of each row
//     echo "<table border='1' id='slct_tbl' class='table table-hover table-striped'>";

//     echo "<th >$head_title</th>";
//     while ($row = $result->fetch_assoc()) {
//       echo "<tr>";
//       echo "<td><a href='$page?val=" . $row[$id] . "'>" . $row[$field] . "</a></td>";
//       echo "</tr>";
//     }
//     echo "</table>";
//   } else {
//     echo "0 results";
//   }
//   $conn->close();
// }

//---------------------------------------------------
function w_update($tableName, $values, $where, $conn)
{
  $updateSQL = "UPDATE $tableName SET $values $where";
  //echo $updateSQL."<br />";
  if (mysqli_query($conn, $updateSQL))
    return true;
  else
    return false;
}

//--------------------------------------------------
function feachdata(string $table_name, $id)
{
    global $con;
    $result = mysqli_query($con, "SELECT * FROM `{$table_name}` where `u_id`={$id}");
    if ($result) {
        $r = $result->fetch_assoc();
        $re = mysqli_query($con, $r);
       
    }
    return $r;
}
//--------------------------------------------------
// function w_getRecord($fields, $tablename, $where, $conn)
// {

//   $query_Recordset2 = "SELECT $fields FROM $tablename $where";
//   //	echo $query_Recordset2."<br>";
//   if ($Recordset2 = mysqli_query($conn, $query_Recordset2)) {
//     while ($row_Rec1[] = mysqli_fetch_assoc($Recordset2)) {
//     }

//     return $row_Rec1;
//   } else
//     return "Error";
// }
//----------------------------------------------
// function w_get_maxId($filds, $tablename, $where = "", $conn)
// {

//   $query_Recordset2 = "SELECT $filds FROM $tablename $where";
//   //echo $query_Recordset2."";
//   if ($result = mysqli_query($conn, $query_Recordset2)) {
//     $row = mysqli_fetch_row($result);
//     return $row[0];
//   } else
//     return mysqli_errno($conn) . ":" . mysqli_error($conn);
// }
// //----------------------------------------------
// function w_delete($table, $where = "", $conn)
// {

//   $query_Recordset2 = "delete FROM $table $where";
//   //echo $query_Recordset2."<br />";
//   if (mysqli_query($conn, $query_Recordset2))
//     return true;
//   else
//     return mysql_errno() . ":" . mysql_error();
// }


// //-------------------------------------------
// function w_upload_file($path, $file)
// {
//   //echo $file['tmp_name'];
//   if (move_uploaded_file(
//     $file['tmp_name'],
//     $_SERVER['DOCUMENT_ROOT'] . $path
//   )) {
//     return true;
//   } else
//     return false;
// }
// //-------------------------------------------

// function w_upload_img($file, $target_dir, $target_file)
// {

//   $uploadOk = 1;
//   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//   // Check if image file is a actual image or fake image
//   if (isset($_POST["submit"])) {
//     $check = getimagesize($file["tmp_name"]);
//     if ($check !== false) {
//       echo "File is an image - " . $check["mime"] . ".";
//       $uploadOk = 1;
//     } else {
//       echo "File is not an image.";
//       $uploadOk = 0;
//     }
//   }
//   // Check if file already exists

//   // Check file size
//   if ($file["size"] > 5000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
//   }
//   // Allow certain file formats
//   if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
//   ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
//   }
//   // Check if $uploadOk is set to 0 by an error
//   if ($uploadOk == 0) {
//     echo "نعتذر, لم يتم رفع الصورة." . "<br>";
//     // if everything is ok, try to upload file
//   } else {
//     if (move_uploaded_file($file["tmp_name"], $target_file)) {
//       // echo "<br>
//       //The file ". basename( $file["name"]). " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
//   }
// }
// //---------------------------------------------------
// function sanitize($data)
// {
//   return HTML_ENTITIES(strip_tags(mysql_real_escape_string($data)));
// }
// //---------------------------------------------------
// function deleteRecursive($dir)
// {

//   // check if argument is a valid directory
//   if (!is_dir($dir)) {
//     die("'$dir' is not a valid directory");
//   }
//   // open directory handle
//   $dh = opendir($dir) or die("Cannot open directory '$dir'");
//   // iterate over files in directory
//   while (($file = readdir($dh)) !== false) {
//     // filter out "." and ".."
//     if ($file != "." && $file != "..") {
//       if (is_dir("$dir/$file")) {
//         // if this is a subdirectory
//         // recursively delete it
//         deleteRecursive("$dir/$file");
//       } else {
//         // if this is a file
//         // delete it
//         unlink("$dir/$file") or die("Cannot delete file ↵
// '$file'");
//       }
//     }
//   }
//   // close directory
//   closedir($dh);
//   // remove top-level directory
//   rmdir($dir);
// }


?>
