<?php 
if($_REQUEST['id'])
{
	$id=$_REQUEST['id'];
	$query="select * from hotel where ho_id=$id";
	
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
	}
	
}

?>