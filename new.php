
<?php
//{{{{{{{{{{{{{{{{{add to database}}}}}}}}}}}}}
$link = mysqli_connect("localhost", "root", "", "hopeurl");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$url="'".$_POST['url']."'";
$code=rand(10000,90000);
 
// Attempt insert query execution
$sql = "INSERT INTO urli (code,url) VALUES ($code,$url)";
if(mysqli_query($link, $sql)){?>
 <!DOCTYPE html>
<html>
	<head>
		<title>search code!!</title>
		<link rel="stylesheet" type="text/css" href="assets/codep.css">
	</head>
	<body>
		<div id="back">
		<center>
		<h1 id="yc">HERE'S YOUR CODE!!, SHARE IT WITH ANYONE!!</h1>
		<h2 id="code">
			<?php echo $code;?>
		</h2>
		</center>
		</div>
	</body>
</html>;
<?php } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
