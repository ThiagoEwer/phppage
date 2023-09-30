<?php
  include_once("topo.php");
  include_once("menu.php");

  if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
  } else {
    $pg = 'conteudo.php';
  }
  include_once($pg);
  include_once("rodape.php");
?>
