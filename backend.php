<?php
if(isset($_POST['sus_email'])){
	$sus_email=$_POST['sus_email'];

	$conx=mysqli_connect("localhost","root","","subscribers");
	$sql="INSERT INTO `subscribers`(`email`) VALUES ('$sus_email');";
	$result=mysqli_query($conx,$sql);
	$sql2="SELECT count(email) AS total FROM subscribers";
	$result2=mysqli_query($conx,$sql2);
	$values=mysqli_fetch_assoc($result2);
	$num_rows=$values['total'];
	if($result==true){
		echo'<span style="color:#FFFFFF;text-align:center;"><h4>Subscribed</h4></span>'.'<br><h4><span style="color:#FFFFFF;text-align:center;">'.'Subscribers  '.$num_rows.'<i class="fa fa-heart" aria-hidden="true"></i></span></h4></br>';
	}else{
		echo'<h4><span style="color:#FFFFFF;text-align:center;">Already Subscribed</span><h4>'.'<br><h4><span style="color:#FFFFFF;text-align:center;">'.'Subscribers  '.$num_rows.'<i class="fa fa-heart" aria-hidden="true"></i></span></h4></br>';
	}
}
?>