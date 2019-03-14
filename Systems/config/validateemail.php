<?php
include('config.php');
if (isset($_POST["username"]))
{
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $sql12 = "select email from tbl_login where email='$username'";
    $result = mysqli_query($connect, $sql12);
    echo mysqli_num_rows($result);
}
?>