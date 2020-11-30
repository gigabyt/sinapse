<?php
session_start();

unset($_SESSION['agente']);
header("Location: index.php");
exit;