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
        <nav class="program-menu">
          <a href="#talleres" class="activo"><i class="fas fa-code"></i> Talleres</a>
          <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
        </nav>
        <div id="talleres" class="info-curso ocultar">
          <div class="event-detail">
            <h3>HTML5, CSS3, JS</h3>
            <p><i class="fas fa-clock"></i> 16:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Juan Pablo de La Torre</p>
          </div>
          <div class="event-detail">
            <h3>Responsive Design</h3>
            <p><i class="fas fa-clock"></i> 20:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Juan Pablo de La Torre</p>
          </div>
          <div class="button-container">
            <a href="#" class="button float-rigth">Ver todos</a>
          </div>
        </div>

        <div id="conferencias" class="info-curso ocultar">
          <div class="event-detail">
            <h3>Como ser Freelancer</h3>
            <p><i class="fas fa-clock"></i> 10:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Gregorio Sanchez</p>
          </div>
          <div class="event-detail">
            <h3>Tecnologias del futuro</h3>
            <p><i class="fas fa-clock"></i> 17:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Susan Sanchez</p>
          </div>
          <div class="button-container">
            <a href="#" class="button float-rigth">Ver todos</a>
          </div>
        </div>

        <div id="seminarios" class="info-curso ocultar">
          <div class="event-detail">
            <h3>Diseño UI/UX para moviles</h3>
            <p><i class="fas fa-clock"></i> 17:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i> 11 de Dic</p>
            <p><i class="fas fa-user"></i> Harold Garcia</p>
          </div>
          <div class="event-detail">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fas fa-clock"></i> 10:00 hrs</p>
            <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Susana Rivera</p>
          </div>
          <div class="button-container">
            <a href="#" class="button">Ver todos</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="guests container ">
    <h2>NUESTROS INVITADOS</h2>
    <ul class="guest-list">
      <li>
        <div class="guest">
          <img src="img/invitado1.jpg" alt="invitado 1">
          <p>Rafael Baustista</p>
        </div>
      </li>
      <li>
        <div class="guest">
          <img src="img/invitado2.jpg" alt="invitado 2">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="guest">
          <img src="img/invitado3.jpg" alt="invitado 3">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="guest">
          <img src="img/invitado4.jpg" alt="invitado 4">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="guest">
          <img src="img/invitado5.jpg" alt="invitado 5">
          <p>Harold Garcia</p>
        </div>
      </li>
      <li>
        <div class="guest">
          <img src="img/invitado6.jpg" alt="invitado 6">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

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
