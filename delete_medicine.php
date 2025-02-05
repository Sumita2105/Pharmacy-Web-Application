<?php

include('connection.php');

if(isset($_SESSION['delete']))
{
	$count=count($_SESSION['delete']);
	$sql="SELECT pid from medicine";
	$result= mysqli_query($con,$sql);
	$item_array=array('pid'=>$result);
	$_SESSION['delete'][$count]=$item_array;
}
else
{
	$item_array=array('pid'=>$_POST['pid']);
	//session variables
	$_SESSION['delete'][0]=$item_array;
}

if(isset($_SESSION['delete']))
{
	$pid=array_column($_SESSION['delete'],'pid');
	$sql1="SELECT *from medicine";
	$result1=mysqli_query($con,$sql1);
	while($row=mysqli_fetch_assoc($result1))
	{
		foreach($pid as $id)
		{
			if($row['pid']==$id)
			{
				$sql2="DELETE FROM medicine where pid='$id'";
				$result2=mysqli_query($con,$sql2);
				if($result2)
				{
					echo ("<script LANGUAGE='JavaScript'>                     
                       window.location.href='view_medicines.php';
					   window.alert('Record removed successfully!!');
                       </script>");
				}
				else
				{
					echo ("<script LANGUAGE='JavaScript'>                     
                        window.location.href='view_medicines.php';
					   window.alert('Error deleting record!!');
                       </script>");
				}
			}
		}
	}
}



?>