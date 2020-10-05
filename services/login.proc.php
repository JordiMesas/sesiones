<?php
include 'connection.php';
if(isset($_POST['email'])){
    //echo md5($_POST['psswd']);
    $email = $_POST['email'];
    $psswd = md5($_POST['psswd']);
$query = "SELECT * FROM tbl_user WHERE email='{$email}' AND password='{$psswd}'";
echo $query;
$result = mysqli_query($conn, $query);
if($row = mysqli_fetch_array($result)){

}else{
    
}
}else{
    header('Location: ../index.php');
}

?>