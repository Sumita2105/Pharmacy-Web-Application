<?php
session_start();
echo $_SESSION['customer'];
echo $_SESSION['customerid'];
unset($_SESSION['cart']);
unset($_SESSION['user']);
echo $_SESSION['user'];





?>