<?php
session_start();

$data = session_destroy();
echo $data;

?>