<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
	.highlight{color: red;}
</style>
</head>
<body>
<?php 
echo form_open();
echo form_label('Paste your paragraph: ', 'paragraph');
echo '<br>';
echo form_textarea('paragraph');
echo '<br>';
echo form_label('Give a keyword: ', 'keyword');
echo form_input('keyword');
echo form_submit('submit3', 'Send');
echo form_close();
echo '<br>';

if (isset($new_paragraph)) {
	echo $new_paragraph;
}
?>
</body>
</html>