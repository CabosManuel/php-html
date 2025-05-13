<?php
  $name = "Manuel";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print text and tags with PHP</title>
</head>
<body>
  <?php echo "<b> Hello PHP! </b>"; ?>

  <?= "<i> Another way to print text and tags with PHP </i>" ?>

  <p>Hello <?= $name ?></p>
</body>
</html>
