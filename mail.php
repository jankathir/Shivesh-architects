<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Shivesh architects</title>
	
</head>
<body>
<?php 

	 
	$to = "jankathir95@gmail.com"; 
    $from = $_REQUEST['email']; 
    $first_name = $_REQUEST['Firstname'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['mesg'];
//    $message1 = $first_name . " " . $from . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
 $send=mail($to,$subject,$message,$headers);
 if($send)
 {
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
 }else
 {
	 echo "sorry";
 }
    
?>
</body>
</html>