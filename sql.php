<?php

$name = $_POST['name'];

$phone = $_POST['number'];

$email= $_POST['email'];

$address = $_POST['Address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$select = $_POST['select'];

$connect = mysqli_connect('localhost', 'root', '', 'shop');
if (!$connect) {
    echo mysqli_error($connect);
} else {
    $use = "USE shop";
    $result1 = mysqli_query($connect, $use);
    if (!$result1) {
        echo mysqli_error($connect);
    } else {
        $table = "CREATE TABLE IF NOT EXISTS userdata (
           Name VARCHAR(20) NOT NULL,
           Number VARCHAR(20) NOT NULL,
            Email VARCHAR(30) NOT NULL ,
            Address VARCHAR(30),
            State VARCHAR(20),
            city VARCHAR(20),
            Pincode VARCHAR(10),
	    vegetables VARCHAR(20)
        )";
        if (!mysqli_query($connect, $table)) {
            echo mysqli_error($connect);
        } else {
            $insert = "INSERT INTO userdata (Name, Number, Email, Address, State,city, Pincode,vegetables) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = mysqli_prepare($connect, $insert);
            mysqli_stmt_bind_param($stmt, "ssssssss", $name, $phone, $email, $address,  $state, $city, $pincode, $select);

            if (mysqli_stmt_execute($stmt)) {
                echo "<script> alert('ORDER SUCCESSFULLY PLACED') </script>";
            } else {
                echo mysqli_error($connect);
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($connect);
}
?>

