<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        form {
        margin: 25px auto;
        width: 700px;
        height: 450px;
        background-color: #333;
        padding: 30px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        margin-bottom: 100px;
        }
        #formulario{
        margin-top: 10%;
        display: flex;
        flex-direction: row;
        margin-left: 250px;
        }
        h2 {
        text-align: center;
        color: white;
        }
        label {
        display: block;
        margin-bottom: 10%;
        color: white;
        }
        #invitado{
        color: blue;
        }
        #invitado:hover{
        color: blue;
        }
        input[type="text"],
        input[type="password"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid black;
        }
        input[type="submit"] {
        background-color: blue;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-family: Arial, sans-serif;
        }
        input[type="submit"]:hover {
        background-color: blue;
        }
        

        #img1 {
        width: 300px;
        height: 510px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        margin-top: 25px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

    </style>

  </head>
  <body>
    <div id="formulario">
      <div id="container1">
      <img id="img1" src="Imagenes/mj.jpg">
      </div>
      <div id="container2">
        <form action="index.php?controller=UsersController&action=validacion" method='POST' >
          <h2>Iniciar Sesión</h2>
          <label for="Nombre">Usuario:</label>
          <input type="text" id="Nombre" name="Nombre">
          <?php
            if(isset($data) && isset($data['Nombre'])){
              echo "<div class='alert alert-danger'>".$data['Nombre']."</div>";
            }
          ?>
          <label for="Constrasena" style="margin-top: 6%;">Contraseña:</label>
          <input type="password" id="Contrasena" name="Contrasena">
          <?php

            if(isset($data) && isset($data['Contrasena'])){
              echo "<div class='alert alert-danger'>".$data['Contrasena']."</div>";
            }
          ?>
          <div style="text-align: center;">
          <input type="submit" value="Iniciar Sesion" name="validacion"><br><br>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>