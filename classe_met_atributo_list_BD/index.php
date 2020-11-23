<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>LIstar</title>
    </head>
    <body>
        <?php
            require './Users.php';
            $cadastrar = new Users();
           $result_users = $cadastrar->listar();
          // var_dump($result_users);
           foreach ($result_users as $row_user) {
            extract($row_user);
            echo "Id: " . $id . "<br>";
            echo "Nome: " . $nome . "<br>";
            echo "Email: " . $email . "<br>";
            echo "<hr>";
        }
        ?>
    </body>
</html>
