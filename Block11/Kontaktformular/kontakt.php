
<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<style>
.alert {
	background: red;
	padding: 20px;
}
</style>
<body>


<form action="" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php 
if(isset($_POST['submit'])){
	echo $_POST['email'];
	
    $to = "info@hagmann.io"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "<div class='alert'>Mail Sent. Thank you " . $first_name . ", we will contact you shortly.</div>";

}
?>
</body>