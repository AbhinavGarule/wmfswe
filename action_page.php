<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
    </head>
<body>
   
<?php
    header("Location: https://" . $_GET['lang'] .".wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=" . $_GET['article_name']);
?>

</body>

</html>