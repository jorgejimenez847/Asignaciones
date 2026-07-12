<?php
  //$nombre = $_POST["nombre"];
  $nombre = " <script>Ana</script> ";
  $nombre = strip_tags($nombre); // elimina etiquetas HTML y PHP
  $nombre = trim($nombre); // elimina espacios en blanco al inicio y al final
  $nombre = htmlspecialchars($nombre);
  echo $nombre; // dato limpio