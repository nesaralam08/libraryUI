<?php
    // $conn = mysqli_connect("localhost","root","Mdnesar@786","user");
    // $sql = "SELECT * FROM users as us";
    // $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_assoc($result);
    // if($row)
    // {
    //     echo "Hello";
    // }
    // header("location:index.php")
    $arr = array(1,2,2,3,4,5,7);
    $pass = md5("Hello");
    $d = date("d-m-y H:M:S A");
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

?>