<?php require_once "includes/templates/header.php" ?>

  <section class="container-section">
    <h2>
      La mejor conferencia de diseño web en español
    </h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, ratione? Expedita aut sequi vitae ex itaque
      enim? Ratione non ipsa, vero dolor in commodi? Tempora molestias a iure magnam nisi. Lorem ipsum dolor sit amet,
      consectetur adipisicing elit. Dolorum hic magnam quibusdam assumenda omnis, a illum recusandae nulla perferendis
      reiciendis? Optio amet eveniet temporibus eaque esse rem tenetur deserunt quia.
    </p>
  </section>

  <section class="program">
    <div class="video-container">
      <video loop autoplay muted>
        <source src="video/video.mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div>

    <div class="program-content">
      <div class="program-event">
        <h2>
          Programa del Evento
        </h2>
        <?php
          require_once "includes/functions/bd_conexion.php";

          $conexion = conexion("gdlwebcamp", "root", "");

          if (empty($conexion)) {
            header("Location: error.php");
          }

          $sql = "SELECT * FROM categoria_evento";
          $resultado = $conexion->query($sql);
          $sql_2 = "(SELECT E.evento_id, E.nombre_evento, E.fecha_evento, E.hora_evento, C.cat_evento, I.nombre_invitado, I.apellido_invitado
          FROM eventos E INNER JOIN categoria_evento C ON E.id_cat_evento = C.id_categoria
          INNER JOIN invitados I ON E.id_inv = I.invitado_id AND E.id_cat_evento = 1
          LIMIT 2) UNION ALL (SELECT E.evento_id, E.nombre_evento, E.fecha_evento, E.hora_evento, C.cat_evento, I.nombre_invitado, I.apellido_invitado
          FROM eventos E INNER JOIN categoria_evento C ON E.id_cat_evento = C.id_categoria
          INNER JOIN invitados I ON E.id_inv = I.invitado_id AND E.id_cat_evento = 2 LIMIT 2)
          UNION ALL (SELECT E.evento_id, E.nombre_evento, E.fecha_evento, E.hora_evento, C.cat_evento, I.nombre_invitado, I.apellido_invitado
          FROM eventos E INNER JOIN categoria_evento C ON E.id_cat_evento = C.id_categoria
          INNER JOIN invitados I ON E.id_inv = I.invitado_id AND E.id_cat_evento = 3 LIMIT 2)";
          $resultado_2 = $conexion->query($sql_2);

          $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);
          $categorias = array_reverse($categorias);

          $todos = $resultado_2->fetchAll(PDO::FETCH_ASSOC);
          $todos = array_reverse($todos);

        ?>

        <nav class="program-menu">
          <?php foreach ($categorias as $key => $categoria): ?>
          <a href="#<?=strtolower($categoria['cat_evento'])."s"?>""><i class="fas <?=$categoria['icono']?>"></i> <?=$categoria['cat_evento']."s"?></a>
          <?php endforeach; ?>
        </nav>
        <?php
        $muestras = [];
        foreach ($todos as $key => $todo) {
          $arr = [
            'titulo' => $todo['nombre_evento'],
            'fecha' => $todo['fecha_evento'],
            'hora' => $todo['hora_evento'],
            'categoria' => $todo['cat_evento'],
            'invitado' => $todo['nombre_invitado']." ".$todo['apellido_invitado']
          ];
          $muestras[$todo['cat_evento']][] = $arr;
        }
        ?>

        <?php foreach ($muestras as $key => $muestra): ?>
        <div id="<?=strtolower($key)."s"?>" class="info-curso ocultar">
          <?php foreach ($muestra as $value): ?>
          <div class="event-detail">
            <h3><?= strtoupper($value['titulo']) ?></h3>
            <p><i class="fas fa-clock"></i> <?= $value['hora'] ?></p>
            <p><i class="fas fa-calendar-alt"></i> <?= $value['fecha'] ?></p>
            <p><i class="fas fa-user"></i> <?= $value['invitado'] ?></p>
          </div>
          <?php endforeach; ?>
          <div class="button-container">
            <a href="calendario.php" class="button float-rigth">Ver todos</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php require_once "includes/templates/invitados.php" ?>x

  <div class="counter paralax">
    <div class="container-summary">
      <ul class="summary-event">
        <li>
          <p class="number"></p>Invitados
        </li>
        <li>
          <p class="number"></p>Talleres
        </li>
        <li>
          <p class="number"></p>Dias
        </li>
        <li>
          <p class="number"></p>Conferencias
        </li>
      </ul>
    </div>
  </div>

  <section class="prices seccion">
    <h2>PRECIOS</h2>
    <div class="containers">
      <ul class="price-list">
        <li>
          <div class="price-table">
            <h3>Paase por dia</h3>
            <p class="number">$30</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las Conferencias</li>
              <li><i class="fas fa-check"></i>Todos los Talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="price-table">
            <h3>Todos los dias</h3>
            <p class="number">$50</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las Conferencias</li>
              <li><i class="fas fa-check"></i>Todos los Talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="price-table">
            <h3>Paase por 2 dias</h3>
            <p class="number">$45</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las Conferencias</li>
              <li><i class="fas fa-check"></i>Todos los Talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="map" class="map"></div>

  <section class="testimonials">
    <h2>Testimoniales</h2>
    <div class="testimonial-container clearfix">
      <div class="testimonial">
        <blockquote>
          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
            atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
          </p>
          <footer class="info-testimonial">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Ernesto Angulo <span>Weber en @Google</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
            atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
          </p>
          <footer class="info-testimonial">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Ernesto Angulo <span>Weber en @Google</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
            atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
          </p>
          <footer class="info-testimonial">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Ernesto Angulo <span>Weber en @Google</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="news-letter paralax">
    <div class="content">
      <p>Registrarte al Newsletter</p>
      <h3>GDLWEBCAMP</h3>
      <a href="#" class="button transparent">Registro</a>
    </div>
  </div>

  <section class="countdown">
    <h2>FALTAN</h2>
    <div class="countdown-container">
      <ul>
        <li>
          <p id="days" class="number"></p>Dias
        </li>
        <li>
          <p id="hours" class="number"></p>Horas
        </li>
        <li>
          <p id="minutes" class="number"></p>Minutos
        </li>
        <li>
          <p id="seconds" class="number"></p>Segundos
        </li>
      </ul>
    </div>
  </section>

  <?php require_once "includes/templates/footer.php" ?>
