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
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.2942143775351!2d-105.22916757082496!3d20.662378099137392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8421458e572b2fb9%3A0xd8df74defa35b634!2sCalle+Portal+Constituci%C3%B3n+681%2C+Jardines+del+Puerto%2C+48315+Puerto+Vallarta%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1511473629734" style="width: 100%" height="400px" ></iframe>
		    </div>  
      <div>
        <h1><center><p>Somos la mejor opcion en puerto vallarta para llevar tu negocio al exito</p></center></h1>
            <form  class="contact_form" action="#" id="contact_form" runat="server">
        <div>
            <ul>
                <li>
                    <h2>Contacto</h2>
                    <span class="required_notification">* Datos requeridos</span>
                </li>
                <li>
                    <label for="name">Nombre:</label>
                    <input type="text" placeholder="nombre(s)" required />
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="info@developerji.com" required />
                    
                </li>
                <li>
                    <label for="phone">Telefono:</label>
                    <input type="tel" name="telefono" placeholder="xxx-xxx-xx-xx" required pattern="(0-9)+" />
                    
                </li>
                <li>
                    <label for="message">Mensaje:</label>
                    <textarea name="message" cols="40" rows="6" required></textarea>
                </li>
                <li>
                    <button class="submit" type="submit">Enviar mensaje</button>
                </li>
            </ul>
              </div>
            </form>
       </div>
      </article>
      <?php include("plantillas/Pie.php") ?>
    </div>
  </body>
</html>
