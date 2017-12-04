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
          <h1>Servicios</h1>
        </div>
        <div class="Texto_ubicacion">
          <p>Actualmente trabajamos con los siguientes servicios:<p>
        </div>
        <div class="servicios">
          <div class="servicio">
            <div class="icono-servicio">
              <span id="icono1">
                <style type="text/css">
                #icono1{
                  float: left;
                  width: 64px;
                  height: 64px;
                  margin: 17px 0 0 17px;
                  background-image: url(imagenes/servicios/auditoria-puerto-vallarta.png);
                }
                .servicio:hover #icono1{
                  background-image: url(imagenes/servicios/auditoria-puerto-vallartaa.png);
                }
                </style>
              </span>
            </div>
            <div class="texto-servicio">
              <h3>Auditoria</h3>
              <p>Servicios de revisión y evaluacion de los procesoscontables, administrativos y operativos de la empresa.</p>
            </div>
            </div>

          <div class="servicio">
            <div class="icono-servicio">
              <span id="icono2">
                <style type="text/css">
                #icono2{
                  float: left;
                  width: 64px;
                  height: 64px;
                  margin: 20px 0 0 20px;
                  background-image: url(imagenes/servicios/cobranza-puerto-vallarta.png);
                }
                .servicio:hover #icono2{
                  background-image: url(imagenes/servicios/cobranza-puerto-vallartaa.png);
                }
                </style>
              </span>
            </div>
            <div class="texto-servicio">
              <h3>Contables</h3>
              <p>Servicio en captura de ingresos y egresos para el control de la empresa</p>
            </div>
            </div>
            <div class="servicio">
              <div class="icono-servicio">
                <span id="icono3">
                  <style type="text/css">
                  #icono3{
                    float: left;
                    width: 64px;
                    height: 64px;
                    margin: 17px 0 0 17px;
                    background-image: url(imagenes/servicios/asesoria-fiscal-puerto-vallarta.png);
                  }
                  .servicio:hover #icono3{
                    background-image: url(imagenes/servicios/asesoria-fiscal-puerto-vallartaa.png);
                  }
                  </style>
                </span>
              </div>
              <div class="texto-servicio">
                <h3>Fiscales</h3>
                <p>Asesoria en el cumplimiento de las obligaciones ante las instituciones Federales, Estatales, y asi como su pago en tiempo y forma</p>
              </div>
              </div>
              <div class="servicio">
                <div class="icono-servicio">
                  <span id="icono4">
                    <style type="text/css">
                    #icono4{
                      float: left;
                      width: 64px;
                      height: 64px;
                      margin: 17px 0 0 17px;
                      background-image: url(imagenes/servicios/contabilidad-puerto-vallarta.png);
                    }
                    .servicio:hover #icono4{
                      background-image: url(imagenes/servicios/contabilidad-puerto-vallartaa.png);
                    }
                    </style>
                  </span>
                </div>
                <div class="texto-servicio">
                  <h3>Finanieros</h3>
                  <p>Asesoramiento en el manejo del capital y uso de servicios bancarios</p>
                </div>
              </div>
              <div class="servicio">
                <div class="icono-servicio">
                  <span id="icono5">
                    <style type="text/css">
                    #icono5{
                      float: left;
                      width: 64px;
                      height: 64px;
                      margin: 17px 0 0 17px;
                      background-image: url(imagenes/servicios/otro-puerto-vallarta.png);
                    }
                    .servicio:hover #icono5{
                      background-image: url(imagenes/servicios/otro-puerto-vallartaa.png);
                    }
                    </style>
                  </span>
              </div>
              <div class="texto-servicio">
                <h3>Administrativos</h3>
                <p>Apoyo en los procesos administrativos para hacerlos mas rápidos y efectivos, toma de desiciones en base a los estados de resultados </p>
              </div>
              </div>
        </div>
      </article>
      <?php include("plantillas/Pie.php") ?>
    </div>
  </body>
</html>
