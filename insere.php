<html>
    <body>
        <?php
          $pname = $_POST['pname'];
          $sname = $_POST['sname'];
          $cpf = $_POST['cpf'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $usuario = $_POST['usuario'];
          $senha = $_POST['senha'];
          $nascimento = $_POST['nascimento'];
          $sexo = $_POST['sexo'];
          $coffe = $_POST['coffe'];
          $tipo = $_POST['tipo'];
          $marcas = $_POST['marcas'];
          $comentario = $_POST['comentario'];
          $link = mysqli_connect("localhost", "root", "", "coffelovers");
          $query = "INSERT INTO usuario(pname,sname,cpf,email,phone, usuario, senha, nascimento, sexo, coffe, tipo, marcas, comentario) VALUES ('$pname','$sname', $cpf', '$email', '$phone', '$usuario', '$senha', '$nascimento', '$sexo', '$coffe', '$tipo', '$marcas', '$comentario')";
            mysqli_query($link, $query);
            mysqli_close($link);
            $host  = ('localhost');
            $uri   = ('coffelovers');
            $extra = 'index.php';
            header("Location: http://$host/$uri/$extra");
        ?>
    </body>
</html>