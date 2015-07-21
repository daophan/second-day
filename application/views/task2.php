<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php 
echo form_open();
echo form_label('Give a file name: ', 'filename');
echo form_input('filename');
echo form_submit('submit2', 'Send');
echo form_close();

if (isset($message)) {
	echo $message;
}
?>
</body>
</html>