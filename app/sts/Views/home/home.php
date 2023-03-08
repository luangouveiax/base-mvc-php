<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>

<div class="container">
  <div class="row">
    <h1>Estrutura Base para Projetos em MVC</h1>
  </div>

  <div class="row">
    <?php
    if(!empty($this->dados)){
      echo "<h2> Dados vindo da Controller: </h2>";
      var_dump($this->dados);
    } 
    ?>
  </div>
</div>