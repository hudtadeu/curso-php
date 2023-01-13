<html>

<body>
  <?php
  /* Validações
  Funções (filter_input - filter_var)
  FILTER_VALIDATE_INT
  FILTER_VALIDATE_EMAIL
  FILTER_VALIDATE_FLOAT
  FILTER_VALIDATE_IP
  FILTER_VALIDATE_URL
  ///////Sanitização////// limpar variaveis
  Funções (filter_input - filter_var)
  FILTER_SANITIZE_SPECIAL_CHARS
  FILTER_SANITIZE_INT
  FILTER_SANITIZE_EMAIL
  FILTER_SANITIZE_URL
*/
  ?>

  <?php
  if (isset($_POST['enviar-formulario'])) :
    // Array de erros
    $erros = array();

    // Validações
    /*    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) :
      $erros[] = "Idade precisa ser um inteiro";
    endif;

    if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) :
      $erros[] = "Email inválido";
    endif;

    if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) :
      $erros[] = "Peso precisa ser um float";
    endif;

    if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) :
      $erros[] = "IP inválido";
    endif;

    if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) :
      $erros[] = "URL inválido";
    endif; */
    // Sanitização
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);


    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($idade, FILTER_VALIDATE_INT)) :
      $ERROS[] = "Idade precisa ser um inteiro";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) :
      $ERROS[] = "Email inválido";
    endif;


    $url = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_URL);
    if (filter_var($email, FILTER_VALIDATE_URL)) :
      $ERROS[] = "URL inválida";
    endif;

    // exibindo mensagens
    if (!empty($erros)) :
      foreach ($erros as $erro) :
        echo "<li> $erro </li>";
      endforeach;
    else :
      echo "Parabéns, seus dados estão corretos";
    endif;
  endif;
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="peso"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario"> Enviar </button><br>
  </form>

</body>

</html>