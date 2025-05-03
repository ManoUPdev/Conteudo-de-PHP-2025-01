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
    if($_SERVER["REQUEST_METHOD"] === "POST") {
       $name = trim($_POST['name'] ?? '');
       $email = trim($_POST['email' ?? '']);
       $message = trim($_POST['message']  ?? '');
    }

// continuar
