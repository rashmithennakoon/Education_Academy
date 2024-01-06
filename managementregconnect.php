<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'wisdomewise_academy') or die("Connection Failed:" . mysqli_connect_error());
        if (isset($_POST['name']) && isset($_POST['id']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['degree']) && isset($_POST['pict'])) {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $degree = $_POST['degree'];
            $pict = $_POST['pict'];
            
            $sql = "INSERT INTO `management` (`Full_Name`, `ID`, `DOB`, `Email`, `Address`, `Telephone_Number`,`Degree`, `Payment_Slip_Link`) VALUES ('$name','$id','$dob','$email', '$address', '$phone','$degree', '$pict')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("Location: success.php");
            } else {
                echo 'Error Occurred: ' . mysqli_error($conn);
            }
        }
    }
?>