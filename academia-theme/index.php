<?php
  function exibeTela ($argNome, $argIdade) {
   echo "<p> Olá meu nome é $argNome e minha idade é $argIdade </p>";
  }

  exibeTela("Leandro", 32);
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>


<?php 
  $nomes = array('Leandro', 'Dayana', 'Antonio', 'Lucas');

  foreach ($nomes as $nome):
    echo "<p> Meu nome á $nome </p>";
  endforeach;

  $contador = 0;
  while($contador < count($nomes)):
    echo "<p> Meu nome á $nomes[$contador] </p>";
    $contador++;
  endwhile;
?>
