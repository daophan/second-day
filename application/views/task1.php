<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php 
echo form_open();
echo form_input('email');
echo form_submit('submit1', 'Send');
echo form_close();

?>
</body>
</html>