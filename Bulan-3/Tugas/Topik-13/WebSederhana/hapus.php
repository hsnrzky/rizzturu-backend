<?php
require "connect.php";
$id = $_GET['id'];
$pdo->DeleteArt($id);
?>