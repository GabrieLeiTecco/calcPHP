<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Fonte -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Css proprio -->
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <div class="container my-4">
<div class="calculator card">
    <form method="GET" action="calc.php">
    <input type="text" class="calculator-screen z-depth-1" value="<?php echo ( empty($_GET['total']) ? $_GET['total'] : ''); ?>" disabled />

    <div class="calculator-keys">

      <button type="button" class="operator btn btn-info" value="+">+</button>
      <button type="button" class="operator btn btn-info" value="-">-</button>
      <button type="button" class="operator btn btn-info" value="*">&times;</button>
      <button type="button" class="operator btn btn-info" value="/">&divide;</button>

      <button type="button" value="7" class="btn btn-light waves-effect">7</button>
      <button type="button" value="8" class="btn btn-light waves-effect">8</button>
      <button type="button" value="9" class="btn btn-light waves-effect">9</button>


      <button type="button" value="4" class="btn btn-light waves-effect">4</button>
      <button type="button" value="5" class="btn btn-light waves-effect">5</button>
      <button type="button" value="6" class="btn btn-light waves-effect">6</button>


      <button type="button" value="1" class="btn btn-light waves-effect">1</button>
      <button type="button" value="2" class="btn btn-light waves-effect">2</button>
      <button type="button" value="3" class="btn btn-light waves-effect">3</button>


      <button type="button" value="0" class="btn btn-light waves-effect">0</button>
      <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
      <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

      <button type="submit" class="equal-sign operator btn btn-default" value="=">=</button>
</form>
    </div>
  </div>
</div>
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts -->
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>