<!DOCTYPE html>
<html>

<head>
  <title>Moto rudy - ¡Mensajeria de confianza!</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <link rel="stylesheet" href="estilos.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="imagenes/logo.png">
</head>

<body>

<?php
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
$to = "CUENTA_DESTINO@DOMINIO.COM";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
$header = "From: no-reply@c2090818.ferozo.com\nReply-To:".$_POST["email"]."\n";
if(mail($to, $subject, $contenido ,$header)){
echo "Mail Enviado.";
}
}
?>


<header class="sticky-top">
  <div class=" container-fluid">
    <div class="row">
      <div class="col-sm-4 text-center">
        <a href="tel:+541169478162" style="color: inherit; text-decoration: none;"> <p class="m-0 pt-1 textoHeader fw-bold"><img src="iconos/cellphone.png" alt="" width="20px" class>1169478162</p></a>
      </div>
      <div class="col-sm-4 text-center">
        <a href="contacto.html" style="color: inherit; text-decoration: none;">
        <p class="m-0 pt-1 pb-1 textoHeader fw-bold"><img src="iconos/ubicacion.png" alt="" width="20px">E De San Martin
          3224, Valentin Alsina,
          Buenos Aires, Argentina</p>
        </a>
      </div>
      <div class="col-sm-4 text-center">
        <a href="mailto:belozojuan@gmail.com" style="color: inherit; text-decoration: none;">
        <p class="m-0 pt-1 pb-1 textoHeader fw-bold"><img src="iconos/correo.png" alt="" width="20px">
          belozojuan@gmail.com</p>
        </a>
      </div>
  
    </div>
    </div>
  </header>
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">¡Excelente!</h4>
  <p>Su mensaje ha sido enviado con éxito</p>
  <hr>
  <p class="mb-0">Le responderemos a la brevedad, ¡Muchas gracias!.</p>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="imagenes/logo.png" alt="" width="50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse copy"></div>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item flex-fill justify-content-center">
            <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contacto.html">Contacto</a>
          </li>
        </ul>

      </div>
    </div>
</nav>

<div class="container text-center mb-5">
  <div class="ratio ratio-21x9">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4016.505034472948!2d-58.412247305198406!3d-34.67200247072336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe1a591f3280ad8e!2sMoto%20Rudy!5e0!3m2!1ses!2sar!4v1609174826604!5m2!1ses!2sar"
      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>
  </div>
</div>

<form action="enviar.php" method="post" class="container-sm mt-5 mb-5 formulario bg-dark pb-4 formulario" onkeydown="return event.key != 'Enter';">
  <div class="row g-3">
    <div class="col-6">
      <input type="text" class="form-control nombre" placeholder="Nombre" aria-label="Nombre" name="nombre" oninput="oninputFuncion(inputNombre)" onkeypress="return SoloLetras(event)">
    </div>
    <div class="col-6">
      <input type="text" class="form-control apellido" placeholder="Apellido" aria-label="Apellido" name="apellido" oninput="oninputFuncion(inputApellido)" onkeypress="return SoloLetras(event)">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-6">
      <label for="exampleFormControlInput1" class="form-label"></label>
      <input type="email" class="form-control email" id="exampleFormControlInput1" placeholder="Correo Electrónico" name="email" oninput="oninputEmail()">  
    </div>
    <div class="col-6">
      <label for="telefono" class="form-label"></label>
      <input type="number" class="form-control telefono" id="telefono" placeholder="Telefono de contacto" name="telefono" oninput="oninputTelefono()">
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"></label>
    <textarea class="form-control mensaje" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje" name="mensaje" id="validationDefault01"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-light disabled" type="submit" value="ENVIAR">Enviar</button>
  </div>
</form>

<div class="footer fixed-bottom bg-dark m-0">
    <p class="text-center m-0" style="font-weight: bold; font-size: 15px;"> © 2021 - MOTORUDY SINCE 1996 </p>
  </div>

  <script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
</body>
</html>