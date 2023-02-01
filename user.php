<?php
$conn = mysqli_connect("localhost", "root", "", "firstproject");

if($_POST){
    $data=$_POST['frm'];
    #var_dump($data);
    $sql = "INSERT INTO user_tbl (email,name,text) VALUES ('$data[email]','$data[name]','$data[text]')";
    mysqli_query($conn, $sql);
    header("location:index.html");
}
?>

