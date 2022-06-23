<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilos/estilosss.css">
</head>
     
<body>
    <video src="imgphp/Lake%20-%2091562.mp4" autoplay loop muted></video>
    <a href="iniciodesesion.php" class="enlace"><button class="boton boton2">Regresar</button></a>

    <div class="container">
    <form action="" id="form" class="form">
    <h1>Regístrate</h1>
      <div class="form-input myname">
        <p id="inicio"></p>
      <label>Nombre</label>
      <input type="text" name="myname" id="myname">
      <p id="nom"></p>
      </div>

      <div class="form-input surname">
       <label>Apellidos</label>
        <input type="text" name="surname" id="surname">
        <p id="ape"></p>
      </div>

      <div class="form-input email">
      <label>Correo electrónico</label>
      <input type="email" name="email" id="email">
      <p id="cor"></p>
      </div>

      <div class="form-input mobile">
      <label>Numero de telefono</label>
      <input type="tel" name="mobile" id="mobile">
      <p id="mobi"></p>
      </div>

      <div class="form-input user">
      <label>Nombre De Usuario</label>
      <input type="text" name="user" id="user">
      <p id="usuario"></p>
      </div>

      <div class="form-input password">
      <label>Contraseña</label>
      <input type="password" name="pass1" id="pass1">
      <p id="pass"></p>
      </div>

      <div class="form-input repeatPassword">
      <label >Repetite la Contraseña</label>
      <input type="password" name="pass2" id="pass2">
      <p id="passdos"></p>
      </div>
      
      <label for="sexo">Elije tu sexo</label>
      <center><input  type="radio" name="sexo"id="hombre" required><label for="sexo">hombre</label> 
      <input  type="radio" name="sexo"id="mujer" required><label for="sexo">Mujer</label> 
      <p class="mensajeError"></p>
      </center>

      <input style="background-color:#c2adee" type="submit" value="enviar">
      <input style="background-color:#c2adee" type="reset" value="borrar">

      <script src="js/from.js"></script>
    </form>

  </div>

</body>

</html>