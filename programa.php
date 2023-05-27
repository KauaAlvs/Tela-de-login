<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuarioCerto = "Admin";
    $senhaCerta = "12345";

    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    
    if ($usuario == $usuarioCerto && $senha == $senhaCerta) {
     
      echo "<p>Olá, Admin! Acesso concedido. Divirta-se explorando nosso sistema!</p>";
    } else 
      echo "<p>Acesso negado! Verifique suas informações e tente novamente!</p>";
    
  }
  ?>