<?php

  require_once("clam.php");

  class NotFreshClam extends Clam {

    public function __construct() {
      parent::__construct();
      echo "... <br>";
    }

  }

?>
