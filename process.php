<?php ob_start();

if(isset($_POST('submit'))){
	$to="bhimkp5@gmail.com";
	$subject=$_POST('subject');
	$text=$_POST('message');
	$header="From: ".$email ."\r\n" ."CC: myselfbs.10@gmail.com";
	mail($to,$subject,$message,$header);
	header("Location: contact.html");
	
}