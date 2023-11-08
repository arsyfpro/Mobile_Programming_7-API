<?php

  $HOST = 'localhost';
  $USER = 'root';
  $PASS = '';
  $DB = 'mobile_prog_7';

  $CON = mysqli_connect($HOST, $USER, $PASS, $DB);

  if (!$CON) {

    die("Connection Failed: ".mysqli_connect_error());
    
  }

?>