<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Metodo e Atributo</title>
    </head>
    <body>
        <?php
           require './Usuario.php';
           $usuario = new Usuario();
          $msg =  $usuario->apagar("Julio Paschoal", "juliocpaschoal@gmail.com");
           echo $msg;
        ?>
    </body>
</html>
