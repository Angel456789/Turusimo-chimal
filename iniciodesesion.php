<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <video src="imgphp/Aurora%20Borealis%20-%2074183.mp4" autoplay loop muted></video>
        <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}
body {
    margin: 0;
}
video{
    position: fixed;
    min-width: 100%;
    min-height: 100%;    
    top:50%;
    left:50%;  
    transform: translateX(-50%) translateY(-50%);
    z-index: -1;
}
.contenedor{
    
    width: 500px;
    margin: auto;
    background-color:white;
    color:black;
    font-size: 15px;
    padding: 100px 20px;
    margin-top: 50px;
    border-radius: 70px; 
   
}
input[type="text"],
input[type="password"]{
    font-size:30px;
    width:92%;
    padding:15px;
    border: none;
}
.boton {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    background-color: aquamarine;
    margin-top: 15px;
    margin-left: 15px;
    border:  none;
    border-radius: 15px;
    box-shadow: 0 9px ;
    color: black;
    width: 25%;
    box-shadow: 0 9px #999;

}

.boton:hover {
    background-color: darkcyan;
}
.boton:active{
    background-color:darkcyan;
    box-shadow: 0 5px #666 ;
    transform: translateY(4px);
}

.enlace {
    text-decoration: none;
    color: black;
    width: 25%;
}
.formulario{
    margin-top:50px;
    padding: 3px;
}
h1{
    text-align: center;
    font-size: 100px;
}
input[type=submit]{
        float:center;
        width:100%;
        padding:8px 12px;
        margin:8px 0 0;
        font-family:'Montserrat',sans-serif;
        border:2px solid #78788c;
        background:0;
        color:#5a5a6e;
        cursor:pointer;
        transition:all .3s;
        font-size: 20px;
    }
    
input[type=submit]:hover{
        background:#78788c;
        color:#fff;
    }

@media (max-width: 720px){
    h1{
        margin-top: 150px;
    }
    .formulario{
        margin-top: 100px;
    }

}
.me{
    color:brown;
    font-size:18px;
}
        </style>
    </head>
    <body>
         <!-- Boton -->
        <a href="index1.html" class="enlace"><button class="boton">Regresar</button></a>

         <!-- Formulario -->
         <h1 style="color:cornflowerblue">Inicio de sesion</h1>
         <form action="" class="formulario" id="form">
            <div class="contenedor">
            <i><img src="imgphp/45.png"></i>
            <input type="text" id="user" name="nombre" placeholder="Usuario">
            <p id="usuario" class="me"></p>

            <i><img src="imgphp/candado2.png"></i>
            <input type="password" id="password" name="contra" placeholder="Contraseña">
            <p id="contrados" class="me"></p>
            <input type="submit" value="Iniciar Sesion" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <center><p>¿No tienes cuenta?<a href="tarea.php">Registrate!</a></p></center>
            </div>
            <script src="js/inicio.js"></script>
        </form>
    </body>
</html>