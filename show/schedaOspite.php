<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL | E_STRICT);
  include("server.php");
 ?>

<h2><?php echo $ospite["id"]; ?></h2>

<h2><?php echo $ospite["name"]; ?></h2>

<h2><?php echo $ospite["lastname"]; ?></h2>

<h2><?php echo $ospite["date_of_birth"]; ?></h2>

<h2><?php echo $ospite["document_type"]; ?></h2>

<h2><?php echo $ospite["document_number"]; ?></h2>

<h2><?php echo $ospite["created_at"]; ?></h2>

<h2><?php echo $ospite["updated_at"]; ?></h2>
