<head>
  <title>Verificacion</title>
</head>
<body bgcolor="#BD9DE7">
        <h4 align="right">Reyes Gonzalez Victor Eduardo</h4>
    <h2>Verificar</h2>
  <?php
  function verificarContraseñas() {
    $contra_01 = $_POST['contra_01'];
    $contra_02 = $_POST['contra_02'];

    if ($contra_01 !== $contra_02) {
      echo "Las claves ingresadas no coinciden.";
    } else {
      echo "Las claves coinciden.";
    }
  }

  verificarContraseñas();
  ?>
</body>
</html>