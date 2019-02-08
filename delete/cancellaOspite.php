<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL | E_STRICT);

    include ("../env.php");

    $conn = new Mysqli($servername,$user,$pass,$dbname);

    if($conn->connect_error) {
      echo("non sono riuscito a connnettermi!" .$conn->connect_error);
    }

    $getId = intval($_GET["id"]);
    //echo $getId;
    var_dump($getId);

    $sql = "DELETE FROM ospiti
            WHERE id= ?";
    $cancellaCliente = $conn->prepare($sql);
    $cancellaCliente->bind_param('s',$getId);



    if($cancellaCliente->execute()) {
      echo "Ok, hai eliminato la scheda cliente!";
    }
    else {
      echo "Ops, non è stata eliminata la scheda cliente!";
    }

    $conn->close();

 ?>
