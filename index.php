<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
  <title>Pagina Principal</title>
  <?php require_once 'app/config.php'; ?>
  <?php require_once 'app/dependencias.php'; ?>


</head>

<body class="imagen">

<!-- <div class="loader-page">
</div> -->
  <?php

  if (isset($_GET['vista_solicitada'])) {
    switch ($_GET['vista_solicitada']) {
      case 'uno':
        require_once 'view/Parrafo_1.php';
        break;
      case 'dos':
        require_once 'view/Parrafo_2.php';
        break;
      case 'tres':
        require_once 'view/Parrafo_3.php';
        break;
      case 'cuatro':
        require_once 'view/Parrafo_4.php';
        break;
      default:
        require_once 'view/default.php';
        break;
    }
  } else {
    require_once 'view/default.php';
  }


  ?>


</body>

</html>