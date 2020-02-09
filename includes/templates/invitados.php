<?php

  require_once "includes/functions/bd_conexion.php";

  $conexion = conexion("gdlwebcamp", "root", "");

  if (empty($conexion)) {
    header("Location: error.php");
  }

  $sql = "SELECT * FROM invitados";
  $resultado = $conexion->query($sql);
  $invitados = $resultado->fetchAll(PDO::FETCH_ASSOC);

  ?>

  <section class="guests container ">
    <h2>NUESTROS INVITADOS</h2>
    <ul class="guest-list">
      <?php foreach ($invitados as $key => $invitado): ?>
      <li>
        <div class="guest">
          <a class="invitado_info" href="#invitado<?= $invitado['invitado_id']; ?>">
            <img src="img/<?= $invitado['url_imagen'] ?>" alt="<?= $invitado['invitado_id']; ?>">
            <p><?= $invitado['nombre_invitado']; ?></p>
          </a>
        </div>
      </li>
      <div style="display: none">
        <div class="invitado_info" id="invitado<?= $invitado['invitado_id']; ?>">
          <h2><?= $invitado['nombre_invitado']." ".$invitado['apellido_invitado']; ?></h2>
          <img src="img/<?= $invitado['url_imagen'] ?>" alt="<?= $invitado['invitado_id']; ?>">
          <p><?= $invitado['descripcion']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </ul>
  </section>
