<?php
    include 'includes/session.php';

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $mobile_no = $_POST['mobile_no'];
        $address = $_POST['address'];
        $nic_no = $_POST['nic_no'];
        $constituency_name = $_POST['constituency_name'];
        $province_name = $_POST['province_name'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM voters WHERE id = $id";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        if($password == $row['password']){
            $password = $row['password'];
        }
        else{
            $password = password_hash($password, PASSWORD_DEFAULT);
        }

        $sql = "UPDATE voters SET name = '$name', mobile_no = '$mobile_no',address = '$address',nic_no = '$nic_no',constituency_name = '$constituency_name', province_name = '$province_name', password = '$password' WHERE id = '$id'";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Voter updated successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

    header('location: voters.php');

?>
