<?php
include('../cms/dbFunction.php.php');
$funObj = new dbFunction();
// If the values are posted, insert them into the database.
if (isset($_POST['submit'])) {
    $userDetail['username'] = $_POST['username'];
    $userDetail['email'] = $_POST['email'];
    $userDetail['password'] = $_POST['password'];
    $user = $funObj->insertUser($userDetail);

    if ($user == true) {
        $smsg = "User Created Successfully.";
    } else {
        $smsg = "User Registration Failed";
    }
    echo $smsg;
}
?>
