<?php 

var_dump($_POST);
$sent_paragraph = $_POST['paragraph'];
$length_sent_paragraph = strlen($sent_paragraph)

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Bad Words</title>
</head>
<body>

<h5>Paragraph:</h5>
<p>
<?= $sent_paragraph  ?>
</p>

<h5>Paragraph length:</h5>
<p>
<?= $length_sent_paragraph  ?>
</p>

</body>
</html>