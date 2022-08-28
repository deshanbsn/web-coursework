<?php 
if(isset($_POST['title']) && isset($_POST['price']) && isset($_POST['description'])) {

    include "config/connectDB.php";

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = validate($_POST['title']);
    $email = validate($_POST['price']);
    $message = validate($_POST['description']);


    if(empty($title) || empty($price) || empty($description)) {
      header("Location: index.php");
        } else {
            $sql = "insert into contact-form(title, price, description) values('$title','$price','$description')";
            $res = mysqli_query($conn, $sql);

            if($res) {
              echo "";
            } else {
               echo "Your message could not be sent!";
            }
          }
} else {
  header("Location: index.php");
}

?> 
