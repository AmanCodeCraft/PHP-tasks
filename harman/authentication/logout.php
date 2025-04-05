<?php

session_start(); //session start here
session_unset();
session_destroy();

header('Location:./registration.php');
?> 

