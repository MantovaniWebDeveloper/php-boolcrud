<?php
  include ("env.php");

  $conn = new Mysqli($servername,$user,$pass,$dbname);

  if($conn->connect_error) {
    echo("non sono riuscito a connnettermi!" .$conn->connect_error);
  }

  //ora prendiamo tutti gli ospiti

  $sql = "SELECT  id, name, lastname FROM ospiti";

  //lancio la query
  $resultOspiti = $conn->query($sql);
  //creo l'array da mettere gli ospiti
  $ospiti = [];

  if ($resultOspiti->num_rows >0) {

    while ($row = $resultOspiti->fetch_array()) {
      //var_dump($row); die();
      $ospiti[] = $row;
    }
  }


  $conn->close();

 ?>
