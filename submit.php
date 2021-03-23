<?php
  $data_file = fopen("example.txt", "a");

  $First_Name =  $_POST["First_Name"];
  $Last_Name = $_POST["Last_Name"];
  $Your_Email = $_POST["Your_Email"];


  $conn = new mysqli('sql209.epizy.com', 'epiz_28211562', 'greenofficeKHteam@MSGNZJ', 'epiz_28211562_test')
  if($conn->connect_error) {
    die('connection failed : '.conn->connect_error);
  }else{
    $stmt = $conn->preparee("insert into registration(First_Name, Last_Name, Your_Email)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $First_Name, $Last_Name, $Your_Email);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
  }

 ?>
