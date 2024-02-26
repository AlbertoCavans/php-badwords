<?php 
/* var_dump($_POST); */

/* RECEIVE PARAGRAPH */
$sent_paragraph = $_POST['paragraph'];
/* READ PARAGRAPH LENGTH */
$length_sent_paragraph = strlen($sent_paragraph);
/* RECEIVE WORD TO CENSOR */
$censored_word = $_POST["censored_word"];
/* CENSOR WORD */
$censored_text = str_ireplace($censored_word, "*****", $sent_paragraph);
/* READ CENSORED-PARAGRAPH LENGTH */
$length_censored_text = strlen($censored_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Bad Words</title>

        <!-- Link Bootstrap CSS -->
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <h1 class="text-success mt-3 text-center">Print results</h1>


    <div class="row p-5 flex-column">
        <div class="card col-5 p-4 my-4">
<h5 class="text-primary">Paragraph:</h5>
<!-- PRINT PARAGRAPH -->
<p>
<?= $sent_paragraph  ?>
</p>
<!-- PRINT PARAGRAPH LENGTH -->
<h5 class="text-primary">Paragraph length:</h5>
<p>
<?= $length_sent_paragraph  ?>
</p>
</div>


<div class="card col-5 p-4">
<!-- PRINT CENSORED-PARAGRAPH -->
<h5 class="text-primary">Censored text:</h5>
<p>
<?= $censored_text  ?>
</p>
<!-- PRINT CENSORED-PARAGRAPH-LENGTH -->
<h5 class="text-primary">Paragraph length:</h5>
<p>
<?= $length_censored_text  ?>
</p>
</div>

</div>


</body>
</html>