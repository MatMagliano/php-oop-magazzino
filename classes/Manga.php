<?php 
  require_once 'Graphic.php';

  class Manga extends Graphic 
  {
    public function __construct($_title, $_genre = 'Manga', $_page, $_price, $_publishing)
    {
      parent::__construct($_title, $_genre, $_page, $_price, $_publishing);
    }
  }