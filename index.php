<?php

require_once 'classes/Graphic.php';
require_once 'classes/Comics.php';
require_once 'classes/Manga.php';

$thor = new Comics('Thor', 'Comics', 250, '5.00€', 'Marvel');

var_dump($thor);