<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$date=date("Y-m-d");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mycontact (name, email, phone,message,date)
VALUES ('$name', '$email', '$phone','$message','$date')";

if ($conn->query($sql) === TRUE) {
  echo "<html><head><script>alert('Thanks For Feedback');</script></head><body></body></html>";
  $to = "".$email;
  $subject = "Feed Back ";
  $message="Thanks for Giving us a feedback !!!";
  $header = "From:sanketbkulkarni6413@gmail.com \r\n";
  $retval = mail ($to,$subject,$message,$header);
  if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
