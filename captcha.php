<?php 
session_start();
if(!isset($_POST['secure'])){
	$_SESSION['secure'] = rand(1000, 9999);
}
else{
	if($_SESSION['secure'] == $_POST['secure']){
		echo 'A match <br>';
	}
	else{
		echo "Not a match. Try agian <br>";
		$_SESSION['secure'] = rand(1000, 9999);
	}
}
?>

<img src="generate.php" /><br>

<form action="captcha.php" method="POST">
	Type the value you see:
	<input type="text" name="secure" size="6">
	<input type="submit" value="submit">


</form>