<?php require_once "includes/templates/header.php" ?>

<section class="photos">
  <h2>CALENDARIO DE EVENTOS</h2>
  <?php

  require_once "includes/functions/bd_conexion.php";

  $conexion = conexion("gdlwebcamp", "root", "");

  if (empty($conexion)) {
    header("Location: error.php");
  }

  $sql = "SELECT E.evento_id, E.nombre_evento, E.fecha_evento, E.hora_evento, C.cat_evento, C.icono, I.nombre_invitado, I.apellido_invitado FROM eventos E INNER JOIN categoria_evento C ON E.id_cat_evento = C.id_categoria INNER JOIN invitados I ON E.id_inv = I.invitado_id ORDER BY E.evento_id";
  $resultado = $conexion->query($sql);

  ?>

  <div class="calendar">
    <?php $eventos = $resultado->fetchAll(PDO::FETCH_ASSOC) ?>
    <?php
    $calendario = [];
    foreach ($eventos as $key => $evento) {
      $arr = [
        'titulo' => $evento['nombre_evento'],
        'fecha' => $evento['fecha_evento'],
        'hora' => $evento['hora_evento'],
        'categoria' => $evento['cat_evento'],
        'icono' => $evento['icono'],
        'invitado' => $evento['nombre_invitado']." ".$evento['apellido_invitado']
      ];
      $calendario[$evento['fecha_evento']][] = $arr;
    }
    ?>
    <?php foreach ($calendario as $dia => $lista): ?>
      <div class="day-date">
        <h3>
          <i class="fa fa-calendar"></i>
          <?php
          setlocale(LC_TIME, 'spanish');
          print strftime("%A, %d de %B del %Y", strtotime($dia));
          ?>
        </h3>
        <div class="days">
          <?php foreach ($lista as $value): ?>
            <div class="day">
              <p class="title"><?= $value['titulo'] ?></p>
              <p class="hour"><i class="fa fa-clock" aria-hidden="true"></i> <?= $value['hora'] ?></p>
              <p><i class="fa <?php print $value['icono'] ?>"></i> <?= $value['categoria'] ?></p>
              <p><i class="fa fa-user"></i> <?= $value['invitado'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

    <?php endforeach; ?>

  </div>

</section>

<?php require_once "includes/templates/footer.php" ?>
