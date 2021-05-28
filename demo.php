<?php
    $con = mysqli_connect('localhost','root','','pizzadb');
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $id = $_POST['id'];

    $cek_data = mysqli_query($con,"SELECT id FROM userdata");

    $cek = mysqli_num_rows($cek_data);

    if($cek > 0){
        echo "Logged In Successfully";
    }else{
        echo "Logged In Failed";
    }
?>