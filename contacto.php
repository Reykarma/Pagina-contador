<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Servicios</title>
    <?php include("plantillas/head.php") ?>
  </head>
  <body>
    <div class="Cuerpo">
      <?php include("plantillas/Menu.php") ?>
      <article>
         <div>
            <div class="texto">
                <div>
                  <img src="imagenes/playa.jpg">
                  <h1><center><p>Somos la mejor opción en puerto vallarta para llevar tu negocio al éxito</p></center></h1>
                </div>
            </div>
        <blockquote>
            <form class="contact_form" action="#" id="contact_form">
              <div>
                  <ul>
                      <li>
                          <h2>Contactanos</h2>
                      </li>
                      <li>
                          <label for="name">Nombre:</label>
                          <input type="text" required />
                      </li>
                      <li>
                          <label for="email">Tu email:</label>
                          <input type="email" name="email" required />
                      </li>
                      <li>
                          <label for="phone">Telefono:</label>
                          <input type="tel" name="telefono" required pattern="(0-9)+" />
                      </li>
                      <li>
                          <label for="message">Mensaje:</label>
                          <textarea name="message" cols="40" rows="6" required></textarea>
                      </li>
                      <li>
                          <button class="submit" type="submit">Enviar</button>
                      </li>
                  </ul>
              </div>
            </form>
        </blockquote>
        <blockquote>
          <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29864.83356827274!2d-105.23221187789716!3d20.665339490726335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8421458e572b2fb9%3A0xd8df74defa35b634!2sCalle+Portal+Constituci%C3%B3n+681%2C+Jardines+del+Puerto%2C+48315+Puerto+Vallarta%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1511995164578"></iframe>
        </div>
        </blockquote>
       </div>
      </article>
    <?php include("plantillas/Pie.php") ?>
  </div>
</body>
</html>
