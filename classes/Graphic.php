<?php
  class Graphic
  {
    public $title;
    public $genre;
    public $page;
    protected $price;
    public $publishing;  

    public function __construct($_title, $_genre, $_page, $_price, $_publishing)
    {
      if (!is_int($_page)) {
        die('non hai inserito il numero delle pagine!');
      }
      $this->title = $_title;
      $this->genre = $_genre;
      $this->page = $_page;
      $this->price = $_price;
      $this->publishing = $_publishing;
    }
  } 



