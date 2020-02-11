<?php if(isset($_POST['submit'])): ?>
  <?php

  require_once "includes/functions/bd_conexion.php";

  $conexion = conexion("gdlwebcamp", "root", "");

  if (empty($conexion)) {
    header("Location: error.php");
  }


  $nombre = $_POST['name'];
  $apellido = $_POST['lastname'];
  $email = $_POST['email'];
  $regalo = $_POST['regalo'];
  $total = $_POST['total_pedido'];
  $fecha = date('Y-m-d H:i:s');

  //Pedidos
  $boletos = $_POST['boletos'];
  $camisas = $_POST['pedido_camisas'];
  $etiquetas = $_POST['pedido_etiquetas'];
  require_once "includes/functions/funciones.php";
  $pedido = productos_json($boletos, $camisas, $etiquetas);

  //Eventos
  $eventos = $_POST['registro'];
  $registro = eventos_json($eventos);

  $statement = $conexion->prepare("INSERT INTO registrados(nombre_registrado, apellido_registrado, email, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (:nombre, :apellido, :email, :fecha, :pases, :talleres, :regalo, :total);");
  $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
  $statement->bindParam(':apellido', $apellido, PDO::PARAM_STR);
  $statement->bindParam(':email', $email, PDO::PARAM_STR);
  $statement->bindParam(':fecha', $fecha, PDO::PARAM_STR);
  $statement->bindParam(':pases', $pedido, PDO::PARAM_STR);
  $statement->bindParam(':talleres', $registro, PDO::PARAM_STR);
  $statement->bindParam(':regalo', $regalo, PDO::PARAM_INT);
  $statement->bindParam(':total', $total, PDO::PARAM_STR);
  $statement->execute();
  header('Location: validar_registro.php?exitoso=1')
  ?>

  <?php endif; ?>

<?php require_once "includes/templates/header.php" ?>

<section class="registration">
  <h2>Resumen de Registro</h2>
  <?php
  if(isset($_GET['exitoso'])) {
    if($_GET['exitoso'] === "1") {
      echo "Registro Exitoso";
    }
  }
  ?>
</section>


<?php require_once "includes/templates/footer.php" ?>
