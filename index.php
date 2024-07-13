<?php
if (isset($_GET['x']) && $_GET['x'] == 'home') {
  $page = "home.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'wilayah') {
  $page = "wilayah.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'tps') {
  $page = "tps.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'pemilih') {
  $page = "pemilih.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'kandidat') {
  $page = "kandidat.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'partai') {
  $page = "partai.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'pemungutan_suara') {
  $page = "pemungutan_suara.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'hasil_pemilu') {
  $page = "hasil_pemilu.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
  include "login.php";
} else {
  include "main.php";
}
?>