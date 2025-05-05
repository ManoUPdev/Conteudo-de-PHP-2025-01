<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulário de Contato</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <h1>Entre em Contato</h1>

    <?php
      $status = '';
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $name = trim($_POST['name'] ?? '');
          $email = trim($_POST['email'] ?? '');
          $message = trim($_POST['message'] ?? '');

          if (empty($name) || empty($email) || empty($message)) {
              $status = '<p class="error">Por favor, preencha todos os campos.</p>';
          } else {
              // Aqui você pode usar mail(), salvar no banco, etc.
              $status = '<p class="success">Mensagem enviada com sucesso!</p>';
          }
      }
    ?>

    <form action="index.php" method="POST" id="contactForm">
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="message">Mensagem:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Enviar</button>
    </form>

    <?php echo $status; ?>
  </div>
</body>
</html>
