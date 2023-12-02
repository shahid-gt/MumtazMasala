<?php 
if(isset($_POST['submit']))
{
	
	$to="mumtazmasala@yahoo.com";
	$subject="Inquiry From Mumtaz Masala..";
	$name=$_POST['name'];
	$company=$_POST['company'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['message'];
		$headers = 'From: inquiry@businessinfoindia.com' . "\r\n" ;
	ini_set('SMTP','smtp.gmail.com');
}
$body="\n 
Firest Name : $name \n 
Company Name : $company \n
Email : $email \n 
Phone : $phone \n 
Message : $msg \n";

mail($to, $subject, $body, $headers);
	header("Location:index.php");
	
?>