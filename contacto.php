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
            <div class="Ubicacion">
                <h1>Contacto</h1>
            </div>
            <div class="Texto-Contacto">
              <span> <h4>Telefono:</h4><p>322123322</p> </span>
              <span> <h4>Celular:</h4><p>23212332</p></span>
              <span> <h4>Correo:</h4><p>adashda@gmail</p> </span>
            </div>
            <div class="Formulario-contacto">
              <span><h2>¡¡Contactenos!!</h2></span>
              <form class="contacto" action="Index.php" method="post">
                <p>Nombre:</p>
                <input class="input" type="text" placeholder="Nombre" value="">
                <p>Asunto:</p>
                <input class="input" type="text" placeholder="Asunto" value="">
                <p>Email:</p>
                <input class="input" type="email" placeholder="Correo" value="">
                <p>Telefono:</p>
                <input class="input" type="tel" placeholder="Numero de telefono" value="">
                <p>Mensaje:</p>
                <textarea class="input" rows="8" cols="80" placeholder="Deja tu mensaje"></textarea>
                <div class="boton">
                  <input type="submit" name="" value="Enviar">
                </div>
              </form>
            </div>
          <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29864.83356827274!2d-105.23221187789716!3d20.665339490726335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8421458e572b2fb9%3A0xd8df74defa35b634!2sCalle+Portal+Constituci%C3%B3n+681%2C+Jardines+del+Puerto%2C+48315+Puerto+Vallarta%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1511995164578"></iframe>
       </div>
       
    <?php include("plantillas/Pie.php") ?>
  </div>
</body>
</html>
