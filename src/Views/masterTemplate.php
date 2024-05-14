<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
  <header>
    <a class="home-link" href="/">
      <h1>DogCat Banho e Tosa </h1>
    </a>
  </header>
  <div class="content">
    <?php require $view . ".php"; ?>
  </div>
  <?php if (isset($jsFilename)) echo '<script src="/assets/js/' . $jsFilename . '.js"></script>'; ?>
</body>

</html>