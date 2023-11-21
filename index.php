<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="iniciarsesion.php" method="POST">
        <h1>Iniciar Sesión</h1>
        <hr>
        <?php
          if(isset($_GET['error'])){
          ?>
          <p class="error">
            <?php
              echo $_GET['error']
            ?>
          </p>
        <?php
            
          }

        ?>


        <hr>
        <i class="fa-solid fa-user"></i>
        <label for="">Usuario:</label>
        <input type="text" name="Usuario" placeholder="Sofi17">
        <hr>
        <i class="fa-solid fa-unlock"></i>
        <label for="">Contraseña:</label>
        <input type="text" name="contraseña" placeholder="********">
        <hr>
       <button type="submit">Iniciar Sesión</button>
       
       <a href="registrar.php">Registrarme</a>

    </form>
</body>
</html>