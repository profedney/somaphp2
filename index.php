<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Soma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Calculadora de Soma</h1>
<!-- form em bootstrap-->

<form method="post" action="">
  <div class="mb-3">
  <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required></div>
 
  <div class="mb-3 form-check">
  <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Somar</button>
</form>

    <?php
        // Obtém os valores dos campos do formulário
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $soma = $num1 + $num2;

        // Exibe o resultado
        echo "<h2>Resultado da Soma:</h2>";
        echo "<h2>$soma</h2>";
    ?>
</body>
</html>
