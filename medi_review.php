<?php
require_once 'medi_formsave.php';
if(ISSET($_POST['submit']))
{
    if($_POST['review_name']!="" || $_POST['review_email']!="" || $_POST['review_web']!="" ||
    $_POST['review_message']!="")
      
{
$review_name=$_POST['review_name'];
$review_email= $_POST['review_email'];
$review_web=$_POST['review_web'];
$review_message=$_POST['review_message'];



  //PHP DATA OBJECT CONNECTION
  $joycon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sqlstring="INSERT INTO `medi_review`(`review_name`, `review_email`, `review_web`, `review_message`) 
  VALUES ('$review_name','$review_email','$review_web','$review_message')";
  /*$sqlstring="INSERT INTO `appoint_form`(`first_name`, `last_name`, `mail`, `phone_number`, `appoint_date`, `appoint_service`, `feed_back`) 
  VALUES ('$first_name','$last_name','$mail','$phone_number','$appoint_date','$appoint_service','$feed_back')";*/

  /*$sqljoy="INSERT INTO `tblpassenger`(`passengerid`, `firstname`, `lastname`, `email`, `departureairport`, `arrivalairport`, `outboundflight_date`, `returnflight_date`) 
  VALUES ('$firstname','$lastname','$email','$departureairport','$arrivalairport',' $outboundflight_date','$returnflight_date')";*/
  
   /*Windows pop-screen function starts here*/
  $joycon->exec($sqlstring);
  echo  'Records saved successfully';

  if ($joycon) {
    echo "<script>alert('Data inserted successfully!');
     window.location.href = 'index.php';
    </script>";
  }else {
    echo "Error: " . $joycon->error;
  }
    /*Windows pop-screen function ends here*/

        
      /*Windows pop-screen function starts here*/
   /*if ($joycon->query($sqlstring) === TRUE) {
    echo "<script>
            alert('Appointment booked successfully!');
            window.location.href = 'contact.php';
          </script>";
  } else {
    echo "Error: " . $joycon->error;
  }

  $conn->close();*/
  /*Windows pop-screen function ends here*/
}
}//first if closes`

// Check if form is submitted
/*$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "airline");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Capture form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $departureairport = $_POST['departureairport'];
    $arrivalairport = $_POST['arrivalairport'];

    // Insert into database
    $sql = "INSERT INTO air_flight (firstname, lastname, email, departureairport, arrivalairport)
            VALUES ('$firstname', '$lastname', '$email', '$departureairport', '$arrivalairport')";

    if ($conn->query($sql) === TRUE) {
        $message = "Booking successful!";
    } else {
        $message = "Error: " . $conn->error;
    }

    $conn->close();
}*/
?>