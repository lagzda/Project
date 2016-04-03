<?php
 @session_start();
 
require "config1.inc.php";

$action=$_GET['action'];


if($action=="login1")
{
	$_SESSION['user']="";

	$username=$_POST['username'];
	$password=$_POST['password'];

		
	$sql="select * from user where id ='$username' and password='$password'";
	$result=@mysql_query($sql);
	$row=@mysql_fetch_array($result);


	if($row)
	{
		 
		 $_SESSION['user']=$username;
		 $_SESSION['name']=$row['2'];  //get user name
         
	     $sql = "select * from user_major where  id ='$username'";
         $result = mysql_query($sql);
	     $row=mysql_fetch_row($result);

	     $_SESSION['major_name']=$row['2'];
	     $major_name=$row['2'];


	     $sql="select module_name from major_module where major_name='$major_name'";
	     $result = mysql_query($sql);
	     $module_row=array();
	     while($row=mysql_fetch_array($result)){
	     		array_push($module_row,$row);
	     }
	     //$module_row=mysql_fetch_array($result);
	     $_SESSION['module_row']=$module_row;


	     



		 // $i=0;
   //       while ($row)
	  //    {
   //          $_session[$i]['year']=$row['0'];
   //          $_session[$i]['havejob']=$row['1'];
			// $_session[$i]['nojob']=$row['2'];
   //          $row=mysql_fetch_row($result);
			// $i++;
	  //     }
            
		echo("<script type='text/javascript'> location.href='module.php';</script>");
	}
	else
	{
		echo("<script type='text/javascript'> alert('wrong password');location.href='login1.php';</script>");	
	}
}

else
{

}

@mysql_close($_SESSION["link"]);

?>
