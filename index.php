<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost:8888/php-boolcrud/src/public/css/app.css">
    <title>BoolCrud by Dario Mantovani</title>
  </head>
  <body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL | E_STRICT);

    include("db.php");
    ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Lista ospiti</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="http://localhost:8888/php-boolcrud/create/creaOspite.php"><button class=" btn btn-info mb-2 ">Registra nuovo ospite</button></a>
        </div>
      </div>
      <table class="table table-dark">
        <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">cognome</th>
                <th scope="col">Cancella</th>
                <th scope="col">Modifica</th>
                <th scope="col">Scheda cliente</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ospiti as  $ospite): ?>
                <tr>
                  <td><?php echo $ospite["id"]; ?></td>
                  <td><?php echo $ospite["name"]; ?></td>
                  <td><?php echo $ospite["lastname"]; ?></td>
                  <td><a href="delete/cancellaOspite.php?id=<?php echo $ospite["id"];  ?>"><button class=" btn btn-danger">Cancella</button></a></td>
                  <td><a href="update/modificaOspite.php?id=<?php echo $ospite["id"]; ?>"><button class=" btn btn-warning text-light">Modifica</button></a></td>
                  <td><a href="show/schedaOspite.php?id=<?php echo $ospite["id"]; ?>"><button class=" btn btn-success ">Visualizza</button></a></td>

                </tr>
              <?php endforeach; ?>
            </tbody>
      </table>
    </div>

    <script src="src/public/js/main.js"></script>

  </body>
</html>
