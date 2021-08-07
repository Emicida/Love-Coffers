<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Formulário</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <script src="script.js"></script>
    <style>
      body {
        background-image: url('back.jpg');
      }
    </style>
    <center><font color = "white">
      <h1> Página de cadastro </h1>
      <p><fform action="insere.php" method="post" autocomplete="on">
        <label for="pname">Nome:</label><br>
        <input type="text" id="pname" name="pname" placeholder="Fulano" required><br>
        <br>
        <label for="sname">Sobrenome:</label><br>
        <input type="text" id="sname" name="sname" placeholder="Silva" required><br>
        <br>
        <label for="cpf">CPF:</label><br>
        <input type="number" id="cpf" name="cpf" placeholder="Só numeros" required><br>
        <br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="...@gmail.com" required><br>
        <br>
        <label for="phone">Telefone ou celular:</label><br>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="(99) 9999-9999" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" required><br>
        <br>
        <label for="usuario">Usuário (apelido): </label><br>
        <input type="text" id="usuario" name="usuario" placeholder="StarbucksS2" required><br>
        <br>
        <label for="senha">Crie uma senha:</label><br>
        <input type="password" id="senha" name="senha" placeholder="Senha0123@" onblur="senhaValida(senha)" required><br>
        <br><label for="nascimento">Data de nascimento:</label><br>
        <input type="date" id="nascimento" name="nascimento " required>
        <p> Sexo:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Masculino</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Feminino</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Outro</label><br>
        <br>
        <label for="coffe">Qual sua relação com o café?</label><br>
        <select id="coffe" name="coffe">
          <option value="baixo">Ás veses tomo um copo</option>
          <option value="medio">Sempre tomo para acordar </option>
          <option value="alto">Tomo todo dia</option>
          <option value="maximo">Não consigo viver sem</option>
        </select>
        <p>Que tipo de café você toma?</p>
        <input type="checkbox" id="suave" name="tipo">
        <label for="suave"> Tradicional</label><br>
        <input type="checkbox" id="equilibrado" name="tipo">
        <label for="equilibrado"> Forte</label><br>
        <input type="checkbox" id="forte" name="tipo">
        <label for="forte"> Extra forte</label><br>
        <input type="checkbox" id="descafe" name="tipo">
        <label for="descafe"> Descafeindado</label><br>
        <br>
        <label for="marcas">Qual marcas você compra?</label><br>
        <select id="marcas" name="marcas" size="4" multiple>
          <option value="melita">Melita</option>
          <option value="tres">Três Corações</option>
          <option value="nescafe">Nescafé</option>
          <option value="pimpinela">Pimpinela </option>
          <option value="qualita">Qualitá</option>
          <option value="pilao">Pilão</option>
          <option value="jesus">Bom Jesus</option>
          <option value="diplomata">Diplomata  </option>
          <option value="giro">Giro</option>
          <option value="caboclo">Caboclo</option>
          <option value="moka">Moka</option>
          <option value="marata">Maratá</option>
          <option value="aro">Aro</option>
          <option value="bravo">Bravo Contralto</option>
          <option value="espressione">Espressione</option>
          <option value="starbucks">Starbucks</option>
        </select><br>
        <p>Por favor conte-nos alguma experiência sua com café, ou nos de alguma sugestão...</p>
        <textarea name="message" rows="10" cols="30"></textarea><br>
        <br>
        <input type="submit" value="Concluir">
        <input type="reset" value="Resetar">
      </form></p>
      <br>
      <A HREF="index.html">Voltar ao início</A>
      </font>
    </center>
  </body>
</html>