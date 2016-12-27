<?php
include_once('../cms/dbFunction.php');
$funObj =new dbFunction();
// If the values are posted, insert them into the database.
if (isset($_POST['submit'])) {
$userDetail['username'] = $_POST['username'];
$userDetail['email'] = $_POST['email'];
$userDetail['password'] = $_POST['password'];

$userDetail['address'] = $_POST['address'];
$userDetail['phone'] = $_POST['phone'];
$userDetail['gender'] = $_POST['gender'];

$user = $funObj->insertUser($userDetail);

if ($user == true) {
$smsg = "Successfully.";
} else {
$smsg = "Failed";
}
echo $smsg;
}
?>

