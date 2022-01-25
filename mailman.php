<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$mailFrom=$_POST['email'];
	$message=$_POST['message'];

	$mailTo='joeyanyim@gmail.com'; // Receiver Email ID 
	$headers="From: ".$mailFrom;
	$text="You have received an e-mail from ".$name."\n\n".$message;

	mail($mailTo, $text, $headers);
	header("Location: index.html?mailsend");
		
}
?>