<?php
    $fname = filter_input(INPUT_POST,'fname');
    $lname = filter_input(INPUT_POST,'lname');

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "form";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errorno() .')' . mysqli_connect_error());
   }
   else {
       $sql = "INSERT INTO form (fname, lname) values ('$fname',' $lname')";

        if ($conn->query($sql)){
            echo "Done";
        }
        else echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
?>