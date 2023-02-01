<?php
$conn = mysqli_connect("localhost", "root", "", "firstproject");

if($_POST){
    $data=$_POST['frm'];
    #var_dump($data);
    // $sex=$_POST['gendre'];
    foreach ($_POST['gendre'] as $sex) {
        $sql = "INSERT INTO request_tbl (name,lname,fname,gendre,mphone,phone,address,email,password,idea) VALUES ('$data[firstname]','$data[lastname]','$data[fname]','$sex','$data[mphone]','$data[phone]','$data[address]','$data[email]','$data[password]','$data[idea]')";
        mysqli_query($conn, $sql);
    }
    header("location:index.html");
}
?>

