<?php
	$uerror = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			$uerror = "Enter valid Name";
		}else{
			$uerror = $_REQUEST['name'];
		}
	}
?>
<html> 
	<head> </head>
	<body> 
		<br> <br> <br>
		<form action = "#" method = "POST"> 
			Name : <br>
			<input type = "text" name = "name" value = "<?=$uerror?>"> <br>
			<input type="submit" name="submit" value="Submit"> <br>
		</form>
	</body>
</html>
