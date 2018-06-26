<?php
  function exibeTela ($argNome, $argIdade) {
   echo "<p> Olá meu nome é $argNome e minha idade é $argIdade </p>";
  }

  exibeTela("Leandro", 32);
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>