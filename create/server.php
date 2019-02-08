<?php

  include ("../env.php");

  $conn = new Mysqli($servername,$user,$pass,$dbname);

  if($conn->connect_error) {
    echo("non sono riuscito a connnettermi!" .$conn->connect_error);
  }

  $nome = $_POST["nome"];
  $cognome = $_POST["lastname"];
  $dataNascita = $_POST["dataNascita"];
  $tipoDocumento = $_POST["tipoDocumento"];
  $numeroDocumento = $_POST["numDocumento"];

  //controllo se arrivano i valori
    /*var_dump($nome);
    var_dump($cognome);
    var_dump($dataNascita);
    var_dump($tipoDocumento);
    var_dump($numeroDocumento);*/

    $sql = "INSERT INTO ospiti(name, lastname, date_of_birth,document_type,document_number) VALUES (?, ?,?,?,?)";
    $creaOspite = $conn->prepare($sql);
    $creaOspite->bind_param('sssss',$nome,$cognome,$dataNascita,$tipoDocumento,$numeroDocumento);




  if($creaOspite->execute()) {
    echo "Top, il cliente è registrato";
  }
  else {
    echo "Ops, il cliente non è stato registrato";
  }
  $conn->close();

 ?>
