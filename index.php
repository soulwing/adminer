<?php
$_GET["pgsql"] = "";
$_GET["username"] = "";
$_GET["db"] = $_ENV['ADMINER_DB_NAME'];

function adminer_object() {
  class AdminerAutoLogin extends Adminer {
    function credentials() {
      return array($_ENV['ADMINER_DB_HOST'], $_ENV['ADMINER_DB_USER'], $_ENV['ADMINER_DB_PASSWORD']);
    }

    function database() {
      return $_ENV['ADMINER_DB_NAME'];
    }
  }

  return new AdminerAutoLogin;
}

include "./adminer.php";

