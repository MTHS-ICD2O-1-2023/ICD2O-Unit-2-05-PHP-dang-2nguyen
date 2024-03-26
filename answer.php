<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Salary Program, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Dang" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Salary Program,in PHP</title>
</head>
<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary Program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/income_tax.jpg" alt="street image" width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $time = $_POST["the-time"];
          $money = $_POST["salary"];

          // process
          $pay = ($time * $money) * (1.00 - 0.18);
          $government = ($time * $money) * 0.18;

          // output
          echo "If you work in " . $time . " and you get " . $money . " in every hour.";
          echo "<br />";
          echo "<br />";
          echo "Your pay will be " . '$ ' . sprintf('%0.2f', $pay);
          echo " The government will take " . '$ ' . sprintf('%0.2f', $government);
          ?>
        </div>
      </div>
    </main>
  </div>
</body>
</html>