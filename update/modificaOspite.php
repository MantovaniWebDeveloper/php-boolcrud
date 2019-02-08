<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_STRICT);

include ("../show/server.php");
 ?>

<form action="http://localhost:8888/php-boolcrud/update/server.php" method="post">
  <div class="form-group">
    <input class="form-control"type="hidden" name="id" value="<?php echo $ospite["id"]; ?>">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="nome" value="<?php echo $ospite["name"]; ?>">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="lastname" value="<?php echo $ospite["lastname"]; ?>">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="dataNascita" value="<?php echo $ospite["date_of_birth"]; ?>">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="tipoDocumento" value="<?php echo $ospite["document_type"]; ?>">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="numDocumento" value="<?php echo $ospite["document_number"]; ?>">
  </div>
  <button type="submit" name="button">invia</button>
</form>
