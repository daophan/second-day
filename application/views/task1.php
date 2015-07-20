<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php 
if (isset($email_valid)) {
	switch ($email_valid) {
		case true:
			echo "Email valid";
			break;
		case false:
			echo "Email not valid";
			break;
	}
}
echo form_open();
echo form_input('email');
echo form_submit('submit1', 'Send');
echo form_close();
?>
</body>
</html>