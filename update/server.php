<?php
    include ("../env.php");

    $conn = new Mysqli($servername,$user,$pass,$dbname);

    if($conn->connect_error) {
      echo("non sono riuscito a connnettermi!" .$conn->connect_error);
    }
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cognome = $_POST["lastname"];
    $dataNascita = $_POST["dataNascita"];
    $tipoDocumento = $_POST["tipoDocumento"];
    $numeroDocumento = $_POST["numDocumento"];

    //controllo se arrivano i valori
      /*var_dump($id);
      var_dump($nome);
      var_dump($cognome);
      var_dump($dataNascita);
      var_dump($tipoDocumento);
      var_dump($numeroDocumento);
      die();*/

      $sql = "UPDATE ospiti
              SET name = ?,lastname=?,date_of_birth = ?, document_type = ?, document_number = ?
              WHERE id=?";
      $modificaOspite = $conn->prepare($sql);
      $modificaOspite->bind_param('sssssi',$nome,$cognome,$dataNascita,$tipoDocumento,$numeroDocumento,$id);

      if($modificaOspite->execute()) {
        echo "Modifiche registrate";
      }
      else {
        echo "Ops, modifiche non registrate";

      }

        $conn->close();

 ?>
