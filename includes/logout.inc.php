<?php
session_start();
session_unset();
session_destroy();

include_once 'functions.php';
redirect('../index.php');
die();