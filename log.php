<html>
	<head>
</head>
<body background="work.jpg">

<?php
if(isset($_POST["submit"])){
    $email=$_POST["user"];
    $pass=$_POST["pass"];
    $con=mysqli_connect("localhost","root","","Events");
		$query="SELECT * FROM `user_login` WHERE user='".$email."' and pass='".$pass."'";
		$result=mysqli_query($con,$query);
		$x=0;
		while($row=mysqli_fetch_array($result))
		{
			$x=1;
		}
		if($x==1)
		{
			echo "valid user";
		
		}else
		{
			echo "invalid username or password";
			
		}
		
	
}

?>
</body>
</html>