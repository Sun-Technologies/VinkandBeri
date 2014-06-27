<?php
if (isset($_POST['submit'])) {
	$msg = 'Name: ' .$_POST['name'] . "\n"
		.'EMail: ' .$_POST['email'] . "\n"
		.'Telephone: ' .$_POST['phone'] . "\n"
		.'Subject: ' .$_POST['subject'] . "\n"
		.'Comment: ' .$_POST['comment'] . "\n";
		mail('info@vinkandberi.com', 'Contact Us Form', $msg);
		header('location: contact-thanks.php');
} else {
	header('location: contact.php');
	exit(0);
}
?>