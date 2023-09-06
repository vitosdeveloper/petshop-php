<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>

<body>
  <div class="content">
    <?php require VIEWS_PATH . $view . ".php" ?>
  </div>
</body>

</html>