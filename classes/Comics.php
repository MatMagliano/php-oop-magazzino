<?php 
  require_once 'Graphic.php';

  class Comics extends Graphic 
  {
    public function __construct($_title, $_genre = 'Comics', $_page, $_price, $_publishing)
    {
      parent::__construct($_title, $_genre, $_page, $_price, $_publishing);
    }
  }

  


