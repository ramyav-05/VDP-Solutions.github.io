<?php
include_once 'contact.dbh.php';
if(isset($_POST['contactSubmit']))
{    
     $name = $_POST['name'];
     $number = $_POST['number'];
     $email = $_POST['email'];
     $project = $_POST['project'];

     $sql = "INSERT INTO submit (name,number,email,project)
     VALUES ('$name','$number','$email','$project')";
     if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>